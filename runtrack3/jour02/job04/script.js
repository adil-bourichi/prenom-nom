function keylogger(event) {
    let textarea = document.getElementById("keylogger");

    if (event.key >= "a" && event.key <= "z") {
        textarea.value += event.key;
    }
}

document.addEventListener("keypress", keylogger);