<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get our Newsletter | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="https://polyfen.com/newsletter">
    <meta property="og:title" content="Get our Newsletter | Polyfen">
    <meta name="twitter:title" content="Get our Newsletter | Polyfen">
    <meta name="description" property="og:description"
        content="Unlock insights and stay ahead with bite-sized, high-quality content about design, marketing, tech, and business.">
    <meta name="twitter:description"
        content="Unlock insights and stay ahead with bite-sized, high-quality content about design, marketing, tech, and business.">
    <meta name="keywords" content="Newsletter, News, Email, Design, Marketing, Tech, Software, Engineering, Business, Start-up, Entrepreneur, Founder, Advice, Knowledge, Tips, Education, Informative, Information, Insights">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/newsletter-meta.png">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/newsletter-meta.png">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->

</head>

<body class="dark-mode polyfen-site landing-page newsletter">
    <!-- ya hay un estilo del founder-social  que llama a este ID -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- INCLUDE hellobar.PHP start -->
    <?php include 'includes/hellobar.php';?>
    <!-- INCLUDE hellobar.PHP end -->

    <!-- INCLUDE HEADER.PHP start -->
    <?php include 'includes/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- Discovery Call - Landing page start -->
    <main class="discovery-main">
        <section class="subscribe-cover fade-in" style="margin-bottom: 6rem;">
            <h1 class="caption align-center">Newsletter</h1>
            <h2 class="heading-1 align-center">Unlock Insights &amp;<br>Stay Ahead</h2>
            <?php include 'includes/mailchimp-form.php';?>
        </section>

        <section class="container fade-in" style="margin-bottom:6rem;">
        <div class="column-to-row">
            <div class="one-half">
                <img src="imgs/email-illustration.webp" alt="" style="max-width:260px;margin:auto;">
            </div>
            <div class="one-half">
                <ul class="hanging-list arrow-bullets spaced-list">
                    <li id="newsletter-icon-1" class="fade-in"><h3 class="heading-5">All killer, no filler</h3><br>Bite-sized, high-quality content.</li>
                    <li id="newsletter-icon-2" class="fade-in"><h3 class="heading-5">Members-only benefits</h3><br>Insider knowledge and early access for subscribers.</li>
                    <li id="newsletter-icon-3" class="fade-in"><h3 class="heading-5">Active community</h3><br>Engage with our community on <a href="https://www.linkedin.com/company/polyfen" target="_blank">LinkedIn</a>.</li>
                </ul>
            </div>
        </div>
        </section>

        <?php include 'includes/newsletter-cta.php';?>
        

    </main>
    <!-- FORCE MAX-WIDTH 100% end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- POLYKIT Scripts -->
    <script defer src="https://polykit.xyz/app/js/polykit-v0-3.js"></script>


</body>

</html>