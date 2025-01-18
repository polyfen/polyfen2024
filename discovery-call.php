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
    <title>Book a Discovery Call | Polyfen</title>
    <!---------- HEAD.php start ---------->
    <?php include 'includes/head.php';?>
    <!---------- HEAD.php end ---------->
    <!---------- PAGE-SPECIFIC META start ---------->
    <meta property="og:title" content="Book a Discovery Call with us">
    <meta property="og:url" content="https://polyfen.com/discovery-call">
    <meta name="keywords" content="">
    <meta name="description" property="og:description" content="Tell us about your project. Hear what we can do for you. No strings attached.">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/discovery-call.png">
    <meta name="robots" content="index, follow">
    <!---------- PAGE-SPECIFIC META end ---------->
    <!---------- PAGE-SPECIFIC CSS start ---------->
    <!---------- PAGE-SPECIFIC CSS end ---------->
    <!---------- PAGE-SPECIFIC SCRIPTS start ---------->
    <script defer src="/app/js/horizontal-scroll.js"></script>
    <!---------- PAGE-SPECIFIC SCRIPTS end ---------->
</head>
<body class="body-discovery-call">
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
    <!---------- MAIN DISCOVERY CALL start ---------->
    <main>
        <section class="cover section-with-video-bg">
            <div class="content-wrapper">
                <h1 class="title-2 align-center margin-bottom-1">Your Next Chapter<br>Starts with a Call</h1>
            </div>
            <div class="video-bg">
                <video autoplay muted loop playsinline style="will-change: transform;" playbackRate="0.5">
                    <source src="videos/background-12.mp4" type="video/mp4">
                </video>
            </div>
        </section>
        <section class="container-600 row gap-2 fade-in">
            <div class="col card">
                <div class="row gap-2">
                    <img class="board-member-portrait" src="/imgs/rod-portrait.webp" alt="">
                    <div>
                        <h3 class="heading-2 margin-bottom-1">Rodrigo Gatica</h3>
                        <h4 class="caption uppercase" style="margin-bottom: 1rem;">Co-founder &amp; CEO</h4>
                        <a class="board-members-social link" href="https://www.linkedin.com/in/rodrigo-gatica/" target="_blank">LinkedIn ↗</a>
                        <p>Tell us about your business.<br>Discover how we can help you.<br>No strings attached.</p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="small-separator">
        <section aria-label="Calendly" id="calendly">
            <!---------- CALENDLY.php start ---------->
            <?php include 'includes/calendly.php';?>
            <!---------- CALENDLY.php end ---------->
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
    <!---------- MAIN CASE STUDIES end ---------->
    <!---------- CALL-TO-ACTION.php start ---------->
    <?php include 'includes/cta-section.php';?>
    <!---------- CALL-TO-ACTION.php end ---------->
    <!---------- FOOTER.php start ---------->
    <?php include 'includes/footer.php';?>
    <!---------- FOOTER.php end ---------->
</body>
</html>