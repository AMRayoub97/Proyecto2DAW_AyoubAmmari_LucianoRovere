async function getPartidos(){
    const destac = document.getElementById("destacados");

    try{

        const res = await fetch("https://apiv2.allsportsapi.com/basketball/?met=Livescore&APIkey=e84f1020581092239d2cee1778dab7a70c795a91bffc14a80d5a063136697ee8");

        if(!res.ok){
            throw new Error("Error fetch API");
        }

        const data = await res.json();

        console.log(data.result);

        const resultados = data.result;

        resultados.forEach(partido => {

            destac.innerHTML += `
                    <article>
                        <div class="equipoDestacado">
                            <strong>${partido.event_home_team}</strong>
                             <a href="#">
                            <img src="${partido.event_home_team_logo}" alt=""></a>
                        </div>

                        <div class="resultadoDesatacados">
                            <strong>${partido.event_date}</strong>
                            <h3>${partido.event_final_result}</h3>
                            <a href="#">Highlights</a>
                            <strong>${partido.event_status}</strong>
                        </div>

                        <div class="equipoDestacado">
                        <strong>${partido.event_away_team} </strong>
                            <a href="#">
                            <img src="${partido.event_away_team_logo}" alt=""></a>
                        </div>

                    </article>
                    `;


        })

    }catch(error){
        console.log("Error: "+ error);
    }


}
document.addEventListener('DOMContentLoaded', function() {

    getPartidos();

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
