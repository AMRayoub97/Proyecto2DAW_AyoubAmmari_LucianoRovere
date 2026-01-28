const togglePass = document.getElementById("togglePass");
const password = document.getElementById("password");
togglePass.addEventListener('click', () => {
    //password.type = password.type === "password" ? "text" : "password";
    if(password.type == 'password'){
        const i = document.createElement('i');
        i.innerHTML = `<i class="bi bi-eye-slash-fill"></i>`;
        password.type = 'text';
        togglePass.innerText = ``;
        togglePass.appendChild(i);
    }else{
        const i = document.createElement('i');
        i.innerHTML = `<i class="bi bi-eye-fill"></i>`;
         password.type = 'password';
        togglePass.innerText = ``;
        togglePass.appendChild(i);
    }
});


