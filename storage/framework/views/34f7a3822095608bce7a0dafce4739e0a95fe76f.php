<style>
    /* Features Section Styles - Pure CSS (No Tailwind) */
    .r2s-features {
        padding: 80px 16px;
        background: radial-gradient(ellipse at top left,
                rgba(248, 117, 170, 0.58) 0%,
                rgba(253, 237, 237, 0.30) 26%,
                rgba(237, 255, 240, 0.55) 34%,
                rgba(255, 255, 255, 0) 100%);
    }

    .r2s-features-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* Header */
    .r2s-features-header {
        text-align: center;
        margin-bottom: 64px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .r2s-features-header.r2s-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .r2s-features-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #111827;
        margin: 0 0 12px 0;
    }

    .r2s-features-subtitle {
        font-size: 0.875rem;
        color: #4b5563;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Feature Items */
    .r2s-feature-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 32px;
        margin-bottom: 80px;
    }

    .r2s-feature-item:last-child {
        margin-bottom: 0;
    }

    .r2s-feature-content {
        flex: 1;
        max-width: 400px;
        opacity: 0;
        transform: translateX(-40px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .r2s-feature-item.r2s-reverse .r2s-feature-content {
        transform: translateX(40px);
    }

    .r2s-feature-item.r2s-visible .r2s-feature-content {
        opacity: 1;
        transform: translateX(0);
    }

    .r2s-feature-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transform: translateX(40px) scale(0.95);
        transition: opacity 0.8s ease 0.2s, transform 0.8s ease 0.2s;
    }

    .r2s-feature-item.r2s-reverse .r2s-feature-image {
        transform: translateX(-40px) scale(0.95);
    }

    .r2s-feature-item.r2s-visible .r2s-feature-image {
        opacity: 1;
        transform: translateX(0) scale(1);
    }

    .r2s-feature-image img {
        max-width: 100%;
        height: auto;
        max-height: 280px;
        object-fit: contain;
        transition: transform 0.4s ease;
    }

    .r2s-feature-image img:hover {
        transform: scale(1.05) translateY(-5px);
    }

    /* Tag/Label */
    .r2s-feature-tag {
        display: inline-block;
        font-size: 11px;
        font-weight: 500;
        padding: 4px 10px;
        border-radius: 4px;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: transform 0.3s ease;
    }

    .r2s-feature-tag:hover {
        transform: scale(1.05);
    }

    .r2s-tag-orange {
        background-color: rgba(251, 146, 60, 0.15);
        color: #ea580c;
    }

    .r2s-tag-purple {
        background-color: rgba(168, 85, 247, 0.15);
        color: #9333ea;
    }

    .r2s-tag-blue {
        background-color: rgba(59, 130, 246, 0.15);
        color: #2563eb;
    }

    .r2s-tag-green {
        background-color: rgba(34, 197, 94, 0.15);
        color: #16a34a;
    }

    /* Feature Title */
    .r2s-feature-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #111827;
        margin: 0 0 12px 0;
        transition: color 0.3s ease;
    }

    /* Feature Description */
    .r2s-feature-desc {
        font-size: 0.875rem;
        color: #6b7280;
        line-height: 1.7;
        margin: 0;
    }

    /* Floating animation for images */
    @keyframes  r2s-float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .r2s-feature-item.r2s-visible .r2s-feature-image img {
        animation: r2s-float 4s ease-in-out infinite;
        animation-delay: 0.5s;
    }

    .r2s-feature-item:nth-child(2).r2s-visible .r2s-feature-image img {
        animation-delay: 0.7s;
    }

    .r2s-feature-item:nth-child(3).r2s-visible .r2s-feature-image img {
        animation-delay: 0.9s;
    }

    .r2s-feature-item:nth-child(4).r2s-visible .r2s-feature-image img {
        animation-delay: 1.1s;
    }

    /* Pause floating on hover for interaction */
    .r2s-feature-image img:hover {
        animation-play-state: paused;
        transform: scale(1.05) translateY(-5px);
    }

    /* Responsive - Desktop */
    @media (min-width: 768px) {
        .r2s-features {
            padding: 100px 32px;
        }

        .r2s-features-title {
            font-size: 2rem;
        }

        .r2s-features-subtitle {
            font-size: 1rem;
        }

        .r2s-feature-item {
            flex-direction: row;
            gap: 64px;
            margin-bottom: 100px;
        }

        .r2s-feature-item.r2s-reverse {
            flex-direction: row-reverse;
        }

        .r2s-feature-content {
            text-align: left;
        }

        .r2s-feature-title {
            font-size: 1.5rem;
        }
    }

    @media (min-width: 1024px) {
        .r2s-feature-item {
            gap: 80px;
        }

        .r2s-feature-image img {
            max-height: 320px;
        }
    }

    /* Reduce motion for accessibility */
    @media (prefers-reduced-motion: reduce) {

        .r2s-features-header,
        .r2s-feature-content,
        .r2s-feature-image,
        .r2s-feature-image img {
            transition: none;
            animation: none;
        }

        .r2s-features-header,
        .r2s-feature-item .r2s-feature-content,
        .r2s-feature-item .r2s-feature-image {
            opacity: 1;
            transform: none;
        }
    }
