<?php
/**
 * Laravel Deployment Helper for GoDaddy
 * 
 * This script creates a ZIP file containing all files needed for deployment.
 * Run this locally (php create-deploy-package.php) before uploading to GoDaddy.
 */

$projectRoot = __DIR__;
$deployDir = $projectRoot . '/deploy-package';
$zipFile = $projectRoot . '/deploy-package.zip';

// Files and folders to include in deployment
$deployFiles = [
    // Blade Views
    'resources/views/components/navbar.blade.php',
    'resources/views/components/hero.blade.php',
    'resources/views/components/results.blade.php',
    'resources/views/components/features.blade.php',
    'resources/views/components/partner.blade.php',
    'resources/views/components/footer.blade.php',
    'resources/views/store/layout.blade.php',
    'resources/views/store/index.blade.php',
    
    // Compiled Assets
    'public/css/app.css',
    'public/css/store.css',
    'public/js/app.js',
    'public/mix-manifest.json',
    
    // Config
    'tailwind.config.js',
];

// Folders to include entirely
$deployFolders = [
    'public/images',
    'storage/app/public/site',
];

// Utility scripts to include
$utilityScripts = [
    'public/create-storage-link.php',
    'public/debug-helper.php',
];

echo "=== Laravel Deployment Package Creator ===\n\n";

// Clean up old deploy directory
if (is_dir($deployDir)) {
    deleteDirectory($deployDir);
}
mkdir($deployDir, 0755, true);

// Copy individual files
echo "Copying files...\n";
foreach ($deployFiles as $file) {
    $source = $projectRoot . '/' . $file;
    $dest = $deployDir . '/' . $file;
    
    if (file_exists($source)) {
        $destDir = dirname($dest);
        if (!is_dir($destDir)) {
            mkdir($destDir, 0755, true);
        }
        copy($source, $dest);
        echo "  ✓ $file\n";
    } else {
        echo "  ✗ $file (not found)\n";
    }
}

// Copy folders
echo "\nCopying folders...\n";
foreach ($deployFolders as $folder) {
    $source = $projectRoot . '/' . $folder;
    $dest = $deployDir . '/' . $folder;
    
    if (is_dir($source)) {
        copyDirectory($source, $dest);
        echo "  ✓ $folder\n";
    } else {
        echo "  ✗ $folder (not found)\n";
    }
}

// Copy utility scripts
echo "\nCopying utility scripts...\n";
foreach ($utilityScripts as $file) {
    $source = $projectRoot . '/' . $file;
    $dest = $deployDir . '/' . $file;
    
    if (file_exists($source)) {
        $destDir = dirname($dest);
        if (!is_dir($destDir)) {
            mkdir($destDir, 0755, true);
        }
        copy($source, $dest);
        echo "  ✓ $file\n";
    }
}

// Create cache clear script
$clearCacheScript = '<?php
// clear-cache.php - Run once after deployment, then DELETE this file!
header("Content-Type: text/plain");
echo "Clearing Laravel caches...\n\n";

$commands = [
    "php ../artisan view:clear",
    "php ../artisan cache:clear", 
    "php ../artisan config:clear",
    "php ../artisan route:clear",
];

foreach ($commands as $cmd) {
    echo "Running: $cmd\n";
    echo shell_exec($cmd) . "\n";
}

echo "\n✓ All caches cleared!\n";
echo "\n⚠️ IMPORTANT: Delete this file (clear-cache.php) now for security!";
';
file_put_contents($deployDir . '/public/clear-cache.php', $clearCacheScript);
echo "  ✓ public/clear-cache.php (created)\n";

// Create ZIP file
echo "\nCreating ZIP file...\n";
if (file_exists($zipFile)) {
    unlink($zipFile);
}

$zip = new ZipArchive();
if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
    addDirectoryToZip($zip, $deployDir, '');
    $zip->close();
    echo "✓ Created: deploy-package.zip\n";
} else {
    echo "✗ Failed to create ZIP file\n";
}

// Cleanup
deleteDirectory($deployDir);

echo "\n=== Deployment Instructions ===\n";
echo "1. Upload 'deploy-package.zip' to your GoDaddy public_html\n";
echo "2. Extract the ZIP file (right-click > Extract in cPanel File Manager)\n";
echo "3. Visit https://road2srcc.in/create-storage-link.php\n";
echo "4. Visit https://road2srcc.in/clear-cache.php\n";
echo "5. DELETE both .php utility scripts after running them!\n";
echo "6. Refresh your site - the new design should appear!\n\n";

// Helper functions
function copyDirectory($source, $dest) {
    if (!is_dir($dest)) {
        mkdir($dest, 0755, true);
    }
    $files = scandir($source);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $srcPath = $source . '/' . $file;
        $destPath = $dest . '/' . $file;
        if (is_dir($srcPath)) {
            copyDirectory($srcPath, $destPath);
        } else {
            copy($srcPath, $destPath);
        }
    }
}

function deleteDirectory($dir) {
    if (!is_dir($dir)) return;
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            deleteDirectory($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

function addDirectoryToZip($zip, $dir, $prefix) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $path = $dir . '/' . $file;
        $zipPath = $prefix ? $prefix . '/' . $file : $file;
        if (is_dir($path)) {
            addDirectoryToZip($zip, $path, $zipPath);
        } else {
            $zip->addFile($path, $zipPath);
        }
    }
}
