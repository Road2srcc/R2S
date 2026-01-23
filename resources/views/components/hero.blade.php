<section class="relative h-screen overflow-hidden hero-linear-bg flex flex-col" style="z-index: 1;">
    <!-- Content Container - leaves space for navbar at top -->
    <div class="flex-1 flex flex-col justify-center items-center px-4 pt-24 pb-4">
        <!-- Title with fade-in animation -->
        <h1
            class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight text-center hero-title animate-fade-in">
            Ace CUET Commerce with<br>Zero-Error Mocks
        </h1>

        <!-- Subtitle with fade-in animation (delayed) -->
        <p class="text-sm sm:text-base font-normal leading-relaxed mt-4 max-w-xl mx-auto text-center animate-fade-in-delay"
            style="color: rgba(255,255,255,0.65);">
            Mock tests for CUET Commerce designed by SRCC students, built on PYQ analysis, with advanced performance
            analytics.
        </p>

        <!-- CTA Button with fade-in animation (more delayed) -->
        <div class="mt-6 animate-fade-in-delay-2">
            @guest
                <a href="{{ route('login') }}"
                    class="inline-flex items-center justify-center px-6 py-2.5 bg-white text-gray-900 rounded-full text-sm font-medium border border-gray-200 hover:shadow-md transition-all">
                    Start a Free Mock
                </a>
            @endguest
            @auth
                <a href="{{ route('quiz_dashboard') }}"
                    class="inline-flex items-center justify-center px-6 py-2.5 bg-white text-gray-900 rounded-full text-sm font-medium border border-gray-200 hover:shadow-md transition-all">
                    Start a Free Mock
                </a>
            @endauth
        </div>

        <!-- School Image with Clouds -->
        <div class="relative mt-8 w-full max-w-4xl mx-auto">
            <!-- Cloud - Left (slides from left) -->
            <div class="absolute -left-40 hidden lg:block animate-slide-from-left"
                style="z-index: 30;  left : -20rem; top : 49.333333%;">
                <img src="{{ asset('images/cloud.png') }}" alt="" class="w-80 h-auto" style="width: 24rem;">
            </div>

            <!-- Cloud - Top Left (slides from left) -->
            <div class="absolute hidden md:block animate-slide-from-left-delay"
                style="z-index: 30; left : -15rem; top : -2.5rem">
                <img src="{{ asset('images/cloud-2.png') }}" alt="" class=" h-auto" style="width: 20rem;">
            </div>

            <!-- School Image (slides up from bottom) -->
            <div class="relative z-10 w-full rounded-[24px] overflow-hidden shadow-2xl animate-slide-up">
                <img src="{{ asset('images/school.png') }}" alt="SRCC College" class="w-full h-auto">
            </div>

            <!-- Cloud - Right (slides from right) -->
            <div class="absolute -right-24 top-1/5 hidden md:block animate-slide-from-right-delay"
                style="z-index: 30; top : -2.5rem">
                <img src="{{ asset('images/cloud-2.png') }}" alt="" class="w-72 h-auto" style="width: 20rem;">
            </div>

            <!-- Cloud - Far Right (slides from right) -->
            <div class="absolute hidden lg:block animate-slide-from-right"
                style="z-index: 30; top : 49.333333%; right : -20rem;">
                <img src="{{ asset('images/cloud.png') }}" alt="" class="w-96 h-auto" style="width: 24rem;">
            </div>
        </div>
    </div>
</section>

@push('styles')
    <style>
        .hero-linear-bg {
            background: linear-gradient(to bottom, #0a1128 0%, #1e3a8a 30%, #3b82f6 50%, #7dd3fc 75%, #ffffff 100%);
        }

        .hero-title {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            letter-spacing: -0.03em;
        }

        /* Fade In Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .animate-fade-in-delay {
            opacity: 0;
            animation: fadeIn 0.8s ease-out 0.2s forwards;
        }

        .animate-fade-in-delay-2 {
            opacity: 0;
            animation: fadeIn 0.8s ease-out 0.4s forwards;
        }

        /* Slide Up Animation (School Image) */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-up {
            animation: slideUp 0.9s ease-out 0.3s forwards;
            opacity: 0;
        }

        /* Slide From Left Animation (Clouds) */
        @keyframes slideFromLeft {
            from {
                opacity: 0;
                transform: translateX(-60px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-slide-from-left {
            animation: slideFromLeft 1s ease-out 0.5s forwards;
            opacity: 0;
        }

        .animate-slide-from-left-delay {
            animation: slideFromLeft 1s ease-out 0.7s forwards;
            opacity: 0;
        }

        /* Slide From Right Animation (Clouds) */
        @keyframes slideFromRight {
            from {
                opacity: 0;
                transform: translateX(60px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-slide-from-right {
            animation: slideFromRight 1s ease-out 0.5s forwards;
            opacity: 0;
        }

        .animate-slide-from-right-delay {
            animation: slideFromRight 1s ease-out 0.7s forwards;
            opacity: 0;
        }
    </style>
@endpush
