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
    <title>Design & Dev Subscription Plans | Polyfen</title>
    <!---------- HEAD.php start ---------->
    <?php include 'includes/head.php';?>
    <!---------- HEAD.php end ---------->
    <!---------- PAGE-SPECIFIC META start ---------->
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="https://polyfen.com/subscriptions">
    <meta property="og:title" content="Design & Dev Subscription Plans">
    <meta name="description" property="og:description" content="Affordable all-in-one subscriptions with unlimited design and development tasks for start-ups.">
    <meta name="keywords" content="development tasks, design tasks, ux tasks, devops tasks, development subscription, design subscription, ux subscription, devops subscription, startup, product development, monthly, quarterly, ">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/subscriptions.png">
    <!---------- PAGE-SPECIFIC META end ---------->
    <!---------- PAGE-SPECIFIC CSS start ---------->
    <!---------- PAGE-SPECIFIC CSS end ---------->
    <!---------- PAGE-SPECIFIC SCRIPTS start ---------->
    <script defer src="/app/js/accordion.js"></script>
    <script defer src="/app/js/plan-cards-toggle.js"></script>
    <script defer type="module" src="/app/js/teamRender.js"></script>
    <script defer src="/app/js/horizontal-scroll.js"></script>
    <link rel="stylesheet" type="text/css" href="/libs/slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/libs/slick/slick/slick-theme.css" />
    <!---------- PAGE-SPECIFIC SCRIPTS end ---------->
