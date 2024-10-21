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

/* RESPONSIVE CLASS CHANGER */

// Function to change the classes of the elements based on the window width

      // configuration of the elements and their classes
      const elementsToAdjust = [
        {
            selector: '.section-cta h2',
            mobileClass: 'heading-1',
            defaultClass: 'title-2'
        },
        {
            selector: '.section-subscriptions-summary h2',
            mobileClass: 'margin-bottom-2',
            defaultClass: 'margin-bottom-4'
        },
        {
            selector: '.section-build-summary h2',
            mobileClass: 'margin-bottom-2',
            defaultClass: 'margin-bottom-4'
        },
        {
            selector: '.section-differential-value-props h2',
            mobileClass: 'margin-bottom-2',
            defaultClass: 'margin-bottom-4'
        },
        {
            selector: '.section-cover-about h1',
            mobileClass: '',
            defaultClass: 'margin-bottom-4'
        },
        {
            selector: '.section-board-members h2',
            mobileClass: 'margin-bottom-2',
            defaultClass: 'margin-bottom-4'
        },
        {
            selector: '.section-poly-atlas h2',
            mobileClass: 'margin-bottom-2',
            defaultClass: 'margin-bottom-4'
        },
        {
            selector: '.section-poly-cookies h2',
            mobileClass: 'margin-bottom-2',
            defaultClass: 'margin-bottom-4'
        },
        {
            selector: '.section-what-sets-us-apart h2',
            mobileClass: 'margin-bottom-2',
            defaultClass: 'margin-bottom-4'
        },
        {
            selector: '.subscription-plans h1',
            mobileClass: 'heading-1 margin-bottom-2',
            defaultClass: 'title-2 margin-bottom-4'
        },
        // add more objects here
      ];

      // Function
      function adjustClasses() {
        elementsToAdjust.forEach(item => {
            const element = document.querySelector(item.selector);

            if (element) {
                if (window.innerWidth < 959) {
                    element.classList.remove(item.defaultClass);
                    element.classList.add(item.mobileClass);
                } else {
                    element.classList.remove(item.mobileClass);
                    element.classList.add(item.defaultClass);
                }
            }
        });
      }

      // Execute the function when the page loads
      window.addEventListener('load', adjustClasses);

      // Execute the function when the window is resized
      window.addEventListener('resize', adjustClasses);

// End function to change the classes of the elements based on the window width