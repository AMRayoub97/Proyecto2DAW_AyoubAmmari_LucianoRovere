async function mostrarEquipos() {
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

      contenedor.innerHTML += `
        <div class="tarjeta">
          <div class="cont">
            <img src="${logo}" alt="${equipo.name}">
            <strong>${score}.0</strong>
          </div>
          <h3>${equipo.name}</h3>
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

mostrarEquipos();
