<style>
    /* Footer Section Styles - Pure CSS (No Tailwind) */
    .r2s-footer {
        position: relative;
        padding: 100px 16px 40px;
        background: linear-gradient(to bottom, #1e1b4b 0%, #312e81 100%);
        overflow: hidden;
    }

    .r2s-footer-container {
        max-width: 900px;
        margin: 0 auto;
        position: relative;
        z-index: 10;
    }

    /* Tagline */
    .r2s-footer-tagline {
        text-align: center;
        margin-bottom: 48px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .r2s-footer-tagline.r2s-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .r2s-footer-tagline h2 {
        font-size: 1.75rem;
        font-weight: 500;
        color: #ffffff;
        margin: 0;
        line-height: 1.4;
        font-family: 'Georgia', 'Times New Roman', serif;
        font-style: italic;
    }

    /* Links Container */
    .r2s-footer-links {
        display: flex;
        justify-content: center;
        gap: 80px;
        margin-bottom: 48px;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease 0.2s, transform 0.8s ease 0.2s;
    }

    .r2s-footer-links.r2s-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .r2s-footer-column {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .r2s-footer-link {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        font-size: 0.875rem;
        transition: color 0.3s ease, transform 0.3s ease;
        text-align: center;
        position: relative;
    }

    .r2s-footer-link:hover {
        color: #ffffff;
        transform: translateX(5px);
    }

    .r2s-footer-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 50%;
        width: 0;
        height: 1px;
        background-color: #ffffff;
        transition: width 0.3s ease, left 0.3s ease;
    }

    .r2s-footer-link:hover::after {
        width: 100%;
        left: 0;
    }

    /* Copyright */
    .r2s-footer-copyright {
        text-align: center;
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.8rem;
        opacity: 0;
        transition: opacity 0.8s ease 0.4s;
    }

    .r2s-footer-copyright.r2s-visible {
        opacity: 1;
    }

    /* Cloud decorations */
    .r2s-footer-clouds {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 150px;
        pointer-events: none;
        z-index: 1;
    }

    .r2s-footer-cloud {
        position: absolute;
        bottom: -20px;
        opacity: 0;
        transition: opacity 1s ease, transform 1s ease;
    }

    .r2s-footer-cloud.r2s-visible {
        opacity: 1;
    }

    .r2s-footer-cloud img {
        filter: brightness(1.1);
    }

    .r2s-footer-cloud-left {
        left: -5%;
        transform: translateX(-50px);
    }

    .r2s-footer-cloud-left.r2s-visible {
        transform: translateX(0);
    }

    .r2s-footer-cloud-left img {
        width: 280px;
        height: auto;
        animation: r2s-cloud-float-left 6s ease-in-out infinite;
    }

    .r2s-footer-cloud-right {
        right: -5%;
        transform: translateX(50px);
    }

    .r2s-footer-cloud-right.r2s-visible {
        transform: translateX(0);
    }

    .r2s-footer-cloud-right img {
        width: 320px;
        height: auto;
        animation: r2s-cloud-float-right 7s ease-in-out infinite;
        animation-delay: 0.5s;
    }

    @keyframes  r2s-cloud-float-left {

        0%,
        100% {
            transform: translateX(0) translateY(0);
        }

        50% {
            transform: translateX(10px) translateY(-8px);
        }
    }

    @keyframes  r2s-cloud-float-right {

        0%,
        100% {
            transform: translateX(0) translateY(0);
        }

        50% {
            transform: translateX(-10px) translateY(-8px);
        }
    }

    /* Responsive */
    @media (min-width: 640px) {
        .r2s-footer-tagline h2 {
            font-size: 2.25rem;
        }

        .r2s-footer-links {
            gap: 120px;
        }
    }

    @media (min-width: 768px) {
        .r2s-footer {
            padding: 120px 32px 60px;
        }

        .r2s-footer-tagline h2 {
            font-size: 2.75rem;
        }

        .r2s-footer-cloud-left img {
            width: 350px;
        }

        .r2s-footer-cloud-right img {
            width: 400px;
        }
    }

    @media (max-width: 480px) {
        .r2s-footer-links {
            gap: 40px;
        }

        .r2s-footer-cloud-left img,
        .r2s-footer-cloud-right img {
            width: 180px;
        }
    }

    /* Reduce motion for accessibility */
    @media (prefers-reduced-motion: reduce) {

        .r2s-footer-tagline,
        .r2s-footer-links,
        .r2s-footer-copyright,
        .r2s-footer-cloud,
        .r2s-footer-cloud img {
            transition: none;
            animation: none;
            opacity: 1;
            transform: none;
        }
    }
</style>

<footer class="r2s-footer">
    <!-- Cloud decorations -->
    <div class="r2s-footer-clouds">
        <div class="r2s-footer-cloud r2s-footer-cloud-left" data-animate-footer>
            <img src="<?php echo e(asset('images/cloud.png')); ?>" alt="">
        </div>
        <div class="r2s-footer-cloud r2s-footer-cloud-right" data-animate-footer>
            <img src="<?php echo e(asset('images/cloud.png')); ?>" alt="">
        </div>
    </div>

    <div class="r2s-footer-container">
        <!-- Tagline -->
        <div class="r2s-footer-tagline" data-animate-footer>
            <h2>Built by students. Trusted by aspirants.</h2>
        </div>

        <!-- Links -->
        <div class="r2s-footer-links" data-animate-footer>
            <!-- Left Column -->
            <div class="r2s-footer-column">
                <a href="/privacy-policy" class="r2s-footer-link">Privacy</a>
                <a href="/terms-and-conditions" class="r2s-footer-link">Terms</a>
                <a href="/refund-policy" class="r2s-footer-link">Refund</a>
                <a href="/contact" class="r2s-footer-link">Contact</a>
            </div>

            <!-- Right Column -->
            <div class="r2s-footer-column">
                <a href="#" class="r2s-footer-link">Blog</a>
                <a href="https://linkedin.com/company/road2srcc" target="_blank" class="r2s-footer-link">Linkedin</a>
                <a href="https://twitter.com/road2srcc" target="_blank" class="r2s-footer-link">X (ex-Twitter)</a>
                <a href="https://instagram.com/road2srcc" target="_blank" class="r2s-footer-link">Instagram</a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="r2s-footer-copyright" data-animate-footer>
            <p>© <?php echo e(date('Y')); ?> Road2SRCC.</p>
        </div>
    </div>
</footer>

<script>
    // Intersection Observer for footer scroll-triggered animations
    document.addEventListener('DOMContentLoaded', function() {
        const footerElements = document.querySelectorAll('[data-animate-footer]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('r2s-visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -30px 0px'
        });

        footerElements.forEach(el => {
            observer.observe(el);
        });
    });
</script>
<?php /**PATH C:\xampp\htdocs\resources\views/components/footer.blade.php ENDPATH**/ ?>