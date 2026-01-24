<style>
    /* Results Section Styles - Pure CSS (No Tailwind) */
    .r2s-results {
        padding: 64px 16px;
        background-color: #ffffff;
    }

    .r2s-results-container {
        max-width: 64rem;
        margin: 0 auto;
        text-align: center;
    }

    .r2s-results-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 12px;
    }

    .r2s-results-subtitle {
        color: #4b5563;
        font-size: 0.875rem;
        max-width: 42rem;
        margin: 0 auto 48px;
    }

    .r2s-results-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
    }

    .r2s-result-card {
        background-color: #ffffff;
        border-radius: 16px;
        padding: 24px;
        text-align: left;
        border: 1px solid #e5e7eb;
        transition: box-shadow 0.15s ease;
    }

    .r2s-result-card:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .r2s-result-header {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
    }

    .r2s-result-icon {
        width: 20px;
        height: 20px;
        object-fit: contain;
    }

    .r2s-result-card-title {
        font-size: 1.125rem;
        font-weight: 700;
        margin: 0;
    }

    /* Gradient text classes */
    .r2s-gradient-blue {
        background: linear-gradient(to right, #3b82f6, #06b6d4, #22d3ee);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .r2s-gradient-orange {
        background: linear-gradient(to right, #ef4444, #f97316, #fbbf24);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .r2s-gradient-purple {
        background: linear-gradient(to right, #8b5cf6, #a855f7, #d946ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .r2s-result-subtitle {
        font-size: 0.875rem;
        font-weight: 600;
        margin: 0;
    }

    .r2s-result-desc {
        color: #9ca3af;
        font-size: 0.75rem;
        margin-top: 8px;
    }

    .r2s-result-meta {
        color: #6b7280;
        font-size: 0.875rem;
        margin: 0;
    }

    /* Responsive */
    @media (min-width: 640px) {
        .r2s-results-title {
            font-size: 1.875rem;
        }

        .r2s-results-subtitle {
            font-size: 1rem;
        }
    }

    @media (min-width: 768px) {
        .r2s-results-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style>

<section class="r2s-results">
    <div class="r2s-results-container">
        <!-- Section Title -->
        <h2 class="r2s-results-title">
            Real Results from the R2S Community
        </h2>
        <p class="r2s-results-subtitle">
            Built by students who cracked CUET. Trusted by aspirants targeting SRCC and top DU colleges.
        </p>

        <!-- Stats Cards -->
        <div class="r2s-results-grid">
            <!-- Card 1: SRCC Selections -->
            <div class="r2s-result-card">
                <div class="r2s-result-header">
                    <img src="{{ asset('images/flash.png') }}" alt="" class="r2s-result-icon">
                    <h3 class="r2s-result-card-title r2s-gradient-blue">7 SRCC selections</h3>
                </div>
                <p class="r2s-result-meta">in 2025</p>
                <p class="r2s-result-desc">(from R2S student community)</p>
            </div>

            <!-- Card 2: DU North Campus -->
            <div class="r2s-result-card">
                <div class="r2s-result-header">
                    <img src="{{ asset('images/market.png') }}" alt="" class="r2s-result-icon">
                    <h3 class="r2s-result-card-title r2s-gradient-orange">15+ Top DU North</h3>
                </div>
                <p class="r2s-result-subtitle r2s-gradient-orange">Campus selections</p>
                <p class="r2s-result-desc">(with Road2SRCC prep support)</p>
            </div>

            <!-- Card 3: Pilot Run Students -->
            <div class="r2s-result-card">
                <div class="r2s-result-header">
                    <img src="{{ asset('images/clock.png') }}" alt="" class="r2s-result-icon">
                    <h3 class="r2s-result-card-title r2s-gradient-purple">120+ Students in Pilot</h3>
                </div>
                <p class="r2s-result-subtitle r2s-gradient-purple">Run</p>
                <p class="r2s-result-desc">joined before our full mock launch</p>
            </div>
        </div>
    </div>
</section>
