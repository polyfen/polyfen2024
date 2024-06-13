<!DOCTYPE html>
<html lang="en">
<head>
    <title>Polyfen | Creative & Software Boutique</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="https://polyfen.com">
    <meta property="og:title" content="Polyfen | Creative & Software Boutique">
    <meta name="twitter:title" content="Polyfen | Creative Software Boutique">
    <meta name="description" property="og:description" content="Creative & software boutique empowering US businesses with design, marketing, and engineering since 2018.">
    <meta name="twitter:description" content="Creative & software boutique empowering US businesses with design, marketing, and engineering since 2018.">
    <meta name="keywords" content="Brand, Brand Identity Design, Branding, Agency, Graphic Design, Logo, Creative, Strategy, Consultancy, Business Growth">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/polyfen-meta.png">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/polyfen-meta.png">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <script defer src="/app/js/accordion.js"></script>
    <script defer src="/app/js/plan-cards-toggle.js"></script>
    <script defer src="/app/js/horizontal-scroll.js"></script>
    <!-- PAGE-SPECIFIC SCRIPTS end -->

</head>

<body class="home dark-mode">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- INCLUDE HELLO-BAR.PHP start -->
    <?php include 'includes/hello-bar.php';?>
    <!-- INCLUDE HELLO-BAR.PHP end -->

    <div id="home-border-top"></div>
    
    <!-- INCLUDE HEADER.PHP start -->
    <?php include 'includes/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- Home page start -->
    <main class="home-main fade-in-header">
        <section class="home-cover">
            <h1 class="title-1">Unleash your<br>business full potential</h1>
            <p>Creative & software boutique empowering US businesses with design, marketing, and engineering services since 2018.</p>
            <a class="button large-button animated-button" href="/discovery-call">Book a Call</a>
            <a class="button secondary-button" href="#services" style="font-weight: 400;">Learn More</a>

            <div class="background">
                <div id="pearl-11" class="pearl rotate-slower fade-in-header">
                </div>
                <div id="pearl-12" class="pearl rotate fade-in-header">
                </div>
                <div id="pearl-13" class="pearl rotate fade-in-header">
                </div>
            </div>
        </section>
        
        <?php include 'includes/accolades.php';?>
        <hr>

        <section id="services">
            <section class="container-1080 fade-in subscribe-section">
                <h2 class="heading-1">Subscribe</h2>
                <!-- INCLUDE SUBSCRIPTION-PLANS.PHP start -->
                <?php include 'includes/subscription-plans.php';?>
                <!-- INCLUDE SUBSCRIPTION-PLANS.PHP end -->
            </section>
            <section class="build container-1080 fade-in">
                <h2 class="heading-1">Build</h2>
                <div class="cards-container">
                    <section class="services-card fade-in">
                        <h3 class="heading-2">Brand</h3>
                        <img src="imgs/illustrations/dudes-basketball.webp" height="140" alt="">
                        <h4 class="caption">Starting at</h4>
                        <h4 class="heading-3">$7,600</h4>
                        <h4 class="caption">2-3 weeks</h4>
                    </section>

                    <section class="services-card fade-in">
                        <h3 class="heading-2">Website</h3>
                        <img src="imgs/illustrations/dudes-laptop.webp" height="140" alt="">
                        <h4 class="caption">Starting at</h4>
                        <h4 class="heading-3">$7,800</h4>
                        <h4 class="caption">3-6 weeks</h4>
                    </section>

                    <section class="services-card fade-in">
                        <h3 class="heading-2">App</h3>
                        <img src="imgs/illustrations/dudes-smartphone.webp" height="140" alt="">
                        <h4 class="caption">Starting at</h4>
                        <h4 class="heading-3">$39,000</h4>
                        <h4 class="caption">2-6 months</h4>
                    </section>
                </div>
            </section>
        </section>

        <hr>

        <section class="container-1080 row subscription-value-props">
            <div class="col fade-in">
                <div class="value-img"><img src="/imgs/icons/hand-coins.svg"></div>
                <h2>Low Cost,<br>High Value</h2>
                <p>Our remote business model passes the savings onto you.</p>
            </div>
            <div class="col fade-in">
                <div class="value-img"><img src="/imgs/icons/shield-chevron.svg"></div>
                <h2>Wealth of<br>Experience</h2>
                <p>Our partners accumulate 50+ years of indsutry experience.</p>
            </div>
            <div class="col fade-in">
                <div class="value-img"><img src="/imgs/icons/crown-simple.svg"></div>
                <h2>End-to-End<br>Customer Service</h2>
                <p>Our growing list of clients is testimony that we go above and beyond.</p>
            </div>
        </section>

        <hr>
        <?php include 'includes/portfolio-thumbnails.php';?>
    </main>
    <!-- INCLUDE CALL-TO-ACTION.PHP start -->
    <?php include 'includes/call-to-action.php';?>
    <!-- INCLUDE CALL-TO-ACTION.PHP end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

</body>

</html>