function updateFooterColor() {
    let scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

    let r = Math.round(scrollPercentage * 255);
    let g = Math.round(255 - scrollPercentage * 255);
    let b = 0;

    document.querySelector("footer").style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
}

window.addEventListener("scroll", updateFooterColor);