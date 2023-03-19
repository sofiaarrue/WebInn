const toggleDown = document.getElementById("toggle-down");
const pasosTitle = document.getElementById("pasosTitle");
const pasosP = document.getElementById("pasosP");

toggleDown.addEventListener("click", () => {
    pasosP.classList.toggle("pasosP--show");
    pasosTitle.classList.toggle("pasosTitle--hidden")
});