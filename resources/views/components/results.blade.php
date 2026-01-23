<section class="py-16 px-4 bg-white">
    <div class="max-w-5xl mx-auto text-center">
        <!-- Section Title -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-3">
            Real Results from the R2S Community
        </h2>
        <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto mb-12">
            Built by students who cracked CUET. Trusted by aspirants targeting SRCC and top DU colleges.
        </p>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1: SRCC Selections - Blue gradient text -->
            <div class="bg-white rounded-2xl p-6 text-left border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-2 mb-3">
                    <img src="{{ asset('images/flash.png') }}" alt="" class="w-5 h-5 object-contain">
                    <h3 class="text-lg font-bold gradient-text-blue">7 SRCC selections</h3>
                </div>
                <p class="text-gray-500 text-sm">in 2025</p>
                <p class="text-gray-400 text-xs mt-1">(from R2S student community)</p>
            </div>

            <!-- Card 2: DU North Campus - Orange/Red gradient text -->
            <div class="bg-white rounded-2xl p-6 text-left border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-2 mb-3">
                    <img src="{{ asset('images/market.png') }}" alt="" class="w-5 h-5 object-contain">
                    <h3 class="text-lg font-bold gradient-text-orange">15+ Top DU North</h3>
                </div>
                <p class="font-semibold text-sm gradient-text-orange">Campus selections</p>
                <p class="text-gray-400 text-xs mt-2">(with Road2SRCC prep support)</p>
            </div>

            <!-- Card 3: Pilot Run Students - Purple gradient text -->
            <div class="bg-white rounded-2xl p-6 text-left border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-2 mb-3">
                    <img src="{{ asset('images/clock.png') }}" alt="" class="w-5 h-5 object-contain">
                    <h3 class="text-lg font-bold gradient-text-purple">120+ Students in Pilot</h3>
                </div>
                <p class="font-semibold text-sm gradient-text-purple">Run</p>
                <p class="text-gray-400 text-xs mt-2">joined before our full mock launch</p>
            </div>
        </div>
    </div>
</section>

@push('styles')
    <style>
        .gradient-text-blue {
            background: linear-gradient(to right, #3b82f6, #06b6d4, #22d3ee);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-orange {
            background: linear-gradient(to right, #ef4444, #f97316, #fbbf24);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-purple {
            background: linear-gradient(to right, #8b5cf6, #a855f7, #d946ef);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
@endpush
