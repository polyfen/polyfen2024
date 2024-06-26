document.addEventListener('DOMContentLoaded', function () {
    const logo = document.getElementById('logo');
    const contextMenu = document.getElementById('context-menu');
    const copyLogo = document.getElementById('copylogo');
    let confirmationTimeout;

    // Función para mostrar el menú contextual
    const showContextMenu = (event) => {
        event.preventDefault();
        const menuWidth = contextMenu.offsetWidth;
        const menuHeight = contextMenu.offsetHeight;
        const windowWidth = window.innerWidth;
        const windowHeight = window.innerHeight;

        // Ajustar la posición para que el menú no se salga de la ventana
        let menuX = event.pageX - 0;
        let menuY = event.pageY - 62;

        if (menuX + menuWidth > windowWidth) { menuX -= menuWidth;}
        if (menuY + menuHeight > windowHeight) { menuY -= menuHeight;}

        contextMenu.style.top = `${menuY}px`;
        contextMenu.style.left = `${menuX}px`;
        contextMenu.classList.remove('d-none');
    }

    // Función para ocultar el menú contextual
    const hideContextMenu = () => { contextMenu.classList.add('d-none');}

    // Mostrar el menú contextual al hacer clic derecho en el logo-container
    logo.addEventListener('contextmenu', showContextMenu);

    // Ocultar el menú contextual al hacer clic fuera de él
    document.addEventListener('click', function (event) {
        if (!contextMenu.contains(event.target)) {
            hideContextMenu();
        }
    });
    // Ocultar el menú contextual al presionar la tecla Escape
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            hideContextMenu();
        }
    });

    // Función para mostrar el mensaje de confirmación
    const confirmation = (message) => {
        const confirmElement = document.getElementById('confirm-svg');
        confirmElement.textContent = message;
        confirmElement.classList.add('anime');
        clearTimeout(confirmationTimeout);

        confirmationTimeout = setTimeout(() => {
            confirmElement.classList.remove('anime');
        }, 999);
    }

    // Copiar el contenido del logo SVG al portapapeles
    copyLogo.addEventListener('click', (event) => {
        event.preventDefault();
        fetch('/imgs/polyfen-logo.svg')
            .then(response => response.text())
            .then(svgContent => {
                // Copiar el contenido SVG al portapapeles
                navigator.clipboard.writeText(svgContent)
                    .then(() => {
                        confirmation('Logo SVG copied to clipboard!');
                    })
                    .catch((error) => {
                        console.error('Failed to copy logo SVG:', error);
                    });
            })
            .catch(error => {
                console.error('Failed to fetch logo SVG:', error);
            });
    });
});
