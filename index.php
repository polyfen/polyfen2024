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
    <meta name="description" property="og:description" content="AI consultancy that helps businesses stay ahead of their competition by implementing AI and automation.">
    <meta name="keywords" content="Brand, Brand Identity Design, Branding, Agency, Graphic Design, Logo, Creative, Strategy, Consultancy, Business Growth">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/home.png">
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
        <section class="cover section-cover-home">
            <div class="content-wrapper">
                <h1 class="title-2 align-center">Stay Ahead by Making<br>Your Business <span class="color-gradient">AI-first</span></h1>
                <h2 class="heading-5 margin-bottom-2 font-weight-400 align-center">Tap into our AI consultancy and reduce<br>costs with automated workflows</h2>
                <a class="button large-button cta-button photo-button margin-bottom-05" href="/#book-call">Book Call</a>
                <a data-button-arrow-down class="button large-button secondary-button" href="#learn-more">Learn More</a>
            </div>
            <div class="pattern-background">
            </div>
        </section>
        <!---------- CLIENTS-LOGO-SCROLLER.php start ---------->   
        <?php include 'includes/clients-logo-scroller.php';?>
        <!---------- CLIENTS-LOGO-SCROLLER.php end ---------->
        <hr id="learn-more">
        <section class="section-differential-value-props container-1080" id="services">
            <h2 class="heading-1 align-center fade-in">AI Consulting Services</h2>
            <div class="row margin-bottom-05">
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/lock.svg">
                    </div>
                    <h3 class="margin-bottom-1">Own<br>Your Data</h3>
                    <p>Run the latest AI models in your infrastructure and maintain data compliance (ISO, HIPPA, SOC2, GDPR).</p>
                </div>
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/crosshair.svg">
                    </div>
                    <h3 class="margin-bottom-1">AI Strategy<br>&amp; Planning</h3>
                    <p>We identify where AI can help your business and create a step-by-step plan to put it to work.</p>
                </div>
            </div>
            <div class="row">
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/robot.svg">
                    </div>
                    <h3 class="margin-bottom-1">AI-Powered<br>Automation</h3>
                    <p>We help businesses reduce repetitive work by using AI to handle tasks more efficiently.</p>
                </div>
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/head-circuit.svg">
                    </div>
                    <h3 class="margin-bottom-1">Enhanced<br>Decision-Making</h3>
                    <p>Automate and simplify decisions, escalations, and directives to focus on what’s important.</p>
                </div>
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/chats.svg">
                    </div>
                    <h3 class="margin-bottom-1">AI-First<br>Comms</h3>
                    <p>We use AI to automate content, simplify business communications, and enhance support.</p>
                </div>
            </div>
        </section>
        <hr>
        <section class="section-use-cases container-1080" id="use-cases">
            <h2 class="heading-1 align-center fade-in">Use Cases</h2>
        <hr>
        <section class="section-about container-1080" id="about">
            <h2 class="heading-1 align-center fade-in">Not Just Different.<br>Better.</h2>
        <hr>
        <section class="section-testimonials container-1080" id="testimonials">
            <h2 class="heading-1 align-center fade-in">Delivering Success,<br>One Client at a Time</h2>
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