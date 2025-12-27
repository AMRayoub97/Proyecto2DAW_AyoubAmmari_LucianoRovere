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
