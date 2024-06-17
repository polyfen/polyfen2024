const observer = new IntersectionObserver(entries => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
});

/* const observer = new IntersectionObserver(entries => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        } else {
            entry.target.classList.remove('visible');
        }
    });
});
 */
const fadeinElements = document.querySelectorAll('.fade-in');
fadeinElements.forEach((el) => observer.observe(el));


//version for header
/*
const observerHeader = new IntersectionObserver(entries => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
});

const fadeinHeader = document.querySelectorAll('.fade-in-header');
fadeinHeader.forEach((el) => observerHeader.observe(el));
 */