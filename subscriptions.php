<!DOCTYPE html>
<html lang="en">

<head>
    <title>Design & Dev Subscription Plans | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="https://polyfen.com/subscriptions">
    <meta property="og:title" content="Design & Dev Subscription Plans">
    <meta name="twitter:title" content="Design & Dev Subscription Plans">
    <meta name="description" property="og:description"
        content="Affordable all-in-one subscriptions with unlimited design and development tasks for start-ups.">
    <meta name="twitter:description"
        content="Affordable all-in-one subscriptions with unlimited design and development tasks for start-ups.">
    <meta name="keywords"
        content="development tasks, design tasks, ux tasks, devops tasks, development subscription, design subscription, ux subscription, devops subscription, startup, product development, monthly, quarterly, ">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/subscriptions.png">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/subscriptions.png">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <script defer src="/app/js/accordion.js"></script>
    <script defer src="/app/js/plan-cards-toggle.js"></script>
    <script defer type="module" src="/app/js/teamRender.js"></script>
    <script defer src="/app/js/horizontal-scroll.js"></script>

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="/libs/slick/slick/slick.css" />
    <!-- Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="/libs/slick/slick/slick-theme.css" />
    <!-- PAGE-SPECIFIC SCRIPTS end -->

</head>

<body class="dark-mode polyfen-site subscriptions">
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

    <!-- Landing page start -->
    <main class="subscriptions-main">

        <section class="subscription-plans container-1080 fade-in">
            <h1 id="plans" class="caption align-center uppercase margin-bottom-1">Subscriptions</h1>
            <h2 class="heading-1 align-center margin-bottom-4">Affordable All-in-One<br>Plans For Startups</h2>

            <!-- toggle button -->
            <div class="toggle-container fade-in">
                <button class="small-button secondary-button inactive-button" data-period="monthly">Pay Monthly</button>
                <button data-content="30% OFF" class="small-button secondary-button active-button"
                    data-period="quarterly">Pay Quarterly</button>
            </div>
            <!-- INCLUDE SUBSCRIPTION-PLANS.PHP start -->
            <?php include 'includes/subscription-plans.php';?>
            <!-- INCLUDE SUBSCRIPTION-PLANS.PHP end -->
             <div class="security-caption fade-in">
                <img src="imgs/icons/lock.svg" height="20px">
                <small class="mini align-center">Secure Payment with Stripe</small>
             </div>
        </section>

        <hr>

        <?php include 'includes/clients.php';?>

        <hr>

        <section class="container-1080">
                <h2 class="align-center fade-in" style="margin-bottom: 4rem;">Ask for Whatever<br>You Need</h2>
                <div class="row" style="gap:60px;">
                        <?php include 'includes/slack-mockup.php';?>
                        <div class="fade-in task-examples" alt="">
                                <h3 class="caption uppercase" style="margin-bottom:1.5rem;">Some Examples</h3>
                                <div class="row">
                                        <div class="col fade-in">
                                                <div class="task-example-type">
                                                        <div class="task-example-icon">
                                                                <img src="imgs/icons/user-focus.svg" alt="" height="20px">
                                                        </div>
                                                        <h4 class="heading-5">UX</h4>
                                                </div>
                                                <ul class="hanging-list checkmark-bullet">
                                                        <li>Write user stories</li>
                                                        <li>Chart user flows</li>
                                                        <li>Diagram information architecture</li>
                                                </ul>
                                        </div>
                                        <div class="col fade-in">
                                                <div class="task-example-type">
                                                        <div class="task-example-icon">
                                                                <img src="imgs/icons/pencil-ruler.svg" alt="" height="20px">
                                                        </div>
                                                        <h4 class="heading-5">Design</h4>
                                                </div>
                                                <ul class="hanging-list checkmark-bullet">
                                                        <li>Design landing page</li>
                                                        <li>Redesign logo</li>
                                                        <li>Build Figma prototype</li>
                                                </ul>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col fade-in">
                                                <div class="task-example-type">
                                                        <div class="task-example-icon">
                                                                <img src="imgs/icons/code.svg" alt="" height="20px">
                                                        </div>
                                                        <h4 class="heading-5">Development</h4>
                                                </div>
                                                <ul class="hanging-list checkmark-bullet">
                                                        <li>Build a new feature</li>
                                                        <li>Fix a bug</li>
                                                        <li>Refactor codebase</li>
                                                </ul>
                                        </div>
                                        <div class="col fade-in">
                                        <div class="task-example-type pro">
                                                        <div class="task-example-icon">
                                                                <img src="imgs/icons/infinity.svg" alt="" height="20px">
                                                        </div>
                                                        <h4 class="heading-5">DevOps</h4>
                                                </div>
                                                <ul class="hanging-list checkmark-bullet">
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
                <h2 class="align-center fade-in margin-bottom-4">What You're Getting</h2>
                <div class="row">
                        <div class="icon-value-prop col fade-in">
                                <div class="icon-container"><img src="/imgs/icons/flag.svg"></div>
                                <h3>Fast-track<br>Onboarding</h3>
                                <p>No contracts, no paperwork<br>hassle. Start today.</p>
                        </div>
                        <div class="icon-value-prop col fade-in">
                                <div class="icon-container"><img src="/imgs/icons/cert.svg"></div>
                                <h3>Qualified<br>Experts</h3>
                                <p>We have highly qualified<br>talent in your timezone.</p>
                        </div>
                        <div class="icon-value-prop col fade-in">
                                <div class="icon-container"><img src="/imgs/icons/person.svg"></div>
                                <h3>Devs, DevOps,<br>UX, & Designers</h3>
                                <p>A full-blown team ready to<br>crush your tasks.</p>
                        </div>
                </div>
                <div class="row">
                        <div class="icon-value-prop col fade-in">
                                <div class="icon-container"><img src="/imgs/icons/table.svg"></div>
                                <h3>Client<br>Dashboard</h3>
                                <p>Create and manage your<br>tasks with ease.</p>
                        </div>
                        <div class="icon-value-prop col fade-in">
                                <div class="icon-container"><img src="/imgs/icons/chats.svg"></div>
                                <h3>Slack<br>Support</h3>
                                <p>Quick response, realtime<br>assistance.</p>
                        </div>
                        <div class="icon-value-prop col fade-in">
                                <div class="icon-container"><img src="/imgs/icons/video-conference.svg"></div>
                                <h3>Videocall<br>Scheduler</h3>
                                <p>Book a call with your<br>account manager.</p>
                        </div>
                </div>
        </section>

        <hr>

        <section class="stack-section container-1080">
            <h2 class="align-center fade-in" style="margin-bottom: 4rem;">Solutions for<br>Every Stack</h2>
            <!-- Tech Stack for carrousel -->
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
                        <div class="stack-u pro fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/swift-original.svg">Swift</div>
                        <div class="stack-u pro fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/kotlin-original.svg">Kotlin</div>
                        <div class="stack-u pro fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/dart-original.svg">Dart</div>
                        <div class="stack-u pro fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/flutter-original.svg">Flutter
                        </div>
                        <div class="pro stack-u fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/aws-plain.svg">AWS</div>
                    </div>
                </div>
                <div class="carrousel-col">
                    <div class="slide-inside">
                        <div class="pro stack-u fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/azure-original.svg">Azure</div>
                        <div class="pro stack-u fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/googlecloud-original.svg">
                            <span>Google Cloud</span>
                        </div>
                        <div class="pro stack-u fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/docker-original.svg">Docker</div>
                        <div class="pro stack-u fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/kubernetes-original.svg">Kubernetes
                        </div>
                        <div class="pro stack-u fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/vercel-original.svg">Vercel
                        </div>
                        <div class="pro stack-u fade-in"><img loading="lazy" alt=""
                                src="/imgs/tech-stack/jenkins-original.svg">Jenkins</div>
                    </div>
                </div>
            </div>
            <!-- Tech carrousel END -->
        </section>

        <hr>

        <h2 class="align-center fade-in">World-class Design</h2>
        <?php include 'includes/portfolio-thumbnails.php';?>
        
        <hr>

        <?php include 'includes/faqs.php';?>

        <hr>

        <h2 class="heading-2 align-center">Team of Experts<br>in Your Timezone</h2>
        <?php include 'includes/team-slider.php';?>

        <section class="cta-section">
            <div class="grain-texture">
                <div class="cta-content">
                    <div class="container-800">
                        <h2 class="heading-1 align-center">Affordable all-in-one<br>plans for startups</h2>
                        <a data-button-arrow-up class="button large-button cta-button" href="#plans">Subscribe Today</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- FORCE MAX-WIDTH 100% end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

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

    <!-- POLYKIT Scripts -->
    <script defer src="https://polykit.xyz/app/js/polykit-v0-3.js"></script>


</body>

</html>