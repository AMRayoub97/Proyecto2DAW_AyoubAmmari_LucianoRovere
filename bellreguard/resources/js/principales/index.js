const ocultarNav = document.getElementById("ocultarNavBtn");
const navIzquierda = document.getElementById("navIzquierda");

ocultarNav.addEventListener("click", () => {
    if(navIzquierda.style.display == "flex"){
        navIzquierda.style.display = "none";
        ocultarNav.textContent = "→";
    }else{
        navIzquierda.style.display = "flex";
        navIzquierda.style.display = "<-";
    }
});
