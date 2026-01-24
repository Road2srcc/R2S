<style>
    /* Hero Section Styles - Pure CSS (No Tailwind) */
    .r2s-hero {
        position: relative;
        height: 100vh;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        background: linear-gradient(to bottom, #0a1128 0%, #1e3a8a 30%, #3b82f6 50%, #7dd3fc 75%, #ffffff 100%);
        z-index: 1;
    }

    .r2s-hero-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 96px 16px 16px;
    }

    .r2s-hero-title {
        font-size: 1.875rem;
        font-weight: 900;
        color: #ffffff;
        letter-spacing: -0.025em;
        text-align: center;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        letter-spacing: -0.03em;
        margin: 0;
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .r2s-hero-subtitle {
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.625;
        margin-top: 16px;
        max-width: 36rem;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        color: rgba(255, 255, 255, 0.65);
        opacity: 0;
        animation: fadeInUp 0.8s ease-out 0.2s forwards;
    }

    .r2s-hero-cta-wrapper {
        margin-top: 24px;
        opacity: 0;
        animation: fadeInUp 0.8s ease-out 0.4s forwards;
    }

    .r2s-hero-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 24px;
        background-color: #ffffff;
        color: #111827;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 500;
        border: 1px solid #e5e7eb;
        text-decoration: none;
        transition: box-shadow 0.15s ease;
    }

    .r2s-hero-cta:hover {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .r2s-hero-image-container {
        position: relative;
        margin-top: 32px;
        width: 100%;
        max-width: 56rem;
        margin-left: auto;
        margin-right: auto;
    }

    .r2s-school-image-wrapper {
        position: relative;
        z-index: 10;
        width: 100%;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        opacity: 0;
        animation: slideUp 0.9s ease-out 0.3s forwards;
    }

    .r2s-school-image {
        width: 100%;
        height: auto;
    }

    /* Cloud styles */
    .r2s-cloud {
        position: absolute;
        z-index: 30;
        opacity: 0;
    }

    .r2s-cloud img {
        height: auto;
    }

    .r2s-cloud-left {
        display: none;
        left: -20rem;
        top: 49.333333%;
        animation: slideFromLeft 1s ease-out 0.5s forwards;
    }

    .r2s-cloud-left img {
        width: 24rem;
    }

    .r2s-cloud-top-left {
        display: none;
        left: -15rem;
        top: -2.5rem;
        animation: slideFromLeft 1s ease-out 0.7s forwards;
    }

    .r2s-cloud-top-left img {
        width: 20rem;
    }

    .r2s-cloud-right {
        display: none;
        right: -6rem;
        top: -2.5rem;
        animation: slideFromRight 1s ease-out 0.7s forwards;
    }

    .r2s-cloud-right img {
        width: 20rem;
    }

    .r2s-cloud-far-right {
        display: none;
        right: -20rem;
        top: 49.333333%;
        animation: slideFromRight 1s ease-out 0.5s forwards;
    }

    .r2s-cloud-far-right img {
        width: 24rem;
    }

    /* Responsive */
    @media (min-width: 640px) {
        .r2s-hero-title {
            font-size: 2.25rem;
        }

        .r2s-hero-subtitle {
            font-size: 1rem;
        }
    }

    @media (min-width: 768px) {

        .r2s-cloud-top-left,
        .r2s-cloud-right {
            display: block;
        }
    }

    @media (min-width: 1024px) {
        .r2s-hero-title {
            font-size: 3rem;
        }

        .r2s-cloud-left,
        .r2s-cloud-far-right {
            display: block;
        }
    }

    /* Animations */
    @keyframes  fadeInUp {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes  slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes  slideFromLeft {
        from {
            opacity: 0;
            transform: translateX(-60px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes  slideFromRight {
        from {
            opacity: 0;
            transform: translateX(60px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<section class="r2s-hero">
    <!-- Content Container -->
    <div class="r2s-hero-content">
        <!-- Title -->
        <h1 class="r2s-hero-title">
            Ace CUET Commerce with<br>Zero-Error Mocks
        </h1>

        <!-- Subtitle -->
        <p class="r2s-hero-subtitle">
            Mock tests for CUET Commerce designed by SRCC students, built on PYQ analysis, with advanced performance
            analytics.
        </p>

        <!-- CTA Button -->
        <div class="r2s-hero-cta-wrapper">
            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>" class="r2s-hero-cta">
                    Start a Free Mock
                </a>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('quiz_dashboard')); ?>" class="r2s-hero-cta">
                    Start a Free Mock
                </a>
            <?php endif; ?>
        </div>

        <!-- School Image with Clouds -->
        <div class="r2s-hero-image-container">
            <!-- Cloud - Left -->
            <div class="r2s-cloud r2s-cloud-left">
                <img src="<?php echo e(asset('images/cloud.png')); ?>" alt="">
            </div>

            <!-- Cloud - Top Left -->
            <div class="r2s-cloud r2s-cloud-top-left">
                <img src="<?php echo e(asset('images/cloud-2.png')); ?>" alt="">
            </div>

            <!-- School Image -->
            <div class="r2s-school-image-wrapper">
                <img src="<?php echo e(asset('images/school.png')); ?>" alt="SRCC College" class="r2s-school-image">
            </div>

            <!-- Cloud - Right -->
            <div class="r2s-cloud r2s-cloud-right">
                <img src="<?php echo e(asset('images/cloud-2.png')); ?>" alt="">
            </div>

            <!-- Cloud - Far Right -->
            <div class="r2s-cloud r2s-cloud-far-right">
                <img src="<?php echo e(asset('images/cloud.png')); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\resources\views/components/hero.blade.php ENDPATH**/ ?>