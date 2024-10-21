/* Current Page */

document.addEventListener("DOMContentLoaded", function () {
    let currentPage = window.location.pathname;
    let navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('current-page');
        }
    })
});

/* Mobile Nav Menu */

const navOpenButton = document.querySelector('.nav-open-button')
const navCloseButton = document.querySelector('.nav-close-button')
const header = document.querySelector('header')

navOpenButton.addEventListener('click', () => {
    header.classList.add('open-nav')
})
navCloseButton.addEventListener('click', () => {
    header.classList.remove('open-nav')
})