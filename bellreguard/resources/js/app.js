import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const ocultarNav = document.getElementById("ocultarNavBtn");
    const navIzquierda = document.getElementById("navIzquierda");

    if (ocultarNav && navIzquierda) {
        // Set initial state
        navIzquierda.classList.remove('oculto');
        ocultarNav.value = "←";

        ocultarNav.addEventListener("click", () => {
            navIzquierda.classList.toggle('oculto');
            ocultarNav.value = navIzquierda.classList.contains('oculto') ? "←" : "→";
        });
    }
});
