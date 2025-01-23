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
                <h1 class="title-1 align-center">Transform Ideas<br>into Impact</h1>
                <p class="align-center">Software & creative studio empowering startups and scaleups with design and engineering solutions since 2018.</p>
                <a class="button large-button cta-button photo-button margin-bottom-05" href="/discovery-call">Book Call</a>
                <a data-button-arrow-down class="button large-button secondary-button" href="#learn-more">Learn More</a>
            </div>
            <div class="pattern-background">
            </div>
        </section>
        <!---------- CLIENTS-LOGO-SCROLLER.php start ---------->   
        <?php include 'includes/clients-logo-scroller.php';?>
        <!---------- CLIENTS-LOGO-SCROLLER.php end ---------->
        <hr id="learn-more">
        <section class="section-ondemand-summary container-1080 margin-bottom-3 fade-in">
            <h2 class="heading-1 align-center">Your OnDemand<br>Design & Dev Team</h2>
            <div class="card fade-in">
                <div class="row">
                    <div class="col fade-in">
                        <div class="video-container">
                                <video autoplay muted loop >
                                        <source src="videos/ondemand.webm" type="video/webm">
                                        <source src="videos/ondemand.mp4" type="video/mp4">
                                </video>
                        </div>     
                    </div>
                    <div class="col">
                        <div >
                            <h3 class="heading-2 align-center margin-top-2 margin-bottom-1 fade-in"><span class="color-gradient">x1</span> Active Talent</h3>
                            <h3 class="heading-2 align-center fade-in margin-bottom-1"><span class="color-gradient price-value">$6,490<span class="mini">/month</span></span></h3>
                            <div class="slider-container fade-in">
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
                        </div>
                        <ul class="fade-in checkmark-bullet half-spaced-list hanging-list">
                                <li>Get work done by Designers, UX, Devs, DevOps, and QA</li>
                                <li>Designated project manager that organizes your workload</li>
                                <li>Real time, priority support on dedicated Slack channel</li>
                                <li>Scale, pause, or cancel any time</li>
                        </ul>
                        <a class="button secondary-button margin-auto margin-bottom-1" href="/ondemand">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="section-services-breakdown">
            <h2 class="heading-1 align-center">Supercharge your Team<br>with Staff Augmentation</h2>
            <div class="container-1080">
                <div class="row margin-bottom-05">
                        <div class="col card fade-in">
                                <div class="row">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/pencil-and-ruler.svg">
                                        </div>
                                        <h3 class="heading-4">Design</h3>
                                </div>
                                <ul class="hanging-list">
                                        <li>UX/UI designer</li>
                                        <li>Visual designer</li>
                                        <li>Motion graphics</li>
                                        <li>Design systems specialist</li>
                                        <li>More...</li>
                                </ul>
                                <a class="button secondary-button small-button margin-auto" href="/staff-augmentation">Learn More</a>
                        </div>
                        <div class="col card fade-in">
                                <div class="row">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/cpu.svg">
                                        </div>
                                        <h3 class="heading-4">Engineering</h3>
                                </div>
                                <ul class="hanging-list">
                                        <li>Front-end</li>
                                        <li>Back-end</li>
                                        <li>Full-stack</li>
                                        <li>iOS</li>
                                        <li>More...</li>
                                </ul>
                                <a class="button secondary-button small-button margin-auto" href="/staff-augmentation">Learn More</a>
                        </div>
                        <div class="col card fade-in">
                                <div class="row">
                                        <div class="icon-container">
                                                <img src="/imgs/icons/chart-bar.svg">
                                        </div>
                                        <h3 class="heading-4">Management</h3>
                                </div>
                                <ul class="hanging-list">
                                        <li>Tech lead</li>
                                        <li>Business analyst</li>
                                        <li>Product owner</li>
                                        <li>Product manager</li>
                                        <li>More...</li>
                                </ul>
                                <a class="button secondary-button small-button margin-auto" href="/staff-augmentation">Learn More</a>
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
                        <img src="/imgs/icons/crown-simple.svg">
                    </div>
                    <h3 class="margin-bottom-1">White Glove<br>Customer Service</h3>
                    <p>Dedicated support from results-<br>driven project managers.</p>
                </div>
                <div class="col card fade-in">
                    <div class="icon-container">
                        <img src="/imgs/icons/resize.svg">
                    </div>
                    <h3 class="margin-bottom-1">Scalable Solutions<br>On Demand</h3>
                    <p>Flexible services for startups, scaleups, and everything in between.</p>
                </div>
            </div>
        </section>
        <hr>
        <section class="section-testimonials container-1080">
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