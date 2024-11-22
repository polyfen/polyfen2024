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
    <script defer src="/app/js/plan-cards-toggle.js"></script>
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
            <h1 class="title-1 align-center">Transform Ideas<br>into Impact</h1>
            <p class="align-center">Software & creative studio empowering startups and scaleups with design and engineering solutions since 2018.</p>
            <a class="button large-button cta-button photo-button margin-bottom-05" href="/discovery-call">Book Call</a>
            <a data-button-arrow-down class="button large-button secondary-button" href="#learn-more">Learn More</a>
            <div class="cover-home-background">
                <div id="pearl-1" class="pearl rotate-slower fade-in">
                </div>
                <div id="pearl-2" class="pearl rotate fade-in">
                </div>
                <div id="pearl-3" class="pearl rotate fade-in">
                </div>
            </div>
        </section>
        <section id="learn-more" class="section-portolio-thumbnails">
            <h2 class="heading-1 align-center fade-in">World-class Design</h2>
            <!---------- PORTFOLIO-SCROLLER.php start ---------->
            <?php include 'includes/portfolio-scroller.php';?>
            <!---------- PORTFOLIO-SCROLLER.php end ---------->
        </section>
        <hr>
        <section class="section-subscriptions-summary container-1080 margin-bottom-6 fade-in">
            <h2 class="heading-1 align-center">Offload your Design<br>& Development Needs</h2>
            <!---------- TOGGLE BUTTON ---------->
            <div class="toggle-container fade-in" id="start-today">
                    <button class="small-button secondary-button inactive-button" data-period="monthly">Pay Monthly</button>
                    <button data-content="20% OFF" class="small-button secondary-button active-button"
                    data-period="quarterly">Pay Quarterly</button>
            </div>
            <!-- SUBSCRIPTION-PLANS.php start -->
            <?php include 'includes/subscription-plans.php';?>
            <!-- SUBSCRIPTION-PLANS.php end -->
        </section>
        <hr>
        <section class="section-build-summary container-1080 fade-in">
            <h2 class="heading-1 align-center">Fixed Price,<br>Precision Delivery</h2>
            <div class="row">
                <div class="col card align-center fade-in">
                    <h3 class="heading-2 align-center">Brand</h3>
                    <img src="imgs/illustrations/dudes-basketball.webp" height="140" alt="" class="margin-bottom-1">
                    <h4 class="caption uppercase font-weight-400">Starting at</h4>
                    <h4 class="heading-3 margin-bottom-1">$1,800</h4>
                    <a class="button secondary-button small-button margin-auto" href="/branding">Learn More</a>
                </div>
                <div class="col card align-center fade-in">
                    <h3 class="heading-2 align-center">Website</h3>
                    <img src="imgs/illustrations/dudes-laptop.webp" height="140" alt="" class="margin-bottom-1">
                    <h4 class="caption uppercase font-weight-400">Starting at</h4>
                    <h4 class="heading-3 margin-bottom-1">$2,800</h4>
                    <a class="button secondary-button small-button margin-auto" href="/discovery-call">Book Call</a>
                </div>
            </div>
        </section>
        <hr>
        <section class="section-differential-value-props container-1080">
            <h2 class="heading-1 align-center fade-in">Not Just Different.<br>Better.</h2>
            <div class="row">
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/hand-coins.svg">
                    </div>
                    <h3 class="margin-bottom-1">Low Cost,<br>High Value</h3>
                    <p>Our remote business model passes the savings onto you.</p>
                </div>
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/shield-chevron.svg">
                    </div>
                    <h3 class="margin-bottom-1">Owner-<br>Managed</h3>
                    <p>Our founders get involved in projects to ensure client satisfaction.</p>
                </div>
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/crown-simple.svg">
                    </div>
                    <h3 class="margin-bottom-1">White Glove<br>Customer Service</h3>
                    <p>Our growing list of happy clients shows that we go above and beyond.</p>
                </div>
            </div>
        </section>
        <hr>
        <!---------- CLIENTS-LOGO-SCROLLER.php start ---------->   
        <?php include 'includes/clients-logo-scroller.php';?>
        <!---------- CLIENTS-LOGO-SCROLLER.php end ---------->
        <hr>
        <section class="section-testimonials container-1080">
            <h2 class="heading-1 align-center fade-in">Crafting Success,<br>One Client at a Time</h2>
            <?php include 'includes/testimonials.php';?>
        </section>
    </main>
    <!---------- CALL-TO-ACTION.php start ---------->
    <?php include 'includes/cta-section.php';?>
    <!---------- CALL-TO-ACTION.php end ---------->
    <!---------- FOOTER.php start ---------->
    <?php include 'includes/footer.php';?>
    <!---------- FOOTER.php end ---------->
</body>
</html>