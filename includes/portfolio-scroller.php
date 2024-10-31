<div class="activity-box" aria-label="Portfolio">
    <div class="scroller fade-in" data-direction="right" data-speed="slow">
        <div class="scroller__inner">
            <?php
            $images = [
                "imgs/activity-cads/lion-risk-management-logo.png",
                "imgs/activity-cads/metas-investments-business-cards.webp",
                "imgs/activity-cads/hemingway-distillery-whiskey-bottle.webp",
                "imgs/activity-cads/prepkanga-stationary.webp",
                "imgs/activity-cads/the-barn-packaging2.webp",
                "imgs/activity-cads/alternation-logo.png",
                "imgs/activity-cads/health-and-travel-stationary.webp",
                "imgs/activity-cads/altirand-ios-app-icon.webp",
                "imgs/activity-cads/photographers-website.webp"
            ];
            shuffle($images);
            foreach ($images as $image) {
                echo '<img alt="" src="' . $image . '">';
            }
            ?>
        </div>
    </div>
    <div class="scroller fade-in" data-direction="right" data-speed="slow">
        <div class="scroller__inner">
            <?php
            $images = [
                "imgs/activity-cads/alchemy-container.png",
                "imgs/activity-cads/podcasttoapp-app.png",
                "imgs/activity-cads/mandala.webp",
                "imgs/activity-cads/villa-terezija-totebag.png",
                "imgs/activity-cads/magusvalge-menu.webp",
                "imgs/activity-cads/lightning-bolt-logo.png",
                "imgs/activity-cads/soma-iphone-app.webp",
                "imgs/activity-cads/domingo-sign.png"
            ];
            shuffle($images);
            foreach ($images as $image) {
                echo '<img alt="" src="' . $image . '">';
            }
            ?>
        </div>
    </div>
</div>