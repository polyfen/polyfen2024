document.addEventListener('DOMContentLoaded', () => {
    const leadershipCards = document.querySelectorAll('.leadership-card');
    
    if (!leadershipCards.length) return;

    const handleParallax = (card) => {
        const rect = card.getBoundingClientRect();
        const viewHeight = window.innerHeight;
        
        // Check if element is in viewport
        if (rect.top < viewHeight && rect.bottom > 0) {
            const elementCenter = rect.top + (rect.height / 2);
            const viewCenter = viewHeight / 2;
            const distanceFromCenter = elementCenter - viewCenter;
            
            // Calculate progress from 0 (entering viewport) to 1 (reaching 50% of viewport)
            const progress = Math.min(1, Math.max(0, (viewHeight - rect.top) / (viewHeight / 2)));
            
            // Calculate position between 60px and 16px based on progress
            const startPos = 60;
            const endPos = 16;
            const currentPos = startPos + (endPos - startPos) * progress;
            
            card.style.backgroundPosition = `center ${currentPos}px`;
        }
    };

    // Initial position for each card
    leadershipCards.forEach(card => {
        card.style.backgroundPosition = 'center 60px';
        handleParallax(card);
    });
    
    // Update on scroll
    window.addEventListener('scroll', () => {
        leadershipCards.forEach(handleParallax);
    }, { passive: true });
    
    // Update on resize
    window.addEventListener('resize', () => {
        leadershipCards.forEach(handleParallax);
    }, { passive: true });
}); 