</style>

<section class="r2s-features">
    <div class="r2s-features-container">
        <!-- Section Header -->
        <div class="r2s-features-header" data-animate>
            <h2 class="r2s-features-title">Smarter Prep. Faster Progress. Better Results.</h2>
            <p class="r2s-features-subtitle">
                Mocks built by SRCC students, backed by clear analytics for smarter CUET preparation.
            </p>
        </div>

        <!-- Feature 1: Zero-Error Mocks (Image Right) -->
        <div class="r2s-feature-item" data-animate>
            <div class="r2s-feature-content">
                <span class="r2s-feature-tag r2s-tag-orange">Quality Control</span>
                <h3 class="r2s-feature-title">Zero-Error Mocks</h3>
                <p class="r2s-feature-desc">
                    Every question, option, and solution is triple-checked by SRCC students to eliminate mistakes before
                    it reaches you. You prepare with clean, reliable content engineered from accuracy, so your focus
                    stays on improvement, not errors.
                </p>
            </div>
            <div class="r2s-feature-image">
                <img src="<?php echo e(asset('images/zero-error.png')); ?>" alt="Zero-Error Mocks">
            </div>
        </div>

        <!-- Feature 2: Full Length Tests (Image Left) -->
        <div class="r2s-feature-item r2s-reverse" data-animate>
            <div class="r2s-feature-content">
                <span class="r2s-feature-tag r2s-tag-purple">Exam Simulation</span>
                <h3 class="r2s-feature-title">Full Length Tests</h3>
                <p class="r2s-feature-desc">
                    Get the real exam experience before the real exam arrives. Our full-length mocks replicate CUET's
                    exact pattern, difficulty, timing, and pressure, so nothing you meet on test day feels unfamiliar.
                    Each test comes with detailed solutions, time analysis, and a breakdown of where you gained or lost
                    marks. You don't just practice more — you practice smarter.
                </p>
            </div>
            <div class="r2s-feature-image">
                <img src="<?php echo e(asset('images/full-length.png')); ?>" alt="Full Length Tests">
            </div>
        </div>

        <!-- Feature 3: Instant Scorecards (Image Right) -->
        <div class="r2s-feature-item" data-animate>
            <div class="r2s-feature-content">
                <span class="r2s-feature-tag r2s-tag-blue">Smart Analytics</span>
                <h3 class="r2s-feature-title">Instant Scorecards</h3>
                <p class="r2s-feature-desc">
                    No waiting, no guesswork. The moment you submit, you receive an instantly generated scorecard with
                    percentiles, accuracy, speed metrics, section-wise insights, and improvement pointers. Every result
                    becomes a roadmap, guiding your future sessions with clarity and purpose.
                </p>
            </div>
            <div class="r2s-feature-image">
                <img src="<?php echo e(asset('images/scorecard.png')); ?>" alt="Instant Scorecards">
            </div>
        </div>

        <!-- Feature 4: Smooth, Modern Interface (Image Left) -->
        <div class="r2s-feature-item r2s-reverse" data-animate>
            <div class="r2s-feature-content">
                <span class="r2s-feature-tag r2s-tag-green">User Experience</span>
                <h3 class="r2s-feature-title">Smooth, Modern Interface</h3>
                <p class="r2s-feature-desc">
                    A clean, distraction-free testing environment crafted for clarity and speed. Responsive, intuitive,
                    and smooth, it lets you progress naturally and switch sections without friction. Built with a fresh,
                    modern design that mirrors actual exam consoles, it keeps your focus sharp and your flow
                    uninterrupted.
                </p>
            </div>
            <div class="r2s-feature-image">
                <img src="<?php echo e(asset('images/ux.png')); ?>" alt="Smooth, Modern Interface">
            </div>
        </div>
    </div>
</section>

<script>
    // Intersection Observer for scroll-triggered animations
    document.addEventListener('DOMContentLoaded', function() {
        const animatedElements = document.querySelectorAll('[data-animate]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('r2s-visible');
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(el => {
            observer.observe(el);
        });
    });
</script>
<?php /**PATH C:\xampp\htdocs\resources\views/components/features.blade.php ENDPATH**/ ?>