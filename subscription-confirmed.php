<!DOCTYPE html>
<html lang="en">

<head>
    <title>🎉 Subscription Confirmed | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:url" content="https://polyfen.com/subscription-confirmed">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <script defer src="/app/js/accordion.js"></script>
    <script defer type="module" src="/app/js/teamRender.js"></script>
    <script defer src="/app/js/horizontal-scroll.js"></script>
  
    <!-- PAGE-SPECIFIC SCRIPTS end -->

</head>

<body class="dark-mode polyfen-site subs-confirmed">
    <!-- ya hay un estilo del founder-social  que llama a este ID -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- INCLUDE HEADER.PHP start -->
    <?php include 'includes/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <main class="subs-confirmed-main">
        <h1 class="align-center">🎉🎉🎉<br>Thank You for Subscribing!</h1>
        <h2 class="align-center heading-4">You Are in Good Hands</h2>
        <hr>
        <section class="container-600">
            <div class="row account-manager">
                <div class="col fade-in account-manager-col">
                    <img class="account-manager-img" src="/imgs/rod-portrait.webp" alt="Rodrigo">
                </div>
                <div class="col fade-in">
                    <h2 class="margin-bottom-1">Rodrigo is Your New Account Manager</h2>
                    <a class="button secondary-button margin-right-auto small-button"
                        href="https://calendly.com/polyfen/intro" target="_blank">Book a Call</a>
                </div>
            </div>
        </section>
        <hr>
        <section class="container create-task-section">
            <div class="row fade-in">
                <div class="col fade-in">
                    <a href="/videos/Create-Task-Animation.webm" target="_blank" title="Open Full-Screen"
                        style="cursor: zoom-in;">
                        <video autoplay muted loop width="327">
                            <source src="/videos/Create-Task-Animation.webm" type="video/webm">
                            <source src="/videos/Create-Task-Animation.mp4" type="video/mp4">

                            Sorry, your browser doesn't support HTML5 video.
                        </video>
                    </a>
                </div>
                <div class="col fade-in">
                    <h2>Start Creating<br>Tasks</h2>
                    <a class="button secondary-button margin-right-auto small-button"
                        href="https://polyfen.atlassian.net/servicedesk/customer/portal/1" target="_blank">Create a
                        Task</a>
                </div>
            </div>
        </section>
        <hr>
        <section class="container">
            <div class="row fade-in">
                <div class="col fade-in">
                    <?php include 'includes/slack-mockup.php';?>
                </div>
                <div class="col fade-in">
                    <h2>Join our Slack for Ongoing Support</h2>
                    <p>Check your inbox for the invite.</p>
                </div>
            </div>
        </section>
        <hr>
        <?php include 'includes/faqs.php';?>
        <hr>
        <h2 class="heading-2 align-center">We Look Forward to<br>Crushing Your Tasks</h2>
        <?php include 'includes/team-slider.php';?>
    </main>

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- script for the button more-faqs -->
    <script>
    document.getElementById('more-faqs').addEventListener('click', function() {
        let toToggle = document.querySelectorAll('.accordions-container .accordion:nth-child(n+5)');

        toToggle.forEach(function(e) {
            e.classList.toggle('d-none');
        });
        this.classList.add('d-none');
    });
    </script>

    <!-- POLYKIT Scripts -->
    <script defer src="https://polykit.xyz/app/js/polykit-v0-3.js"></script>

</body>

</html>