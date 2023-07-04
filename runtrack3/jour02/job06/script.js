let konamiCode = ["ArrowUp", "ArrowUp", "ArrowDown", "ArrowDown", 
"ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight", "b", "a"];
let konamiIndex = 0;

function checkKonamiCode(event) {
    if (event.key === konamiCode[konamiIndex]) {
        konamiIndex++;

        if (konamiIndex === konamiCode.length) {
            document.body.classList.add("stylise");

        }
    } else {
        konamiIndex = 0;
    }
}

window.addEventListener("keydown", checkKonamiCode);