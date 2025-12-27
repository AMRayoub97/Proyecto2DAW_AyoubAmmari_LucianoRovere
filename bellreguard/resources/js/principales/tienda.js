async function getProductos(){
    const api = await fetch("https://fakestoreapi.com/products");

    const response = await api.json();

    console.log(response);
    const tarjetas = document.querySelector(".tarjetas");
    response.forEach(producto => {
        tarjetas.innerHTML += `
            <article>
            <img src="${producto.image}" alt="fotoProducto">
            <div class="info">
                <h2>${producto.title}</h2>
                <div class="detalle">
                    <strong>${producto.price} $</strong>
                    <small>Cantidad: <strong> ${producto.rating.count}</strong></small>
                </div>
            </div>
            <a href="">Buy</a>
        </article>
        `
    });
}

getProductos();
