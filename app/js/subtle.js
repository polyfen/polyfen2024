const observer = new IntersectionObserver(entries => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const fadeinElements = document.querySelectorAll('.fade-in');
fadeinElements.forEach((el) => observer.observe(el));


//version for header

const observerHeader = new IntersectionObserver(entries => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});

const fadeinHeader = document.querySelectorAll('.fade-in-header');
fadeinHeader.forEach((el) => observerHeader.observe(el));
