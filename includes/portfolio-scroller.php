<div class="activity-box" aria-label="Portfolio">
    <div class="scroller fade-in" data-direction="right" data-speed="slow">
        <div class="scroller__inner">
            <?php
            $images = [
                "imgs/design-thumbnails/metas-investments.webp",
                "imgs/design-thumbnails/hemingway.webp",
                "imgs/design-thumbnails/prepkanga.webp",
                "imgs/design-thumbnails/homestead-coffee-roasters.webp",
                "imgs/design-thumbnails/altirand.webp",
                "imgs/design-thumbnails/photographer.webp",
                "imgs/design-thumbnails/lion-risk-management.webp",
                "imgs/design-thumbnails/alternation.webp",
                "imgs/design-thumbnails/hud.webp"
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
                "imgs/design-thumbnails/alchemy.webp",
                "imgs/design-thumbnails/mandala.webp",
                "imgs/design-thumbnails/mare.webp",
                "imgs/design-thumbnails/magusvalge.webp",
                "imgs/design-thumbnails/lightning-bolt.webp",
                "imgs/design-thumbnails/podcasttoapp.webp",
                "imgs/design-thumbnails/domingo.webp",
                "imgs/design-thumbnails/villa-terezija.webp"
            ];
            shuffle($images);
            foreach ($images as $image) {
                echo '<img alt="" src="' . $image . '">';
            }
            ?>
        </div>
    </div>
</div>