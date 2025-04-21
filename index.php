<!DOCTYPE html>
<html lang="en" class="homepage">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2" />
    <meta name="description" content="OHANA" />
    <title>Home | OHANA</title>
    <link rel="icon" type="image/ico" href="/assets/favicon.ico" />
    <meta name="format-detection" content="telephone=no" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css" />
    <!-- home CSS -->
    <link rel="stylesheet" href="/assets/css/home.min.css?<?= rand(1, 9) ?>" />
    <style>
        .loader-first {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            z-index: 9999;
            background: #000000;
        }

        .loader-first video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 16/9;
        }

        .alert-warnning {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999999;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            font-size: 20px;
            text-transform: uppercase;
            text-align: center;
            line-height: 1.5em;
            font-weight: 700;
            color: #fff;
            background: #000;
            overflow: hidden;
        }

        .alert-warnning p {
            position: absolute;
            left: 50%;
            top: 50%;
            font-size: 18px;
            transform: translate(-50%, -50%);
            color: #fff;
        }
    </style>
</head>

<body class="home">
    <!-- Loader -->
    <?php include 'includes/loader.php'; ?>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <main>
        <!-- Hero Banner -->
        <?php include 'includes/home/hero-banner.php'; ?>
        <!-- Featured Carousel -->
        <?php include 'includes/home/featured-carousel.php'; ?>
        <!-- About -->
        <?php include 'includes/home/about.php'; ?>
        <!-- Our Core Values -->
        <?php include 'includes/home/our-core-values.php'; ?>
        <!-- News And Media -->
        <?php include 'includes/home/news-media.php'; ?>
        <!-- Get In Touch -->
        <?php include 'includes/home/get-in-touch.php'; ?>
    </main>
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- jquery Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Form Files -->
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/additional-methods.min.js"></script>
    <script src="/assets/js/form-validation.js"></script>

    <!-- Sticky Button -->
    <?php include 'includes/sticky-buttons.php'; ?>

    <!-- home JS Files -->
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Intel Input -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
    <script src="/assets/js/home.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Le_BB0rAAAAAKeyCk05j5e0CIZKF_6lrfr1LMuZ"></script>
    <script>
        function refreshCaptcha() {
            grecaptcha.ready(function() {
                grecaptcha.execute('6Le_BB0rAAAAAKeyCk05j5e0CIZKF_6lrfr1LMuZ', {
                    action: 'contact'
                }).then(function(token) {
                    if (document.getElementById('captcha-response-letsDiscuss-newsletter')) {
                        document.getElementById('captcha-response-letsDiscuss-newsletter').value = token;
                    }
                });
            });
        }
        refreshCaptcha();
    </script>
</body>

</html>
</body>

</html>