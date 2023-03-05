const toggleMenuElement = document.getElementById("toggle-menu");
const navbarUlElement = document.getElementById("navbar-ul");

toggleMenuElement.addEventListener("click", () => {
    navbarUlElement.classList.toggle("navbar-ul--show");
});