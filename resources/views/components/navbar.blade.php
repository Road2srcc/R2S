<style>
    /* Navbar Styles - Pure CSS (No Tailwind) */
    .r2s-navbar-wrapper {
        position: fixed;
        top: 24px;
        left: 0;
        right: 0;
        padding: 0 16px;
        pointer-events: none;
        z-index: 100;
    }

    .r2s-navbar {
        pointer-events: auto;
        max-width: 750px;
        margin: 0 auto;
        background-color: #ffffff;
        border: 1px solid #f3f4f6;
        border-radius: 19px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .r2s-navbar-inner {
        padding: 0 20px;
    }

    .r2s-navbar-content {
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .r2s-logo-container {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .r2s-logo {
        height: 36px;
        width: auto;
    }

    .r2s-nav-links {
        display: none;
        align-items: center;
        gap: 32px;
    }

    .r2s-nav-link {
        font-size: 13px;
        font-weight: 500;
        color: #2B3440;
        text-decoration: none;
        transition: color 0.15s ease;
    }

    .r2s-nav-link:hover {
        color: #000000;
    }

    .r2s-auth-container {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .r2s-auth-btn-wrapper {
        display: none;
    }

    .r2s-auth-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px 20px;
        border-radius: 19px;
        font-size: 13px;
        font-weight: 600;
        background-color: #3B3B3B;
        color: #F3F4F6;
        text-decoration: none;
        transition: background-color 0.15s ease;
    }

    .r2s-auth-btn:hover {
        background-color: #000000;
    }

    .r2s-mobile-btn {
        padding: 8px;
        border-radius: 6px;
        background: transparent;
        border: none;
        color: #6b7280;
        cursor: pointer;
        transition: color 0.15s ease;
    }

    .r2s-mobile-btn:hover {
        color: #4b5563;
    }

    .r2s-mobile-btn svg {
        width: 24px;
        height: 24px;
    }

    /* Mobile Menu Styles */
    .r2s-mobile-overlay {
        position: fixed;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.25);
        z-index: 100;
    }

    .r2s-mobile-menu {
        position: relative;
        max-width: 320px;
        width: 100%;
        background-color: #ffffff;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        padding-bottom: 48px;
        display: flex;
        flex-direction: column;
        overflow-y: auto;
        height: 100vh;
    }

    .r2s-mobile-header {
        padding: 20px 16px 8px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .r2s-mobile-logo {
        height: 32px;
        width: auto;
    }

    .r2s-close-btn {
        margin: -8px;
        padding: 8px;
        border-radius: 6px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #9ca3af;
        background: transparent;
        border: none;
        cursor: pointer;
    }

    .r2s-close-btn svg {
        width: 24px;
        height: 24px;
    }

    .r2s-mobile-links {
        border-top: 1px solid #f3f4f6;
        padding: 24px 16px;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .r2s-mobile-link {
        display: block;
        font-weight: 500;
        color: #2B3440;
        text-decoration: none;
    }

    .r2s-mobile-auth {
        border-top: 1px solid #f3f4f6;
        padding: 24px 16px;
    }

    .r2s-mobile-auth-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px 24px;
        border-radius: 19px;
        font-size: 14px;
        font-weight: 500;
        background-color: #3B3B3B;
        color: #F3F4F6;
        text-decoration: none;
        transition: background-color 0.15s ease;
    }

    .r2s-mobile-auth-btn:hover {
        background-color: #000000;
    }

    /* Responsive - Show desktop nav on md+ screens */
    @media (min-width: 768px) {
        .r2s-nav-links {
            display: flex;
        }

        .r2s-auth-btn-wrapper {
            display: block;
        }

        .r2s-mobile-btn {
            display: none;
        }
    }

    /* Hide mobile menu toggle on large screens */
    @media (min-width: 1024px) {
        .r2s-mobile-wrapper {
            display: none;
        }
    }

    /* Screen reader only */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }
</style>

<div class="relative">
    <div x-data="{ open: false }" @keydown.window.escape="open = false">
        <!-- Mobile menu container -->
        <div x-show="open" class="r2s-mobile-wrapper" style="position: fixed; inset: 0; display: flex; z-index: 100;"
            x-ref="dialog" aria-modal="true">
            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="r2s-mobile-overlay" @click="open = false" aria-hidden="true">
            </div>

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                class="r2s-mobile-menu">
                <div class="r2s-mobile-header">
                    <img class="r2s-mobile-logo" src="{{ asset('storage/' . $siteSettings->logo_path) }}"
                        alt="{{ $siteSettings->app_name }}">
                    <button type="button" class="r2s-close-btn" @click="open = false">
                        <span class="sr-only">{{ __('Close menu') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="r2s-mobile-links">
                    <a href="https://drive.google.com/drive/folders/1CDUP_q46M3yRUoVK_t3vB4V52UOxg33c?usp=sharing"
                        class="r2s-mobile-link">{{ __('Previous Year Papers') }}</a>
                    <a href="{{ route('pricing') }}" class="r2s-mobile-link">{{ __('Mocks') }}</a>
                    <a href="https://t.me/+vjPudizL2d42ZGRl" class="r2s-mobile-link">{{ __('Join Community') }}</a>
                </div>

                <div class="r2s-mobile-auth">
                    @guest
                        <a href="{{ route('login') }}" class="r2s-mobile-auth-btn">
                            {{ __('Log in') }}
                        </a>
                    @endguest
                    @auth
                        <a href="{{ route('home') }}" class="r2s-mobile-auth-btn">
                            {{ __('Dashboard') }}
                        </a>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Floating Navbar - Pure CSS -->
        <div class="r2s-navbar-wrapper">
            <header class="r2s-navbar">
                <nav aria-label="Top" class="r2s-navbar-inner">
                    <div class="r2s-navbar-content">
                        <!-- Logo -->
                        <div class="r2s-logo-container">
                            <a href="{{ route('welcome') }}">
                                <span class="sr-only">{{ $siteSettings->app_name }}</span>
                                <img class="r2s-logo" src="{{ asset('storage/' . $siteSettings->logo_path) }}"
                                    alt="{{ $siteSettings->app_name }}">
                            </a>
                        </div>

                        <!-- Menus (Desktop & Tablet) -->
                        <div class="r2s-nav-links">
                            <a href="https://drive.google.com/drive/folders/1CDUP_q46M3yRUoVK_t3vB4V52UOxg33c?usp=sharing"
                                class="r2s-nav-link">{{ __('Previous Year Papers') }}</a>
                            <a href="{{ route('pricing') }}" class="r2s-nav-link">{{ __('Mocks') }}</a>
                            <a href="https://t.me/+vjPudizL2d42ZGRl"
                                class="r2s-nav-link">{{ __('Join Community') }}</a>
                        </div>

                        <!-- Auth Button (Desktop & Tablet) -->
                        <div class="r2s-auth-container">
                            <div class="r2s-auth-btn-wrapper">
                                @guest
                                    <a href="{{ route('login') }}" class="r2s-auth-btn">
                                        {{ __('Log in') }}
                                    </a>
                                @endguest
                                @auth
                                    <a href="{{ route('home') }}" class="r2s-auth-btn">
                                        {{ __('Dashboard') }}
                                    </a>
                                @endauth
                            </div>

                            <!-- Mobile Menu Button -->
                            <button type="button" class="r2s-mobile-btn" @click="open = true">
                                <span class="sr-only">{{ __('Open menu') }}</span>
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
