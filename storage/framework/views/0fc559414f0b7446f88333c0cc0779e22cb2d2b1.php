<div class="relative">
    <div x-data="{ open: false }" @keydown.window.escape="open = false">
        <!-- Mobile menu container (Full screen) -->
        <div x-show="open" class="fixed inset-0 flex z-[100] lg:hidden" x-ref="dialog" aria-modal="true">
            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-25" @click="open = false"
                aria-hidden="true"></div>

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="ltr:-translate-x-full rtl:translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="ltr:-translate-x-full rtl:translate-x-full"
                class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
                <div class="px-4 pt-5 pb-2 flex items-center justify-between">
                    <img class="h-8 w-auto" src="<?php echo e(asset('storage/' . $siteSettings->logo_path)); ?>"
                        alt="<?php echo e($siteSettings->app_name); ?>">
                    <button type="button"
                        class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400"
                        @click="open = false">
                        <span class="sr-only"><?php echo e(__('Close menu')); ?></span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="border-t border-gray-100 py-6 px-4 space-y-6">
                    <a href="https://drive.google.com/drive/folders/1CDUP_q46M3yRUoVK_t3vB4V52UOxg33c?usp=sharing"
                        class="block font-medium text-oxford-blue"><?php echo e(__('Previous Year Papers')); ?></a>
                    <a href="<?php echo e(route('pricing')); ?>" class="block font-medium text-oxford-blue"><?php echo e(__('Mocks')); ?></a>
                    <a href="https://t.me/+vjPudizL2d42ZGRl"
                        class="block font-medium text-oxford-blue"><?php echo e(__('Join Community')); ?></a>
                </div>

                <div class="border-t border-gray-100 py-6 px-4">
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('login')); ?>"
                            class="flex items-center justify-center px-6 py-2 rounded-navbar text-sm font-medium text-aesthetic-grey bg-baltic-sea hover:bg-black transition-colors">
                            <?php echo e(__('Log in')); ?>

                        </a>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('home')); ?>"
                            class="flex items-center justify-center px-6 py-2 rounded-navbar text-sm font-medium text-aesthetic-grey bg-baltic-sea hover:bg-black transition-colors">
                            <?php echo e(__('Dashboard')); ?>

                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Floating Navbar -->
        <div class="fixed top-6 left-0 right-0 px-4 pointer-events-none" style="z-index: 100;">
            <header
                class="pointer-events-auto max-w-navbar mx-auto bg-white border border-gray-100 rounded-navbar shadow-sm overflow-hidden">
                <nav aria-label="Top" class="px-5">
                    <div class="h-12 flex items-center justify-between">
                        <!-- Logo -->
                        <div class="flex items-center shrink-0">
                            <a href="<?php echo e(route('welcome')); ?>">
                                <span class="sr-only"><?php echo e($siteSettings->app_name); ?></span>
                                <img class="h-9 w-auto" src="<?php echo e(asset('storage/' . $siteSettings->logo_path)); ?>"
                                    alt="<?php echo e($siteSettings->app_name); ?>">
                            </a>
                        </div>

                        <!-- Menus (Desktop & Tablet) -->
                        <div class="hidden md:flex items-center space-x-8">
                            <a href="https://drive.google.com/drive/folders/1CDUP_q46M3yRUoVK_t3vB4V52UOxg33c?usp=sharing"
                                class="text-[13px] font-medium text-oxford-blue hover:text-black transition-colors"><?php echo e(__('Previous Year Papers')); ?></a>
                            <a href="<?php echo e(route('pricing')); ?>"
                                class="text-[13px] font-medium text-oxford-blue hover:text-black transition-colors"><?php echo e(__('Mocks')); ?></a>
                            <a href="https://t.me/+vjPudizL2d42ZGRl"
                                class="text-[13px] font-medium text-oxford-blue hover:text-black transition-colors"><?php echo e(__('Join Community')); ?></a>
                        </div>

                        <!-- Auth Button (Desktop & Tablet) -->
                        <div class="flex items-center space-x-3">
                            <div class="hidden md:block">
                                <?php if(auth()->guard()->guest()): ?>
                                    <a href="<?php echo e(route('login')); ?>"
                                        class="flex items-center justify-center px-5 py-2 rounded-navbar text-[13px] font-semibold text-aesthetic-grey bg-baltic-sea hover:bg-black transition-colors">
                                        <?php echo e(__('Log in')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('home')); ?>"
                                        class="flex items-center justify-center px-5 py-2 rounded-navbar text-[13px] font-semibold text-aesthetic-grey bg-baltic-sea hover:bg-black transition-colors">
                                        <?php echo e(__('Dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>

                            <!-- Mobile Menu Button -->
                            <button type="button"
                                class="md:hidden p-2 rounded-md text-gray-500 hover:text-gray-600 transition-colors"
                                @click="open = true">
                                <span class="sr-only"><?php echo e(__('Open menu')); ?></span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\resources\views/components/navbar.blade.php ENDPATH**/ ?>