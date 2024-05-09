let estadoAnterior = null;
console.log("scrollfooter.js loaded");

function ajustarPaddingFooter() {
    const cookiesModal = document.getElementById("cookies-modal");
    const footer = document.querySelector('footer');

    if (cookiesModal) {

        const estadoActual = window.getComputedStyle(cookiesModal).display;

        if (estadoActual !== estadoAnterior) {
            footer.style.paddingBottom = estadoActual !== "none" ? "150px" : "20px";
            estadoAnterior = estadoActual;
            console.log("el ultimo" + estadoAnterior);
        }
    }
}

function buttonListener() {
    const modal = document.getElementById("cookies-modal");
    const footer = document.querySelector('footer');

    if (modal) {
        const modalButtons = modal.querySelectorAll("#cookies-modal-buttons button");
        modalButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                footer.style.paddingBottom = "20px";
            });
        });
    }
}

if (window.innerWidth <= 700) {
    window.addEventListener('load', function () {
        buttonListener();
        ajustarPaddingFooter(); // Ajustamos el padding cuando se carga la página
    });
}

