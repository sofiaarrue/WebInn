const toggleMenuElement = document.getElementById("toggle-menu");
const toggleMenuElement2 = document.getElementById("toggle-menu2");
const navbarUlElement = document.getElementById("navbar-ul");

toggleMenuElement.addEventListener("click", () => {
    navbarUlElement.classList.toggle("navbar-ul--show");
    toggleMenuElement.classList.toggle("toggle-menu--hidden");
    toggleMenuElement2.classList.toggle("toggle-menu--show");
});

toggleMenuElement2.addEventListener("click", () => {
    navbarUlElement.classList.toggle("navbar-ul--show");
    toggleMenuElement2.classList.toggle("toggle-menu--show");
    toggleMenuElement.classList.toggle("toggle-menu--hidden");
});
