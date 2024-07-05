<?php

    /**
     * None of this should be here, in an include.
     * We should eventually refactor everything to
     * use a custom router and make this kind of things tidier
     */
    $env = file_get_contents(__DIR__."/../.env");
    $lines = explode("\n",$env);

    foreach($lines as $line){
        preg_match("/([^#]+)\=(.*)/",$line,$matches);
        if(isset($matches[2])){
            putenv(trim($line));
        }
    } 

    $mStarterLink = getenv('STRIPE_STARTER_MONTHLY_URL');
    $mProLink = getenv('STRIPE_PRO_MONTHLY_URL');
    $qStarterLink = getenv('STRIPE_STARTER_QUARTERLY_URL');
    $qProLink = getenv('STRIPE_PRO_QUARTERLY_URL');


    $starterPriceMonthly = '$4917';
    $starterStripeUrlMonthly = $mStarterLink;
    $starterPriceQuarterly = '$3935';
    $starterStripeUrlQuarterly = $qStarterLink;
    $proPriceMonthly = '$8945';
    $proStripeUrlMonthly = $mProLink;
    $proPriceQuarterly = '$7156';
    $proStripeUrlQuarterly = $qProLink;
?>

<script type="application/javascript">
    window.subscriptionPlans = {
        monthly: {
            starter: {
                price: "<?php echo $starterPriceMonthly; ?>",
                stripeUrl: "<?php echo $starterStripeUrlMonthly; ?>",
            },
            pro: {
                price: "<?php echo $proPriceMonthly; ?>",
                stripeUrl: "<?php echo $proStripeUrlMonthly; ?>",
            },
        },
        quarterly: {
            starter: {
                price: "<?php echo $starterPriceQuarterly; ?>",
                stripeUrl: "<?php echo $starterStripeUrlQuarterly; ?>",
            },
            pro: {
                price: "<?php echo $proPriceQuarterly; ?>",
                stripeUrl: "<?php echo $proStripeUrlQuarterly; ?>",
            },
        }
    };
</script>
<section class="row subscription-plans">
    <div class="row cards-wrapper">
    <div class="card fade-in" id="starter">
        <div class="card-header">
            <h3 class="heading-2">Starter</h3>
            <h4 class="heading-3">$</h4>
            <small class="caption uppercase">/Month</small>
        </div>
        <div class="card-body">
            <ul class="hanging-list checkmark-bullet">
                <li class="bold">1 task at a time</li>
                <li class="bold">2-3 days turnaround</li>
                <li class="bold">Unlimited tasks by Devs,<br>UX, and Designers</li>
                <li>Unlimited revisions</li>
                <li>Unlimited projects</li>
                <li>Pause or cancel any time</li>
            </ul>
            <a data-button-arrow class="button small-button start-today-button" href="#">Start Today</a>
            <a data-button-arrow class="button secondary-button small-button learn-more-button" href="/subscriptions">Learn More</a>
        </div>
    </div>
    <div class="card featured-card fade-in" id="pro">
        <div class="card-header">
            <h3 class="heading-2">Pro</h3>
            <h4 class="heading-3">$</h4>
            <small class="caption uppercase">/Month</small>
            <small class="card-label mini">Popular</small>
        </div>
        <div class="card-body">
            <ul class="hanging-list checkmark-bullet">
                <li class="bold">2 tasks at a time</li>
                <li class="bold">1-2 days turnaround</li>
                <li class="bold">Unlimited tasks by Devs, UX, Designers, and DevOps</li>
                <li class="bold">Priority support</li>
                <li>Unlimited revisions</li>
                <li>Unlimited projects</li>
                <li>Pause or cancel any time</li>
            </ul>
            <a data-button-arrow class="button small-button start-today-button" href="#">Start Today</a>
            <a data-button-arrow class="button secondary-button small-button learn-more-button" href="/subscriptions">Learn More</a>
        </div>
    </div>
    </div>
    <div class="secondary-services fade-in">
        <div class="custom-plan">
            <h3 class="caption uppercase" style="margin-bottom: 8px;">Need More Power?</h3>
            <h4 class="heading-2">Talk to Sales for<br>a Custom Plan</h4>
            <a href="/discovery-call" data-button-icon="book-a-call"
                class="button secondary-button small-button">Book a Call</a>
        </div>
        <hr>
        <div class="start-a-chat">
            <h3 class="caption uppercase" style="margin-bottom: 8px;">Any Questions?</h3>
            <h4 class="heading-2">We're Happy<br>to Help</h4>
            <button data-button-icon="start-a-chat" onclick="$crisp.push(['do', 'chat:open'])"
                class="button secondary-button small-button">Open Chat</button>
        </div>
    </div>
</section>