</head>
<body class="body-subscriptions">
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
    <!---------- MAIN SUBSCRIPTIONS start ---------->
        <main>
                <section class="subscription-plans fade-in">
                        <div class="container-1080">
                                <h1 class="title-2 align-center margin-bottom-4">Offload your Design<br>& Development Needs</h1>
                                <!---------- TOGGLE BUTTON ---------->
                                <div class="toggle-container fade-in" id="start-today">
                                        <button class="small-button secondary-button inactive-button" data-period="monthly">Pay Monthly</button>
                                        <button data-content="20% OFF" class="small-button secondary-button active-button"
                                        data-period="quarterly">Pay Quarterly</button>
                                </div>
                                <!-- INCLUDE SUBSCRIPTION-PLANS.PHP start -->
                                <?php include 'includes/subscription-plans.php';?>
                                <!-- INCLUDE SUBSCRIPTION-PLANS.PHP end -->
                        </div>
                        <div class="cover-pearl-background">
                                <div class="pearl rotate-slower fade-in">
                                </div>
                        </div>
                </section>
                <hr>
                <!---------- CLIENTS-LOGO-SCROLLER.php start ---------->   
                <?php include 'includes/clients-logo-scroller.php';?>
                <!---------- CLIENTS-LOGO-SCROLLER.php end ---------->
                <hr>
                <section id="learn-more" class="section-task-examples container-1080">
                        <h2 class="heading-1 align-center fade-in">Ask for Whatever<br>You Need</h2>
                        <div class="row gap-1">
                                <div class="col fade-in">
                                        <?php include 'includes/slack-mockup.php';?>
                                </div>
                                <div class="col fade-in">
                                        <div class="row margin-bottom-05">
                                                <div class="col card card-small fade-in">
                                                        <div class="mobile-row">
                                                                <div class="icon-container icon-container-small">
                                                                        <img src="imgs/icons/user-focus.svg" alt="" height="22px">
                                                                </div>
                                                                <h4 class="heading-5">UX</h4>
                                                        </div>
                                                        <ul class="hanging-list checkmark-bullet caption">
                                                                <li>Write user stories</li>
                                                                <li>Chart user flows</li>
                                                                <li>Diagram information architecture</li>
                                                        </ul>
                                                </div>
                                                <div class="col card card-small fade-in">
                                                        <div class="mobile-row">
                                                                <div class="icon-container icon-container-small">
                                                                        <img src="imgs/icons/pencil-ruler.svg" alt="" height="20px">
                                                                </div>
                                                                <h4 class="heading-5">Design</h4>
                                                        </div>
                                                        <ul class="hanging-list checkmark-bullet caption">
                                                                <li>Design landing page</li>
                                                                <li>Redesign logo</li>
                                                                <li>Build Figma prototype</li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col card card-small fade-in">
                                                        <div class="mobile-row">
                                                                <div class="icon-container icon-container-small">
                                                                        <img src="imgs/icons/code.svg" alt="" height="22px">
                                                                </div>
                                                                <h4 class="heading-5">Development</h4>
                                                        </div>
                                                        <ul class="hanging-list checkmark-bullet caption">
                                                                <li>Build a new feature</li>
                                                                <li>Fix a bug</li>
                                                                <li>Refactor codebase</li>
                                                        </ul>
                                                </div>
                                                <div class="col card card-small fade-in">
                                                <div class="mobile-row pro">
                                                                <div class="icon-container icon-container-small">
                                                                        <img src="imgs/icons/infinity.svg" alt="" height="24px">
                                                                </div>
                                                                <h4 class="heading-5">DevOps</h4>
                                                        </div>
                                                        <ul class="hanging-list checkmark-bullet caption">
                                                                <li>Set up AWS infrastructure</li>
                                                                <li>Generate Docker container</li>
                                                                <li>Subscribe to SNS queue</li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </section>
                <hr>
                <section class="container-1080 subscription-value-props">
                        <h2 class="heading-1 align-center fade-in">What You're Getting</h2>
                        <div class="row margin-bottom-05">
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/flag.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Fast-track<br>Onboarding</h3>
                                        <p>No contracts, no paperwork hassle. Start today.</p>
                                </div>
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/triangle.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Top-tier<br>Talent</h3>
                                        <p>We screen rigorously and hire only the best.</p>
                                </div>
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/person.svg" width="34px">
                                        </div>
                                        <h3 class="margin-bottom-1">Devs, DevOps,<br>UX, & Designers</h3>
                                        <p>A full-blown team ready to crush your tasks.</p>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/table.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Client<br>Dashboard</h3>
                                        <p>Create and manage your tasks with ease.</p>
                                </div>
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/slack.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Dedicated Slack<br>Support</h3>
                                        <p>Quick response, realtime assistance.</p>
                                </div>
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/video-conference.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Videocall<br>Scheduler</h3>
                                        <p>Book a call with your account manager.</p>
                                </div>
                        </div>
                </section>
                <hr>
                <section class="stack-section container-1080">
                        <h2 class="heading-1 align-center fade-in">Solutions for<br>Every Stack</h2>
                        <!---------- TECH-STACK.php start ---------->
                        <?php include 'includes/tech-stack.php';?>
                        <!---------- TECH-STACK.php end ---------->
                </section>
                <hr>
                <section class="section-portolio-thumbnails">
                        <h2 class="heading-1 align-center fade-in">World-class Design</h2>
                        <!---------- PORTFOLIO-SCROLLER.php start ---------->
                        <?php include 'includes/portfolio-scroller.php';?>
                        <!---------- PORTFOLIO-SCROLLER.php end ---------->
                </section>
                <hr>
                <section class="faqs container-1080 flex-column-center fade-in">
                        <h2 id="faq" class="heading-1 align-center">Frequently<br>Asked Questions</h2>
                        <!---------- FAQ.php start ---------->
                        <?php include 'includes/faq.php';?>
                        <!---------- FAQ.php end ---------->
                </section>
                <hr>
                <section class="section-team-scroller">
                        <h2 class="heading-1 align-center">Team of Experts<br>in Your Timezone</h2>
                        <?php include 'includes/team-slider.php';?>
                </section>
        </main>
    <!---------- CALL-TO-ACTION.php start ---------->
    <?php include 'includes/cta-section.php';?>
    <!---------- CALL-TO-ACTION.php end ---------->
    <!---------- FOOTER.php start ---------->
    <?php include 'includes/footer.php';?>
    <!---------- FOOTER.php end ---------->
    <!---------- SCRIPTS ---------->
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
</body>
</html>