<?php
/**
 * GoDaddy Storage Link Creator for Laravel
 * 
 * INSTRUCTIONS:
 * 1. Upload this file to your public_html folder on GoDaddy
 * 2. Visit https://road2srcc.in/create-storage-link.php in your browser
 * 3. DELETE THIS FILE IMMEDIATELY after running (security risk!)
 * 
 * This script creates the storage symlink that Laravel needs
 * to serve files from storage/app/public via the web.
 */

// Prevent caching
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Content-Type: text/html; charset=utf-8');

echo "<h2>Laravel Storage Link Creator</h2>";

// Define paths
$storagePath = __DIR__ . '/../storage/app/public';
$linkPath = __DIR__ . '/storage';

echo "<p><strong>Storage Path:</strong> " . realpath($storagePath) . "</p>";
echo "<p><strong>Link Path:</strong> " . $linkPath . "</p>";

// Check if storage folder exists
if (!file_exists($storagePath)) {
    echo "<p style='color: red;'>❌ ERROR: Storage folder does not exist at: $storagePath</p>";
    echo "<p>Make sure you have uploaded the entire 'storage/app/public' folder.</p>";
    exit;
}

// Check if link already exists
if (file_exists($linkPath)) {
    if (is_link($linkPath)) {
        echo "<p style='color: green;'>✅ Storage symlink already exists and is valid!</p>";
        echo "<p>Target: " . readlink($linkPath) . "</p>";
    } else {
        echo "<p style='color: orange;'>⚠️ A 'storage' folder exists but it's not a symlink.</p>";
        echo "<p>You may need to delete it first if it's causing issues.</p>";
    }
    exit;
}

// Try to create symlink
if (@symlink($storagePath, $linkPath)) {
    echo "<p style='color: green;'>✅ SUCCESS! Storage symlink created successfully!</p>";
    echo "<p><strong>IMPORTANT:</strong> Delete this file immediately for security!</p>";
} else {
    // Symlink failed, try alternative approach
    echo "<p style='color: orange;'>⚠️ Symlink creation failed (common on shared hosting).</p>";
    echo "<p>Trying alternative: Creating a storage folder with .htaccess redirect...</p>";
    
    // Create storage directory
    if (!mkdir($linkPath, 0755, true)) {
        echo "<p style='color: red;'>❌ Failed to create storage directory.</p>";
        exit;
    }
    
    // Create .htaccess for URL rewriting
    $htaccess = 'RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ ../storage/app/public/$1 [L]';
    
    if (file_put_contents($linkPath . '/.htaccess', $htaccess)) {
        echo "<p style='color: green;'>✅ Created storage folder with .htaccess redirect.</p>";
        echo "<p><strong>IMPORTANT:</strong> Delete this file immediately for security!</p>";
    } else {
        echo "<p style='color: red;'>❌ Failed to create .htaccess file.</p>";
    }
}

echo "<hr>";
echo "<h3>🗑️ SECURITY REMINDER</h3>";
echo "<p style='color: red; font-weight: bold;'>DELETE THIS FILE (create-storage-link.php) NOW!</p>";
echo "<p>Leaving this file on your server is a security risk.</p>";
