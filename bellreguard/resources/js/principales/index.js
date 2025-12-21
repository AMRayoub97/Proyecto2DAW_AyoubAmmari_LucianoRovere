document.addEventListener('DOMContentLoaded', function() {
    const carruseles = document.querySelectorAll('.destac, #noticias');

    carruseles.forEach(wrapper => {
        wrapper.addEventListener('click', function(e) {
            // Buscamos si el scroll lo tiene un hijo o el propio contenedor
            const scrollTarget = wrapper.querySelector('#destacados') || wrapper;

            const scrollAmount = scrollTarget.clientWidth;
            const rect = wrapper.getBoundingClientRect();
            const clickX = e.clientX - rect.left;

            if (clickX < rect.width * 0.25) {
                scrollTarget.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            }
            else if (clickX > rect.width * 0.75) {
                scrollTarget.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        });
    });
});
