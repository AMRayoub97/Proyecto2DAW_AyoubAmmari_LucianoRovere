const togglePass = document.getElementById("togglePass");
const password = document.getElementById("password");
togglePass.addEventListener('click', () => {
    password.type = password.type === "password" ? "text" : "password";
});


