// Toggle the visibility of password
function togglePassword() {
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#passInput"); 
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    // toggle the icon
    togglePassword.classList.toggle("bi-eye");
};
