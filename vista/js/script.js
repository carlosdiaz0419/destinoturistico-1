// Resalta el enlace activo del menú
document.addEventListener("DOMContentLoaded", function() {
    const currentLocation = location.href;
    const menuItems = document.querySelectorAll("nav ul li a");

    menuItems.forEach(item => {
        if (item.href === currentLocation) {
            item.classList.add("active");
        }
    });
});

// Mostrar y ocultar información de los destinos turísticos
document.addEventListener("DOMContentLoaded", function() {
    const destinos = document.querySelectorAll(".destino");

    destinos.forEach(destino => {
        const button = document.createElement("button");
        button.textContent = "Mostrar más";
        destino.appendChild(button);

        const description = destino.querySelector("p");
        description.style.display = "none";  // Oculta la descripción inicialmente

        button.addEventListener("click", function() {
            if (description.style.display === "none") {
                description.style.display = "block";
                button.textContent = "Mostrar menos";
            } else {
                description.style.display = "none";
                button.textContent = "Mostrar más";
            }
        });
    });
});

// Validación básica de formularios
function validateForm(form) {
    const username = form.querySelector("input[name='username']").value.trim();
    const password = form.querySelector("input[name='password']").value.trim();

    if (username === "" || password === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }
    return true;
