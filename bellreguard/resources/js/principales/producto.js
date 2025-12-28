async function getProducto(){
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


getProducto();
