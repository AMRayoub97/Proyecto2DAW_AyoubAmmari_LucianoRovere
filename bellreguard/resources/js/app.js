import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

document.addEventListener('DOMContentLoaded', () => {
    const ocultarNav = document.getElementById("ocultarNavBtn");
    const navIzquierda = document.getElementById("navIzquierda");
    const fotoPerfil = document.getElementById("fotoPerfil");
    const perfilLista = document.getElementById("perfilLista");

    if (ocultarNav && navIzquierda) {
        navIzquierda.classList.remove('oculto');
        ocultarNav.value = "←";

        ocultarNav.addEventListener("click", () => {
            navIzquierda.classList.toggle('oculto');
            ocultarNav.value = navIzquierda.classList.contains('oculto') ? "→" : "←";
        });
    }

    if (fotoPerfil && perfilLista) {
        fotoPerfil.addEventListener('click', (event) => {
        event.stopPropagation();

        if (perfilLista.style.display === 'flex') {
            perfilLista.style.display = 'none';
        } else {
            perfilLista.style.display = 'flex';
        }
    });

    // Cerrar el menú si haces clic fuera de él
    document.addEventListener('click', () => {
        perfilLista.style.display = 'none';
    });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('accept-cookies');
    const rejectBtn = document.getElementById('reject-cookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookieBanner.classList.add('show');
        }, 200);
    }

    function closeBanner(value) {
        localStorage.setItem('cookiesAccepted', value);
        cookieBanner.classList.remove('show');
        cookieBanner.classList.add('hide');
    }

    acceptBtn.addEventListener('click', () => closeBanner('true'));
    rejectBtn.addEventListener('click', () => closeBanner('false'));
});
