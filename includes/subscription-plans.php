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


    $starterPriceMonthly = '$4,917';
    $starterStripeUrlMonthly = $mStarterLink;
    $starterPriceQuarterly = '$3,935';
    $starterStripeUrlQuarterly = $qStarterLink;
    $proPriceMonthly = '$8,945';
    $proStripeUrlMonthly = $mProLink;
    $proPriceQuarterly = '$7,156';
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
<div class="row">
    <div class="col card fade-in" id="starter">
        <div class="card-header">
            <h3 class="heading-2">Starter</h3>
            <h4 class="heading-3">$</h4>
            <small class="caption uppercase font-weight-400 color-body-text">/Month</small>
        </div>
        <div class="card-body">
            <ul class="hanging-list checkmark-bullet">
                <li class="bold">1 task at a time</li>
                <li class="bold">2-3 days turnaround</li>
                <li class="bold">Unlimited tasks by Devs,<br>UX, and Designers</li>
                <li>Unlimited revisions</li>
                <li>Unlimited projects</li>
                <li>Pause or cancel anytime</li>
            </ul>
            <a data-button-arrow class="button start-today-button" href="#">Start Today</a>
            <a data-button-arrow class="button secondary-button small-button learn-more-button" href="/subscriptions#learn-more">Learn More</a>
        </div>
    </div>
    <div class="col card featured-card fade-in" id="pro">
        <div class="card-header">
            <h3 class="heading-2">Pro</h3>
            <h4 class="heading-3">$</h4>
            <small class="caption uppercase font-weight-400 color-body-text">/Month</small>
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
                <li>Pause or cancel anytime</li>
            </ul>
            <a data-button-arrow class="button start-today-button" href="#">Start Today</a>
            <a data-button-arrow class="button secondary-button small-button learn-more-button" href="/subscriptions#learn-more">Learn More</a>
        </div>
    </div>
    <div class="col card featured-card fade-in" id="pro">
        <div class="card-header">
            <h3 class="heading-2">Pro</h3>
            <h4 class="heading-3">$</h4>
            <small class="caption uppercase font-weight-400 color-body-text">/Month</small>
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
                <li>Pause or cancel anytime</li>
            </ul>
            <a data-button-arrow class="button start-today-button" href="#">Start Today</a>
            <a data-button-arrow class="button secondary-button small-button learn-more-button" href="/subscriptions#learn-more">Learn More</a>
        </div>
    </div>
</div>