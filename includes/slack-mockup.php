<div class="slack-mockup fade-in">
    <img src="imgs/slack-mockup-01.webp" alt="">
    <img src="imgs/slack-mockup-02.webp" alt="">
    <img src="imgs/slack-mockup-03.webp" alt="">
    <img src="imgs/slack-mockup-04.webp" alt="">
</div>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
            const images = document.querySelectorAll('.slack-mockup img');
            let currentImageIndex = 0;

            function showNextImage() {
            images[currentImageIndex].style.display = 'none'; // Hide the current image
            currentImageIndex = (currentImageIndex + 1) % images.length; // Move to the next image
            images[currentImageIndex].style.display = 'block'; // Show the next image
            }

            setInterval(showNextImage, 4000); // Change image every 3 seconds
    });
</script>