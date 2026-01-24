<style>
    /* Partner Section Styles - Pure CSS (No Tailwind) */
    .r2s-partner {
        padding: 80px 16px 120px;
        background-color: #f9fafb;
    }

    .r2s-partner-container {
        max-width: 900px;
        margin: 0 auto;
    }

    /* Header */
    .r2s-partner-header {
        text-align: center;
        margin-bottom: 48px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .r2s-partner-header.r2s-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .r2s-partner-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
        line-height: 1.3;
    }

    .r2s-partner-title-accent {
        display: block;
        color: #6b7280;
        font-weight: 500;
    }

    /* Card Stack Container */
    .r2s-card-stack {
        display: flex;
        justify-content: center;
        perspective: 1000px;
        position: relative;
        padding: 40px 0;
    }

    .r2s-card-stack-inner {
        position: relative;
        width: 100%;
        max-width: 560px;
    }

    /* Stacked background cards */
    .r2s-stack-card {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100%;
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.4s ease;
    }

    /* Card 1 - Bottom (furthest back) */
    .r2s-stack-card-1 {
        background-color: #e5e7eb;
        transform: rotate(6deg) translateY(20px) scale(0.92);
        z-index: 1;
    }

    /* Card 2 - Middle */
    .r2s-stack-card-2 {
        background-color: #f3f4f6;
        transform: rotate(3deg) translateY(10px) scale(0.96);
        z-index: 2;
    }

    /* Card 3 - Second from top */
    .r2s-stack-card-3 {
        background-color: #f9fafb;
        transform: rotate(-1deg) translateY(5px) scale(0.98);
        z-index: 3;
    }

    /* Hover effects on stack */
    .r2s-card-stack:hover .r2s-stack-card-1 {
        transform: rotate(12deg) translateY(30px) translateX(-30px) scale(0.88);
    }

    .r2s-card-stack:hover .r2s-stack-card-2 {
        transform: rotate(6deg) translateY(20px) translateX(-15px) scale(0.92);
    }

    .r2s-card-stack:hover .r2s-stack-card-3 {
        transform: rotate(-3deg) translateY(10px) translateX(10px) scale(0.96);
    }

    /* Main content card (top) */
    .r2s-partner-card {
        position: relative;
        background-color: #ffffff;
        border-radius: 16px;
        padding: 40px 32px;
        box-shadow:
            0 4px 6px -1px rgba(0, 0, 0, 0.05),
            0 10px 15px -3px rgba(0, 0, 0, 0.08),
            0 20px 25px -5px rgba(0, 0, 0, 0.05);
        z-index: 10;
        transform: rotate(-2deg);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s ease;
        opacity: 0;
        animation: r2s-card-appear 0.8s ease 0.3s forwards;
    }

    @keyframes r2s-card-appear {
        from {
            opacity: 0;
            transform: rotate(-2deg) translateY(30px);
        }

        to {
            opacity: 1;
            transform: rotate(-2deg) translateY(0);
        }
    }

    .r2s-card-stack:hover .r2s-partner-card {
        transform: rotate(0deg) translateY(-8px);
        box-shadow:
            0 15px 30px -5px rgba(0, 0, 0, 0.1),
            0 25px 40px -10px rgba(0, 0, 0, 0.08);
    }

    /* Card Content */
    .r2s-partner-text {
        font-size: 0.9rem;
        color: #4b5563;
        line-height: 1.8;
        margin: 0 0 24px 0;
    }

    .r2s-partner-text p {
        margin: 0 0 16px 0;
    }

    .r2s-partner-text p:last-child {
        margin-bottom: 0;
    }

    /* CTA Button */
    .r2s-partner-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background-color: #1f2937;
        color: #ffffff;
        font-size: 0.875rem;
        font-weight: 500;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .r2s-partner-cta:hover {
        background-color: #111827;
        transform: translateX(4px);
        box-shadow: 0 4px 12px rgba(31, 41, 55, 0.3);
    }

    .r2s-partner-cta svg {
        width: 16px;
        height: 16px;
        transition: transform 0.3s ease;
    }

    .r2s-partner-cta:hover svg {
        transform: translateX(4px);
    }

    /* Responsive */
    @media (min-width: 640px) {
        .r2s-partner-title {
            font-size: 2.25rem;
        }

        .r2s-partner-card {
            padding: 48px 40px;
        }

        .r2s-partner-text {
            font-size: 0.95rem;
        }
    }

    @media (min-width: 768px) {
        .r2s-partner {
            padding: 100px 32px 140px;
        }

        .r2s-partner-title {
            font-size: 2.5rem;
        }

        .r2s-card-stack:hover .r2s-stack-card-1 {
            transform: rotate(15deg) translateY(40px) translateX(-50px) scale(0.85);
        }

        .r2s-card-stack:hover .r2s-stack-card-2 {
            transform: rotate(8deg) translateY(25px) translateX(-25px) scale(0.90);
        }

        .r2s-card-stack:hover .r2s-stack-card-3 {
            transform: rotate(-4deg) translateY(12px) translateX(20px) scale(0.94);
        }
    }

    /* Reduce motion for accessibility */
    @media (prefers-reduced-motion: reduce) {

        .r2s-partner-header,
        .r2s-partner-card,
        .r2s-stack-card {
            transition: none;
            animation: none;
        }

        .r2s-partner-card {
            opacity: 1;
            transform: rotate(-2deg);
        }
    }
</style>

<section class="r2s-partner">
    <div class="r2s-partner-container">
        <!-- Section Header -->
        <div class="r2s-partner-header" data-animate>
            <h2 class="r2s-partner-title">
                Not just a tool.
                <span class="r2s-partner-title-accent">A partner in your success.</span>
            </h2>
        </div>

        <!-- Card Stack -->
        <div class="r2s-card-stack">
            <div class="r2s-card-stack-inner">
                <!-- Background stacked cards -->
                <div class="r2s-stack-card r2s-stack-card-1"></div>
                <div class="r2s-stack-card r2s-stack-card-2"></div>
                <div class="r2s-stack-card r2s-stack-card-3"></div>

                <!-- Main content card (top) -->
                <div class="r2s-partner-card">
                    <div class="r2s-partner-text">
                        <p>
                            Road2SRCC was built to make SRCC preparation clearer, smarter, and more focused. Every mock,
                            insight, and feature is designed by SRCC students who've walked the same path you're on.
                        </p>
                        <p>
                            We believe preparation isn't about chasing scores, but about understanding patterns, fixing
                            gaps, and improving with confidence. That's why we focus on clean, error-free content and
                            meaningful analytics that help you move forward with clarity.
                        </p>
                        <p>
                            You're not preparing alone. You're preparing with a community that knows the road and is
                            here to guide you every step of the way.
                        </p>
                    </div>
                    <a href="https://t.me/+vjPudizL2d42ZGRl" class="r2s-partner-cta">
                        Join the community
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Intersection Observer for scroll-triggered animations
    document.addEventListener('DOMContentLoaded', function() {
        const partnerElements = document.querySelectorAll('.r2s-partner [data-animate]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('r2s-visible');
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        partnerElements.forEach(el => {
            observer.observe(el);
        });
    });
</script>
