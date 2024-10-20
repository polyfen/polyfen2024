<!DOCTYPE html>
<!--

___     _       __          
| _ \___| |_  _ / _|___ _ _  
|  _/ _ \ | || |  _/ -_) ' \ 
|_| \___/_|\_, |_| \___|_||_|
           |__/              

-->
<html lang="en">
<head>
    <title>Polyfen | Software & Creative Studio</title>
    <!---------- HEAD.php start ---------->
    <?php include 'includes/head.php';?>
    <!---------- HEAD.php end ---------->
    <!---------- PAGE-SPECIFIC META start ---------->
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="https://polyfen.com">
    <meta property="og:title" content="Polyfen | Software & Creative Studio">
    <meta name="description" property="og:description" content="Software & creative studio empowering startups and scaleups with design and engineering solutions since 2018.">
    <meta name="keywords" content="Brand, Brand Identity Design, Branding, Agency, Graphic Design, Logo, Creative, Strategy, Consultancy, Business Growth">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/polyfen-meta.png">
    <!---------- PAGE-SPECIFIC META end ---------->
    <!---------- PAGE-SPECIFIC CSS start ---------->
    <!---------- PAGE-SPECIFIC CSS end ---------->
    <!---------- PAGE-SPECIFIC SCRIPTS start ---------->
    <script defer src="/app/js/horizontal-scroll.js"></script>
    <!---------- PAGE-SPECIFIC SCRIPTS end ---------->
</head>
<body class="body-home">
    <!---------- Google Tag Manager (noscript) ---------->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!---------- Google Tag Manager (noscript) end ---------->
    <!---------- HELLOBAR.php start ---------->
    <?php include 'includes/hellobar.php';?>
    <!---------- HELLOBAR.php end ---------->
    <!---------- HEADER.php start ---------->
    <?php include 'includes/header.php';?>
    <!---------- HEADER.php end ---------->
    <!---------- MAIN HOME start ---------->
    <main>
        <section class="section-cover-home">
            <h1 class="title-1 align-center">Unleash your<br>business full potential</h1>
            <p class="align-center">Software & creative studio empowering startups and scaleups with design and engineering solutions since 2018.</p>
            <a class="button large-button cta-button photo-button margin-bottom-05" href="/discovery-call">Book a Call</a>
            <a data-button-arrow-down class="button large-button secondary-button" href="#services">Learn More</a>
            <div class="cover-home-background">
                <div id="pearl-1" class="pearl rotate-slower fade-in">
                </div>
                <div id="pearl-2" class="pearl rotate fade-in">
                </div>
                <div id="pearl-3" class="pearl rotate fade-in">
                </div>
            </div>
        </section>   
        <?php include 'includes/clients-logo-carousel.php';?>
        <hr>
        <section class="container-1080 margin-bottom-6 fade-in">
            <h2 class="heading-1">Subscribe</h2>
            <!-- SUBSCRIPTION-PLANS.php start -->
            <?php include 'includes/subscription-plans.php';?>
            <!-- SUBSCRIPTION-PLANS.php end -->
        </section>
        <hr>
        <section class="build container-1080 fade-in">
            <h2 class="heading-1">Build</h2>
            <div class="row">
                <div class="col card align-center fade-in">
                    <h3 class="heading-2 align-center">Brand</h3>
                    <img src="imgs/illustrations/dudes-basketball.webp" height="140" alt="" class="margin-bottom-auto">
                    <h4 class="caption uppercase font-weight-400">Starting at</h4>
                    <h4 class="heading-3">$7,600</h4>
                    <h4 class="caption uppercase font-weight-400">3-8 weeks</h4>
                </div>
                <div class="col card align-center fade-in">
                    <h3 class="heading-2 align-center">Website</h3>
                    <img src="imgs/illustrations/dudes-laptop.webp" height="140" alt="" class="margin-bottom-auto">
                    <h4 class="caption uppercase font-weight-400">Starting at</h4>
                    <h4 class="heading-3">$7,800</h4>
                    <h4 class="caption uppercase font-weight-400">4-12 weeks</h4>
                </div>
                <div class="col card align-center fade-in">
                    <h3 class="heading-2 align-center">App</h3>
                    <img src="imgs/illustrations/dudes-smartphone.webp" height="140" alt="">
                    <h4 class="caption uppercase font-weight-400">Starting at</h4>
                    <h4 class="heading-3">$39,000</h4>
                    <h4 class="caption uppercase font-weight-400">3-6 months</h4>
                </div>
            </div>
        </section>
        <hr>
        <section class="container-1080">
            <h2 class="heading-1 align-center margin-bottom-4 fade-in">What You're Getting</h2>
            <div class="row">
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/hand-coins.svg">
                    </div>
                    <h3>Low Cost,<br>High Value</h3>
                    <p>Our remote business model passes the savings onto you.</p>
                </div>
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/shield-chevron.svg">
                    </div>
                    <h3>Owner-<br>Managed</h3>
                    <p>Our founders get involved in projects to ensure client satisfaction.</p>
                </div>
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/crown-simple.svg">
                    </div>
                    <h3>End-to-End<br>Customer Service</h3>
                    <p>Our growing list of happy clients is testimony that we go above and beyond.</p>
                </div>
            </div>
        </section>
        <hr>
        <section>
            <h2 class="heading-1 align-center margin-bottom-2 fade-in">World-class Design</h2>
            <?php include 'includes/portfolio-carousel.php';?>
        </section>
    </main>
    <!-- INCLUDE CALL-TO-ACTION.PHP start -->
    <?php include 'includes/cta-section.php';?>
    <!-- INCLUDE CALL-TO-ACTION.PHP end -->
    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->
    <!-- POLYKIT Scripts -->
    <script defer src="https://polykit.xyz/app/js/polykit-v0-3.js"></script>
</body>
</html>