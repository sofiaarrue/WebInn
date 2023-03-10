
const sliders = [...document.getElementsByClassName("slider__body")];
const arrowNext = document.getElementById("next");
const arrowBefore = document.getElementById("before");
let value;

function changePosition(change){
    const currentElement = Number(document.getElementsByClassName("slider__body--show").detaset.id);

    value = currentElement;
    value+=change;

    if (value === 0 || value == sliders.length+1) {
        value = value === 0 ? sliders.length : 1;
    }

    sliders[currentElemnt-1].classList.toggle("slider__body--show");
    sliders[value-1].classList.toggle("slider__body--show");
}

arrowNext.addEventListener("click", () => changePosition(1));
arrowBefore.addEventListener("click", () => changePosition(-1));