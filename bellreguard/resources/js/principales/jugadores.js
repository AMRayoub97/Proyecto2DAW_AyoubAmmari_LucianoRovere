document.addEventListener('DOMContentLoaded', () => {
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
});

/*async function mostrarJugadores() {
  try {
    const res = await fetch(
      "https://v1.basketball.api-sports.io/players?season=2022&team=155",
      {
        method: "GET",
        headers: {
          "x-apisports-key": "62bc4d7a4d1ea60867a7dc66f27bd7c1",
          "Accept": "application/json"
        }
      }
    );

    if (!res.ok) {
      throw new Error("Error HTTPS connection: " + res.status);
    }

    const data = await res.json();
    const jugadores = data.response;

    if (!jugadores || jugadores.length === 0) {
      throw new Error("No hay data");
    }

    const tarjetas = document.querySelector('.tarjetas');

    jugadores.forEach(jugadore => {
      // Intentar obtener foto desde NBA Headshot API
      /*let foto = '/images/pistap.jpg'; // fallback por defecto

      // Separar nombre en nombre y apellido (para NBA Headshot)
      const nombres = jugadore.name.split(" ");
      if (nombres.length >= 2) {
        const firstName = nombres[0].toLowerCase();
        const lastName = nombres.slice(1).join(" ").toLowerCase();
        foto = `https://nba-players.herokuapp.com/players/${lastName}/${firstName}`;
      }*//*

        const foto = '/images/pistap.jpg';
      tarjetas.innerHTML += `<div class="tarjeta">
        <div class="contenido" style="background-image: url('${foto}')">
          <table>
            <tr>
              <th colspan="2">${jugadore.name}</th>
            </tr>
            <tr>
              <th>Altura</th>
              <th>0.0</th>
            </tr>
            <tr>
              <th>Peso</th>
              <th>0 Kg</th>
            </tr>
            <tr>
              <th>Edad</th>
              <th>${jugadore.age || '0 años'}</th>
            </tr>
            <tr>
              <th>Experiencia</th>
              <th>0 años</th>
            </tr>
            <tr>
              <th>País</th>
              <th>${jugadore.country || 'N/A'}</th>
            </tr>
          </table>
          <strong>${jugadore.position || '-'}</strong>
        </div>
        <div class="btnsJugador">
          <input type="submit" value="Ver Perfil">
          <a href="#">⭐</a>
        </div>
      </div>`;
    });

  } catch (error) {
    console.log("error:", error.message);
  }
}

mostrarJugadores();*/
