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
    <meta name="description" property="og:description" content="Affordable all-in-one subscriptions with unlimited design and development tasks for start-ups.">
    <meta name="twitter:description" content="Affordable all-in-one subscriptions with unlimited design and development tasks for start-ups.">
    <meta name="keywords" content="development tasks, design tasks, ux tasks, devops tasks, development subscription, design subscription, ux subscription, devops subscription, startup, product development, monthly, quarterly, ">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/subscriptions.png">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/subscriptions.png">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="/libs/slick/slick/slick.css" />
    <!-- Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="/libs/slick/slick/slick-theme.css" />

</head>

<body class="landing-page subscriptions dark-mode">
    <!-- ya hay un estilo del founder-social  que llama a este ID -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- INCLUDE HELLO-BAR.PHP start -->
    <?php include 'includes/hello-bar.php';?>
    <!-- INCLUDE HELLO-BAR.PHP end -->

    <!-- INCLUDE HEADER.PHP start -->
    <?php include 'includes/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- Landing page start -->
    <main class="subscriptions-main">

        <section class="subscription-plans container-1080 hidden">
            <h1 id="subscriptions" class="caption align-center">Subscriptions</h1>
            <h2 class="heading-1 align-center">Affordable All-in-One Plans<br>for Every Start-up</h2>

            <!-- toggle button -->
            <div class="toggle-container hidden">
                <button class="small-button secondary-button inactive-button">Pay Monthly</button>
                <button data-content="30% OFF" class="small-button secondary-button active-button">Pay Quarterly</button>
            </div>
            <section class="row">
                <div class="subscription-plan-card hidden" id="starter">
                    <div class="card-header">
                        <h3 class="heading-2">Starter</h3>
                        <h4 class="heading-3">$3442</h4>
                        <small class="caption">/Month</small>
                    </div>
                    <div class="card-body">
                        <ul class="hanging-list">
                            <li class="bold">1 task at a time</li>
                            <li class="bold">3-5 days turnaround</li>
                            <li class="bold">Unlimited tasks by Devs, UX,<br>and Designers</li>
                            <li>Unlimited revisions</li>
                            <li>Unlimited projects</li>
                            <li>Pause or cancel any time</li>
                        </ul>
                        <a class="button secondary-button small-button">Start Today ➞</a>
                    </div>
                </div>
                <div class="subscription-plan-card featured-card hidden" id="pro">
                    <div class="card-header">
                        <h3 class="heading-2">Pro</h3>
                        <h4 class="heading-3">$6263</h4>
                        <small class="caption">/Month</small>
                        <small class="card-label mini">Popular</small>
                    </div>
                    <div class="card-body">
                        <ul class="hanging-list">
                            <li class="bold">2 task at a time</li>
                            <li class="bold">2-4 days turnaround</li>
                            <li class="bold">Unlimited tasks by Devs, UX,<br>Designers, and DevOps</li>
                            <li class="bold">Priority support</li>
                            <li>Unlimited revisions</li>
                            <li>Unlimited projects</li>
                            <li>Pause or cancel any time</li>
                        </ul>
                        <a class="button secondary-button small-button">Start Today ➞</a>
                    </div>
                </div>
                <div class="start-a-chat hidden">
                    <h3 class="caption" style="margin-bottom: 8px;">Want more?</h3>
                    <h4 class="heading-2">Talk to Sales for a Custom Plan</h4>
                    <a href="/discovery-call" data-button-icon="book-a-call" class="button secondary-button small-button margin-right-auto">Book a Call</a>
                    <hr>
                    <h3 class="caption" style="margin-bottom: 8px;">Any Questions?</h3>
                    <h4 class="heading-2">We're Happy to Help</h4>
                    <button data-button-icon="start-a-chat" onclick="$crisp.push(['do', 'chat:open'])" class="button secondary-button small-button margin-right-auto">Start a Chat</button>
                </div>
            </section>
        </section>

        <hr>

        <section class="container-1080 row subscription-value-props">
            <div class="col hidden">
                <div class="value-img"><img src="/imgs/icons/cert.svg"></div>
                <h2>10x<br>Engineers</h2>
                <p>We hire world-class engineers, design and UX professionals in your timezone.</p>
            </div>
            <div class="col hidden">
                <div class="value-img"><img src="/imgs/icons/flag.svg"></div>
                <h2>Fast-track Onboarding</h2>
                <p>No contracts, no paperwork hassle. Start today.</p>
            </div>
            <div class="col hidden">
                 <div class="value-img"><img src="/imgs/icons/person.svg"></div>
                <h2>Devs, DevOps, UX, & Designers</h2>
                <p>A single subscription for tasks of all kinds.</p>
            </div>
        </section>

        <hr>

        <section class="container-1080">
            <h2 class="align-center">Solutions for<br>Every Stack</h2>

            <!-- Tech Stack for carrousel -->
            <div class="stack-carrousel container-800">
                <div class="carrousel-col">
                    <div class="slide-inside">
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/git-original.svg">Git</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/jira-original.svg">Jira</div>
                        <div class="stack-u hidden"><img loading="lazy"
                                src="/imgs/tech-stack/confluence-original.svg">Confluence
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/wordpress-plain.svg">Wordpress
                        </div>
                        <div class="stack-u hidden"><img loading="lazy"
                                src="/imgs/tech-stack/woocommerce-original.svg">WooCommerce
                        </div>
                        <div class="stack-u hidden"><img loading="lazy"
                                src="/imgs/tech-stack/javascript-original.svg">JavaScript
                        </div>
                    </div>
                </div>
                <div class="carrousel-col">
                    <div class="slide-inside">
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/nodejs-original.svg">Node.js
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/react-original.svg">React</div>
                        <div class="stack-u hidden"><img loading="lazy"
                                src="/imgs/tech-stack/typescript-original.svg">TypeScript
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/vuejs-original.svg">Vue.js</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/angular-original.svg">Angular
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/python-logo.svg">Python</div>
                    </div>
                </div>
                <div class="carrousel-col">
                    <div class="slide-inside">
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/php-original.svg">PHP</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/laravel-original.svg">Laravel
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/x.svg">MySQL</div>

                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/mongodb-original.svg">MongoDB
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/firebase-original.svg">Firebase
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/nextjs-plain.svg">Next.js</div>
                    </div>
                </div>
                <div class="carrousel-col">
                    <div class="slide-inside">
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/bun-original.svg">Bun</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/swift-original.svg">Swift</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/kotlin-original.svg">Kotlin</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/dart-original.svg">Dart</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/flutter-original.svg">Flutter
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/rails-original-wordmark.svg">Ruby on Rails</div>
                    </div>
                </div>
                <div class="carrousel-col">
                    <div class="slide-inside">
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/sass-original.svg">Sass</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/bootstrap-original.svg">Bootstrap
                        </div>
                        <div class="stack-u hidden"><img loading="lazy"
                                src="/imgs/tech-stack/tailwindcss-original.svg">Tailwind
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/materialui-plain.svg">Material UI
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/figma-original.svg">Figma</div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/framer.svg">Framer</div>
                    </div>
                </div>
                <div class="carrousel-col">
                    <div class="slide-inside">
                        <div class="stack-u hidden"><img loading="lazy"
                                src="/imgs/tech-stack/illustrator-plain.svg">Illustrator
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/photoshop-original.svg">Photoshop
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/aftereffects-original.svg">After
                            Effects
                        </div>
                        <div class="stack-u hidden"><img loading="lazy"
                                src="/imgs/tech-stack/premierepro-original.svg">Premiere
                            Pro
                        </div>
                        <div class="stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/hotjar-logo.svg">Hotjar</div>
                        <div class="pro stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/aws-plain.svg">AWS</div>
                    </div>
                </div>
                <div class="carrousel-col">
                    <div class="slide-inside">
                        <div class="pro stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/azure-original.svg">Azure</div>
                        <div class="pro stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/googlecloud-original.svg">Google
                            Cloud
                        </div>
                        <div class="pro stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/docker-original.svg">Docker</div>
                        <div class="pro stack-u hidden"><img loading="lazy"
                                src="/imgs/tech-stack/kubernetes-original.svg">Kubernetes
                        </div>
                        <div class="pro stack-u hidden"><img loading="lazy" src="/imgs/tech-stack/vercel-original.svg">Vercel</div>
                    </div>
                </div>
            </div>
            <!-- Tech carrousel END -->
        </section>
        <hr>

        <section class="faqs container-1080 hidden">
            <h2 class="heading-2 align-center">Frequently Asked Questions</h2>
            <div class="container-700 accordions-container">
                <div class="accordion hidden">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>1. </span>What kind of tasks can I submit?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>We can help you with any kind of task that you need help with, from building a new feature,
                            to fixing a bug, to refactoring your codebase, to setting up your AWS infrastructure (only
                            available on the Pro plan), and more. If you're not sure if we can help you with your task,
                            just ask us.</p>
                    </div>
                </div>

                <div class="accordion hidden">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>2. </span>Can I build an entire app or MVP with you?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>Yes, we can help you build your entire app or MVP, just submit your tasks and we'll get to
                            work. We are going to slice your project into small tasks and work through them one or two
                            at a time (it depends on your plan).</p>
                    </div>
                </div>

                <div class="accordion hidden">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>3. </span>Can I pause or cancel my subscription at anytime?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>Yes, you can pause or cancel your subscription at anytime, no questions asked. If you pause
                            or cancel your subscription, you will still have access to your account until the end of
                            your billing cycle.</p>
                    </div>
                </div>

                <div class="accordion hidden">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>4. </span>Can I change my subscription plan?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>Yes, you can upgrade or downgrade your subscription plan at anytime.</p>
                    </div>
                </div>

                <div class="accordion hidden d-none">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>5. </span>What if I need more than 2 tasks at a time?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>We offer a custom plan for startups that need more than 2 tasks at a time, please contact us
                            for more information.</p>
                    </div>
                </div>

                <div class="accordion hidden d-none">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>6. </span>Can I ask you to follow my coding standards?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>Yes, we can follow your coding standards, just let us know what they are.</p>
                    </div>
                </div>

                <div class="accordion hidden d-none">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>7. </span>Can I prioritize my tasks?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>Yes, as soon as you pay, you'll have access to our task management system where you can submit and prioritize your tasks.</p>
                    </div>
                </div>

                <div class="accordion hidden d-none">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>8. </span>Can I cancel a task once it's started?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>Yes, you're in control of your tasks, projects, and priorities, you can cancel a task at
                            anytime.</p>
                    </div>
                </div>

                <div class="accordion hidden d-none">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>9. </span>What technologies do you use?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>Our engineers are experienced with the following technologies: React, Next.js, Node.js, Laravel, PHP, Airflow, Java, Express.js, MongoDB, PostgreSQL, MySQL, AWS (Lambdas, Step Functions, etc), Vercel, Render, and more. Our design & UX team has experience in: Figma, Framer, Illustrator, Photoshop, After Effects, Premiere Pro, Hotjar, Google Analytics, Useberry, Maze, UserTesting, Dovetail, and more. If you need help with a technology that's not listed here, just ask us.</p>
                    </div>
                </div>

                <div class="accordion hidden d-none">
                    <div class="acc-button">
                        <h3 class="heading-4"><span>10. </span>Can you sign an NDA?</h3>
                    </div>
                    <div class="acc-panel">
                        <p>Yes, we can sign an NDA, just send it to us.</p>
                    </div>
                </div>
            </div>
            <button id="more-faqs" class="secondary-button small-button">View All FAQs</button>
        </section>
        <hr>
        <?php include 'includes/accolades.php';?>

        <section class="cta-section">
            <div class="grain-texture">
                <div class="cta-content">
                    <div class="hidden container">
                        <h2 class="heading-1 align-center">Affordable all-in-one plans<br>for every start-up</h2>
                        <a class="button large-button secondary-button hidden" href="#subscriptions">↑ Subscribe Today
                            ↑</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- FORCE MAX-WIDTH 100% end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- slick -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="libs/slick/slick/slick.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.stack-carrousel').slick({
            responsive: [{
                infinite: true,
                slidesToScroll: 1,

                    breakpoint: 3000,
                    settings: "unslick",
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 427,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        dots: true,
                    }
                }
            ]
        });
    });
    </script>
    <!-- script for the button more-faqs & toogle-buttons -->
    <script>
    document.getElementById('more-faqs').addEventListener('click', function() {
        let toToggle = document.querySelectorAll('.accordions-container .accordion:nth-child(n+5)');

        toToggle.forEach(function(e) {
            e.classList.toggle('d-none');
        });
        this.classList.add('d-none');
    });

    document.querySelectorAll('.toggle-container button').forEach(button => {
        button.addEventListener('click', () => {
            if(button.classList.contains('inactive-button')){
            document.querySelectorAll('.toggle-container button').forEach(e => {
                e.classList.toggle('active-button');
                e.classList.toggle('inactive-button');
            });
            let starterPrice = document.getElementById('starter').querySelector('h4');
            let proPrice = document.getElementById('pro').querySelector('h4');
            if (starterPrice.textContent === "$4917") {
                starterPrice.textContent = "$3442";
                proPrice.textContent = "$6263";
            } else {
                starterPrice.textContent = "$4917";
                proPrice.textContent = "$8945";
            }
        }
        });
    });
    </script>
</body>

</html>