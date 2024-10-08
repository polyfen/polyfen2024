<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book a Discovery Call | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Book a Discovery Call with us">
    <meta property="og:url" content="https://polyfen.com/discovery-call">
    <meta name="keywords" content="">
    <meta name="description" property="og:description"
        content="Tell us about your project. Hear what we can do for you. No strings attached.">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/discovery-call.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="fb:app_id" content="1799272553516195">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Polyfen">
    <meta name="twitter:creator" content="@PolyfenGroup">
    <meta name="twitter:title" content="Book a Discovery Call with us">
    <meta name="twitter:description"
        content="Tell us about your project. Hear what we can do for you. No strings attached.">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/discovery-call.png">
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <script defer src="/app/js/accordion.js"></script>
    <script defer src="/app/js/horizontal-scroll.js"></script>
    <!-- PAGE-SPECIFIC SCRIPTS end -->

</head>

<body class="dark-mode polyfen-site landing-page discovery-call">
    <!-- ya hay un estilo del founder-social  que llama a este ID -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- INCLUDE HEADER.PHP start -->
    <?php include 'includes/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- Discovery Call - Landing page start -->
    <main class="discovery-main">
        <h1 class="title-2 align-center fade-in margin-bottom-6">Book a Discovery Call</h1>

        <section class="boris-container container fade-in gap-2">
            <div class="boris-portrait">
                <img id="boris-portrait" src="imgs/rod-portrait.webp" alt="" loading="lazy" class="portrait">
            </div>
            <div class="boris-bio">
                <h2 class="heading-3">Rodrigo Gatica</h2>
                <h3 class="caption uppercase" style="opacity: 0.8;">CEO &amp; Cofounder</h3>
                <p>
                    Tell us about your project.<br>
                    Learn what we can do for you.<br>
                    No strings attached.
                </p>
            </div>
        </section>

        <section aria-label="Calendly" id="calendly">
            <!-- INCLUDE CALENDLY.PHP start -->
            <?php include 'includes/calendly.php';?>
            <!-- INCLUDE CALENDLY.PHP end -->
        </section>

        <hr>

        <?php include 'includes/clients.php';?>

        <?php include 'includes/cta-section.php';?>

    </main>
    <!-- FORCE MAX-WIDTH 100% end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- POLYKIT Scripts -->
    <script defer src="https://polykit.xyz/app/js/polykit-v0-3.js"></script>


    <!-- slick for tech-stack -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="libs/slick/slick/slick.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.stack-carrousel').slick({
            mobileFirst: true,
            infinite: true,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 900,
                    settings: "unslick",
                }
            ]
        });
    });
    </script>
</body>

</html>