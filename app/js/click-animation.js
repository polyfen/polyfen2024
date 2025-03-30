document.addEventListener('DOMContentLoaded', function() {
    // Specifically target the pattern background within the click animation
    const patternBackground = document.querySelector('.click-animation .pattern-background');
    const colors = [
        'radial-gradient(circle, #FF0099 0%, #722FFF 100%)',
        'radial-gradient(circle, #00FF87 0%, #00A3FF 100%)',
        'radial-gradient(circle, #FF3D00 0%, #FF0099 100%)',
        'radial-gradient(circle, #00F1FF 0%, #0040FF 100%)',
        'radial-gradient(circle, #FF9100 0%, #FF0000 100%)',
        'radial-gradient(circle, #7000FF 0%, #FF00FF 100%)',
        'radial-gradient(circle, #00FF00 0%, #00FFE0 100%)',
        'radial-gradient(circle, #FF0000 0%, #FF00AA 100%)'
    ];
    let currentColorIndex = 0;

    // Function to change the background color
    function changeBackgroundColor() {
        currentColorIndex = (currentColorIndex + 1) % colors.length;
        if (patternBackground) {
            patternBackground.style.backgroundImage = colors[currentColorIndex];
            patternBackground.style.boxShadow = '0 0 30px 5px var(--accent-color)';
            
            setTimeout(() => {
                patternBackground.style.boxShadow = '0 0 15px 0px var(--accent-color)';
            }, 150);
        }
    }

    // Add animation event listener to the cursor image
    const cursorImage = document.querySelector('.click-animation .cursor-image');
    if (cursorImage) {
        cursorImage.addEventListener('animationiteration', changeBackgroundColor);
    }
}); 