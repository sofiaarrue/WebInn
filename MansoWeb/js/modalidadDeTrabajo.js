const toggleDown = [...document.querySelectorAll("toggle-down")];
const toggleUp = [...document.querySelectorAll("toggle-up")];
const pasosTitle = [...document.querySelectorAll("pasosTitle")];
const pasosP = [...document.querySelectorAll("pasosP")];

toggleDown.forEach(element => ("click", () => {
        pasosP.classList.add("pasosP--show");
        pasosTitle.classList.add("pasosTitle--hidden")
}));

toggleUp.removeEventListener("click", () => {
    pasosP.classList.toggle("pasosP--show");
    pasosTitle.classList.toggle("pasosTitle--hidden")
});
