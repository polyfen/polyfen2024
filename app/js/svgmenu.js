console.log("soySVGmenu")

document.addEventListener('DOMContentLoaded', function () {
    const logoContainer = document.getElementById('logo');
    const contextMenu = document.getElementById('context-menu');
    const copyLogo = document.getElementById('copylogo');

    // Función para mostrar el menú contextual
    function showContextMenu(event) {
        event.preventDefault();
        const menuWidth = contextMenu.offsetWidth;
        const menuHeight = contextMenu.offsetHeight;
        const windowWidth = window.innerWidth;
        const windowHeight = window.innerHeight;

        // Ajustar la posición para que el menú no se salga de la ventana
        let menuX = event.pageX - 0;
        let menuY = event.pageY - 30;

        if (menuX + menuWidth > windowWidth) {
            menuX -= menuWidth;
        }

        if (menuY + menuHeight > windowHeight) {
            menuY -= menuHeight;
        }

        contextMenu.style.top = `${menuY}px`;
        contextMenu.style.left = `${menuX}px`;
        contextMenu.classList.remove('d-none');
    }

    // Función para ocultar el menú contextual
    function hideContextMenu() {
        contextMenu.classList.add('d-none');
    }

    // Mostrar el menú contextual al hacer clic derecho en el logo-container
    logoContainer.addEventListener('contextmenu', showContextMenu);

    // Ocultar el menú contextual al hacer clic fuera de él
    document.addEventListener('click', function (event) {
        if (!contextMenu.contains(event.target)) {
            hideContextMenu();
        }
    });

    // Ocultar el menú contextual al presionar la tecla Escape
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            hideContextMenu();
        }
    });

    // Copiar el contenido del logo SVG al portapapeles
    copyLogo.addEventListener('click', function (event) {
        event.preventDefault();
        // Obtener el contenido SVG que quieres copiar (reemplaza este texto con tu SVG)
        const svgContent = "<svg>...</svg>";
        
        // Copiar el contenido SVG al portapapeles
        navigator.clipboard.writeText(svgContent)
        .then(() => {
            alert('Logo SVG copied to clipboard!');
        })
        .catch((error) => {
            console.error('Failed to copy logo SVG:', error);
        });
    });
});
