document.addEventListener('DOMContentLoaded', () => {

    const toggle = document.getElementById('toggleFiltro');
    const menu = document.getElementById('menuFiltro');

    toggle.addEventListener('click', () => {
        menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', (e) => {
        if (!toggle.contains(e.target) && !menu.contains(e.target)) {
            menu.style.display = 'none';
        }
    });

    const botonesEditar = document.querySelectorAll('.listaEditar');

    botonesEditar.forEach(boton => {
        boton.addEventListener('click', () => {

            const tarjeta = boton.closest('.tarjeta');
            const listaUl = tarjeta.querySelector('.listaUl');

            if (getComputedStyle(listaUl).display === 'none') {
                listaUl.style.display = 'flex';
            } else {
                listaUl.style.display = 'none';
            }
        });
    });

    const modal = document.getElementById('editModal');
    const iframe = document.getElementById('editIframe');
    const closeBtn = document.getElementById('closeModal');

    document.querySelectorAll('.openEdit').forEach(btn => {
        btn.addEventListener('click', () => {
            iframe.src = btn.dataset.url;
            modal.classList.remove('hidden');
        });
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
        iframe.src = '';
    });

    window.addEventListener('message', (event) => {
    if (event.data === 'closeEditModal') {
        document.getElementById('editModal').classList.add('hidden');
        document.getElementById('editIframe').src = '';
        location.reload(); // اختياري: باش يتحدث الداتا
    }
});




        const busqueda = document.getElementById("busqueda");
        const sug_busqueda = document.getElementById("sug_busqueda");

        busqueda.addEventListener('keyup', async (e) =>{
            e.preventDefault();

            const value = busqueda.value;

            if (value.length === 0) {
                sug_busqueda.innerHTML = "";
                return;
            }

            try {
                const res = await fetch(`http://localhost/api/equiposAPi?nom=${value}`);

                if (!res.ok) {
                    throw new Error("error fetch equipos");
                }

                const data = await res.json();

                sug_busqueda.innerHTML = "";

                data.forEach(element => {
                    const li = document.createElement("li");
                    li.textContent = element.nombre;
                    sug_busqueda.appendChild(li);
                });

            } catch (error) {
                console.error(error);
            }

        });
});

/*async function mostrarEquipos() {
  try {
    const res = await fetch(
      "https://v1.basketball.api-sports.io/teams?league=5&season=2023",
      {
        method: "GET",
        headers: {
          "x-apisports-key": "62bc4d7a4d1ea60867a7dc66f27bd7c1",
          "Accept": "application/json"
        }
      }
    );

    if(!res.ok){
      throw new Error("Error HTTPS connection: " + res.status);
    }

    const data = await res.json();
    const equipos = data.response;

    if(!equipos || equipos.length === 0){
      throw new Error("No hay data");
    }

    const contenedor = document.querySelector('.tarjetas');

    equipos.forEach(equipo => {
      const logo = equipo.logo || '/images/pistap.jpg';
      const score = Math.floor(Math.random() * 11); // ejemplo score aleatorio 0-10

      const nombre = equipo.name.trim();
      const nombreLimpio = nombre.endsWith('W') ? nombre.slice(0, -1) : nombre;
      contenedor.innerHTML += `
        <div class="tarjeta">
          <div class="cont">
            <img src="${logo}" alt="${equipo.name}">
            <strong>${score}.0</strong>
          </div>
          <h3>${nombreLimpio}</h3>
          <div class="btnsJugador">
            <input type="submit" value="Ver Perfil">
            <a href="#">⭐</a>
          </div>
        </div>
      `;
    });

  } catch (error) {
    console.log("error:", error.message);
  }
}

mostrarEquipos();*/
