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
    <title>OnDemand Design & Dev Team | Polyfen</title>
    <!---------- HEAD.php start ---------->
    <?php include 'includes/head.php';?>
    <!---------- HEAD.php end ---------->
    <!---------- PAGE-SPECIFIC META start ---------->
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="https://polyfen.com/ondemand">
    <meta property="og:title" content="OnDemand Design & Dev Team">
    <meta name="description" property="og:description" content="#">
    <meta name="keywords" content="#">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/ondemand.png">
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
                <section class="cover video-cover pattern-background section-cover-ondemand">
                        <div class="container-1200 ">
                                <div class="row">
                                        <div class="col">
                                                <h1 class="title-3">Your OnDemand<br>Design &amp; Dev Team</h1>       
                                                <p>Get access to a full-blown team for a fraction of the price of a single US senior employee.</p>                         
                                                <a class="button secondary-button" href="#learn-more">Learn More</a>
                                        </div>
                                        <div class="col">
                                                <div class="video-container">
                                                        <video autoplay muted loop >
                                                                <source src="videos/ondemand.webm" type="video/webm">
                                                                <source src="videos/ondemand.mp4" type="video/mp4">
                                                        </video>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </section>
                <section class="container-1080 section-pricing" id="learn-more">
                        <h2 class="heading-1 align-center margin-bottom-4">Choose Your Team Size</h2>
                        <div class="row">
                                <div class="col">
                                        <h3>What You're Getting</h3>
                                        <ul class="checkmark-bullet">
                                                <li>Designated project manager</li>
                                                <li>Get work done by Designers, UX, Devs, DevOps, and QA</li>
                                                <li>Realtime, priority support on dedicated Slack channel</li>
                                                <li>Unlimited projects</li>
                                                <li>Unlimited revisions</li>
                                                <li>Pause or Cancel Any Time</li>
                                                <li>No Hidden Fees</li>
                                                <li>Secure Payment with Stripe</li>
                                        </ul>
                                </div>
                                <div class="col">
                                        <div class="featured-card-wrapper">
                                                <div class="card">
                                                        <h3 class="heading-5 align-center font-weight-400">How many people do you need working at the same time?</h3>
                                                        <h4 class="heading-2 align-center"><span class="color-gradient">x1</span> Active Talent</h4>
                                                        <h4 class="heading-2 align-center"><span class="color-gradient price-value">$6,490<span class="mini">/month</span></span></h4>
                                                        <div class="slider-container">
                                                                <div class="slider-labels">
                                                                        <span id="label1">x1</span>
                                                                        <span id="label2">x2</span>
                                                                        <span id="label3">x3</span>
                                                                        <span id="label4">x4</span>
                                                                        <span id="label5">x5</span>
                                                                </div>
                                                                <input type="range" min="1" max="5" value="1" class="slider" id="talentRange">
                                                        </div>
                                                        <script>
                                                                const slider = document.getElementById('talentRange');
                                                                const labels = document.querySelectorAll('.slider-labels span');
                                                                const talentValue = document.querySelector('.color-gradient');
                                                                const priceValue = document.querySelector('.price-value');

                                                                const prices = {
                                                                        1: '$6,490<span class="mini">/month</span>',
                                                                        2: '$12,330<span class="mini">/month</span>',
                                                                        3: '$18,500<span class="mini">/month</span>',
                                                                        4: '$24,660<span class="mini">/month</span>',
                                                                        5: '$29,810<span class="mini">/month</span>'
                                                                };

                                                                slider.addEventListener('input', function() {
                                                                        labels.forEach(label => label.classList.remove('active'));
                                                                        document.getElementById('label' + this.value).classList.add('active');
                                                                        talentValue.innerHTML = 'x' + this.value;
                                                                        priceValue.innerHTML = prices[this.value];
                                                                        this.style.setProperty('--value', (this.value - 1) * 25);
                                                                });

                                                                document.getElementById('label1').classList.add('active');
                                                                slider.style.setProperty('--value', (slider.value - 1) * 25);
                                                        </script>
                                                        <a class="button large-button cta-button margin-auto">Sign-up Now</a>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </section>
                <hr>
                <!---------- CLIENTS-LOGO-SCROLLER.php start ---------->   
                <?php include 'includes/clients-logo-scroller.php';?>
                <!---------- CLIENTS-LOGO-SCROLLER.php end ---------->
                <hr>
                <section class="section-task-examples container-1080">
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
                                                <div class="mobile-row">
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
                                                <img src="/imgs/icons/hand-coins.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Low Cost,<br>High Value</h3>
                                        <p>Our remote business model passes the savings onto you.</p>
                                </div>
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/flag.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Fast-track<br>Onboarding</h3>
                                        <p>No contracts, no paperwork hassle. Start today.</p>
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
                                                <img src="/imgs/icons/triangle.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Top-tier<br>Talent</h3>
                                        <p>We screen rigorously and hire only the best.</p>
                                </div>
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/chart-bar.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Dedicated<br>Project Manager</h3>
                                        <p>Quick response, realtime human assistance over Slack.</p>
                                </div>
                                <div class="col card fade-in">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/resize.svg">
                                        </div>
                                        <h3 class="margin-bottom-1">Scalable Solutions<br>On Demand</h3>
                                        <p>Change your plan, pause, or cancel any time!</p>
                                </div>
                        </div>
                </section>
                <hr>
                <section class="stack-section container-1080">
                        <h2 class="heading-1 align-center fade-in">Solutions for<br>Every Stack</h2>
                        <!---------- TECH STACK CAROUSEL ---------->
                        <div class="stack-carrousel">
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/git-original.svg">Git</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/jira-original.svg">Jira</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/confluence-original.svg">Confluence
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/wordpress-plain.svg">Wordpress
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/woocommerce-original.svg">WooCommerce
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/javascript-original.svg">JavaScript
                                        </div>
                                </div>
                                </div>
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/nodejs-original.svg">Node.js
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/react-original.svg">React</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/typescript-original.svg">TypeScript
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/vuejs-original.svg">Vue.js</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/angular-original.svg">Angular
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/python-logo.svg">Python</div>
                                </div>
                                </div>
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/php-original.svg">PHP</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/laravel-original.svg">Laravel
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/mysql-original-icon.svg">MySQL</div>

                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/mongodb-original.svg">MongoDB
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/firebase-original.svg">Firebase
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/nextjs-plain.svg">Next.js</div>
                                </div>
                                </div>
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/bun-original.svg">Bun</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/rails-original-wordmark.svg">Ruby on Rails</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/rust-original.svg">Rust</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/go-original.svg">Go
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/databricks-logo.svg">Databricks</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/django-plain.svg">Django</div>
                                </div>
                                </div>
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/sass-original.svg">Sass</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/bootstrap-original.svg">Bootstrap
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/tailwindcss-original.svg">Tailwind
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/materialui-plain.svg">Material UI
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/figma-original.svg">Figma</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt="" src="/imgs/tech-stack/framer.svg">Framer
                                        </div>
                                </div>
                                </div>
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/illustrator.svg">Illustrator
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/photoshop.svg">Photoshop
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/after-effects.svg">After
                                        Effects
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/premiere.svg">Premiere
                                        Pro
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/indesign.svg">InDesign</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/hotjar-logo.svg">Hotjar</div>
                                </div>
                                </div>
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/analytics-logo.svg">Google<br>Analytics</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/useberry-logo.svg">Useberry</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/maze-logo-w.svg">Maze</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/usertesting-icon.svg">UserTesting</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/dovetail-logo-white.svg">Dovetail</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/java-original.svg">Java</div>
                                </div>
                                </div>
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/dotnet-logo.svg">.Net</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/swift-original.svg">Swift</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/kotlin-original.svg">Kotlin</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/dart-original.svg">Dart</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/flutter-original.svg">Flutter
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/aws-plain.svg">AWS</div>
                                </div>
                                </div>
                                <div class="carrousel-col">
                                <div class="slide-inside">
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/azure-original.svg">Azure</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/googlecloud-original.svg">
                                        <span>Google Cloud</span>
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/docker-original.svg">Docker</div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/kubernetes-original.svg">Kubernetes
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/vercel-original.svg">Vercel
                                        </div>
                                        <div class="stack-u fade-in"><img loading="lazy" alt=""
                                                src="/imgs/tech-stack/jenkins-original.svg">Jenkins</div>
                                </div>
                                </div>
                        </div>
                </section>
                <hr>
                <section class="section-portolio-thumbnails">
                        <h2 class="heading-1 align-center fade-in">World-class Design</h2>
                        <!---------- PORTFOLIO-SCROLLER.php start ---------->
                        <?php include 'includes/portfolio-scroller.php';?>
                        <!---------- PORTFOLIO-SCROLLER.php end ---------->
                </section>
                <hr>
                <section class="testimonials-section container-1080">
                        <h2 class="heading-1 align-center fade-in">Delivering Success,<br>One Client at a Time</h2>
                        <?php include 'includes/testimonials.php';?>
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