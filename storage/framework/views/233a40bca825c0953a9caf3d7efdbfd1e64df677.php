<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to <?php echo e(config('app.name')); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fa;
            line-height: 1.6;
        }

        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .email-container {
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
            padding: 40px 30px;
            text-align: center;
        }

        .email-header h1 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }

        .email-header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            margin-top: 8px;
        }

        .email-body {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 22px;
            color: #1f2937;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .message {
            color: #4b5563;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .feature-list {
            background-color: #f9fafb;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .feature-list h3 {
            color: #1f2937;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: #4b5563;
        }

        .feature-icon {
            width: 24px;
            height: 24px;
            background-color: #f97316;
            border-radius: 50%;
            margin-right: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 12px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
            color: #ffffff !important;
            text-decoration: none;
            padding: 15px 40px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            margin: 20px 0;
        }

        .cta-button:hover {
            background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
        }

        .email-footer {
            background-color: #f9fafb;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }

        .footer-text {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .social-links {
            margin-top: 15px;
        }

        .social-links a {
            color: #f97316;
            text-decoration: none;
            margin: 0 10px;
            font-size: 14px;
        }

        .divider {
            height: 1px;
            background-color: #e5e7eb;
            margin: 25px 0;
        }
    </style>
</head>

<body>
    <div class="email-wrapper">
        <div class="email-container">
            <!-- Header -->
            <div class="email-header">
                <h1>🎉 Welcome to <?php echo e(config('app.name')); ?>!</h1>
                <p>Your journey to success starts here</p>
            </div>

            <!-- Body -->
            <div class="email-body">
                <p class="greeting">Hi <?php echo e($user->first_name); ?>,</p>

                <p class="message">
                    Thank you for joining <strong><?php echo e(config('app.name')); ?></strong>! We're thrilled to have you as part
                    of our learning community. Your account has been successfully created and you're all set to begin
                    your preparation journey.
                </p>

                <div class="feature-list">
                    <h3>What you can do now:</h3>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Access practice mock tests</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Track your progress and performance</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Get detailed analytics on your results</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Compete with other aspirants</span>
                    </div>
                </div>

                <p class="message"
                    style="background-color: #fff7ed; padding: 15px; border-radius: 8px; border: 1px solid #ffedd5; font-size: 15px; color: #9a3412;">
                    <strong>Verification Required:</strong> Please click the button below to verify your email address
                    and activate your account.
                </p>

                <div style="text-align: center;">
                    <a href="<?php echo e($verificationUrl); ?>" class="cta-button">
                        Verify Email Address →
                    </a>
                </div>

                <div class="divider"></div>

                <p class="message">
                    If you have any questions or need assistance, feel free to reach out to our support team. We're here
                    to help you succeed!
                </p>
            </div>

            <!-- Footer -->
            <div class="email-footer">
                <p class="footer-text">
                    You're receiving this email because you signed up at <?php echo e(config('app.name')); ?>.
                </p>
                <p class="footer-text">
                    © <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. All rights reserved.
                </p>
                <div class="social-links">
                    <a href="#">Contact Us</a> |
                    <a href="<?php echo e(config('app.url')); ?>">Visit Website</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\resources\views/emails/welcome.blade.php ENDPATH**/ ?>