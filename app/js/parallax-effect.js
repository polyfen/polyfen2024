document.addEventListener('DOMContentLoaded', () => {
    const parallaxElement = document.querySelector('.section-cover-about .pattern-background');
    const container = document.querySelector('.section-cover-about .col.click-animation');
    
    if (!parallaxElement || !container) return;

    const handleParallax = () => {
        const rect = container.getBoundingClientRect();
        const viewHeight = window.innerHeight;
        
        // Check if element is in viewport
        if (rect.top < viewHeight && rect.bottom > 0) {
            const elementCenter = rect.top + (rect.height / 2);
            const viewCenter = viewHeight / 2;
            const distanceFromCenter = elementCenter - viewCenter;
            const movement = distanceFromCenter * 0.25; // Increased from 0.1 to 0.25 for more significant movement
            
            parallaxElement.style.transform = `translate(-50%, calc(-50% + ${movement}px))`;
        }
    };

    // Initial position
    handleParallax();
    
    // Update on scroll
    window.addEventListener('scroll', handleParallax, { passive: true });
    
    // Update on resize
    window.addEventListener('resize', handleParallax, { passive: true });
}); 