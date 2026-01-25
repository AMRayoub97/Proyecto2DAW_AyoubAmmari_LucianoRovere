import Swal from 'sweetalert2';

const abrirModal = document.getElementById('abrirModal');
const cerrarModal = document.getElementById('cerrarModal');
const modal = document.getElementById('modalProducto');

const listaTalla = document.getElementById('listaTalla');
const tallaSeleccionada = document.getElementById('tallaSeleccionada');
const inputTalla = document.getElementById('inputTalla');

const form = document.getElementById('formCompraProducto');

/* ABRIR MODAL */
abrirModal.addEventListener('click', e => {
    e.preventDefault();

    const talla = listaTalla.value;
    tallaSeleccionada.textContent = talla;
    inputTalla.value = talla;

    modal.classList.add('activo');
});

cerrarModal.addEventListener('click', () => {
    modal.classList.remove('activo');
})

modal.addEventListener('click', e => {
    if (e.target === modal) {
        modal.classList.remove('activo');
    }
});

/* SWEET ALERT  */
form.addEventListener('submit', e => {
    e.preventDefault();

    //  Cerrar modal
    modal.classList.remove('activo');

    setTimeout(() => {
        Swal.fire({
            icon: 'success',
            title: '¡Solicitud enviada!',
            text: 'Se abrirá tu cliente de correo para completar el envío.',
            confirmButtonColor: '#7a0000',
            confirmButtonText: 'Aceptar'
        }).then(() => {
            form.submit();
        });
    }, 150);
});




/*async function getProducto(){
    try{

        const res = await fetch(`https://fakestoreapi.com/products/${id_producto}`);

        const producto = await res.json();
        console.log(producto);

        if(!producto){
            throw new Error('no se puede cargar el producto');
        }

        const contenido = document.querySelector('.contenido');

        var estrellas = '';
        for(let i =0; i < producto.rating.rate; i++){
            estrellas += '⭐';
        }

        //4.5 ⭐

        contenido.innerHTML = `
        <section class="producto-image">
            <img src="${producto.image}" alt="Imagen del producto">
        </section>
        <aside class="info-producto">
            <div class="titulo">
                <h1>${producto.title}</h1>
                <strong>${estrellas}</strong>
            </div>
            <hr>

            <p>${producto.description}</p>
            <strong>${producto.category}</strong>

            <div class="categoria">
                <strong>Cantidad: ${producto.rating.count} disponibles</strong>
                <strong>${producto.price} $</strong>
            </div>
            <a href="#">COMPRAR AHORA</a>
        </aside>
        `;

    }catch(error){
        console.log('Error: '+ error)
    }
}


getProducto();*/
