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
    <div class="col card card-subscriptions fade-in" id="starter">
        <div class="card-header">
            <h3 class="heading-2 margin-bottom-025">Starter</h3>
            <div class="mobile-row gap-025">
                <h4 class="heading-3">$3,935</h4>
                <small>/Month</small>
            </div>
        </div>
        <div class="card-body flex-column-center">
            <ul class="hanging-list checkmark-bullet">
                <li>Dedicated project manager</li>
                <li>Unlimited projects</li>
                <li>Unlimited revisions</li>
                <li>1 task at a time</li>
                <li>2-3 days turnaround</li>
                <li>Unlimited tasks by Devs,<br>UX, and Designers</li>
            </ul>
            <!-- "Learn More" is shown in .body-home and "Start Today" in .body-subscriptions -->
            <a data-button-arrow class="button start-today-button" href="#">Start Today</a>
            <a data-button-arrow class="button secondary-button learn-more-button" href="/subscriptions#learn-more">Learn More</a>
        </div>
    </div>
    <div class="col card card-subscriptions featured-card fade-in" id="pro">
        <div class="card-header">
            <h3 class="heading-2 margin-bottom-025">Pro</h3>
            <div class="mobile-row gap-025">
                <h4 class="heading-3">$7,156</h4>
                <small>/Month</small>
            </div>
            <small class="label mini">★ Most Popular</small>
        </div>
        <div class="card-body flex-column-center">
            <ul class="hanging-list checkmark-bullet">
                <li>Dedicated project manager</li>
                <li>Unlimited projects</li>
                <li>Unlimited revisions</li>
                <li>2 tasks at a time</li>
                <li>1-2 days turnaround</li>
                <li>Unlimited tasks by Devs, UX,<br>Designers, and DevOps</li>
                <li>Priority support</li>
            </ul>
            <!-- "Learn More" is shown in .body-home and "Start Today" in .body-subscriptions -->
            <a data-button-arrow class="button start-today-button" href="#">Start Today</a>
            <a data-button-arrow class="button secondary-button learn-more-button" href="/subscriptions#learn-more">Learn More</a>
        </div>
    </div>
    <div class="col card card-subscriptions fade-in" id="pro">
        <div class="card-header">
            <h3 class="heading-2 margin-bottom-05">Custom<br>Plan</h3>
        </div>
        <div class="card-body flex-column-center">   
            <ul class="hanging-list checkmark-bullet">
                <li>Dedicated project manager</li>
                <li>Unlimited projects</li>
                <li>Unlimited revisions</li>
                <li>Flexible number of tasks<br>based on your needs</li>
                <li>Flexible turnaround times</li>
                <li>Dedicated team of Devs, UX,<br>Designers, QA, and DevOps</li>
                <li>Priority support tailored<br>to your requirements</li>
            </ul>
            <a data-button-arrow class="button photo-button secondary-button" href="/discovery-call">Book Call</a>
        </div>
    </div>
</div>
<div class="row subscriptions-reasurance gap-1 margin-top-2">
    <div class="mobile-row gap-025 fade-in" style="align-items: center;">
        <img src="imgs/icons/lock-simple.svg" height="24px">
        <small class="mini align-center">Secure Payment with Stripe</small>
    </div>
    <div class="mobile-row gap-025 fade-in" style="align-items: center;">
        <img src="imgs/icons/shield-check.svg" height="24px">
        <small class="mini align-center">No Hidden Fees</small>
    </div>
    <div class="mobile-row gap-025 fade-in" style="align-items: center;">
        <img src="imgs/icons/pause-circle.svg" height="24px">
        <small class="mini align-center">Pause or Cancel Any Time</small>
    </div>
</div>