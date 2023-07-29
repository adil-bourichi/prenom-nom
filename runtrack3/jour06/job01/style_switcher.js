function setStyleSheet() {
    var screenWidth = window.innerWidth;
    var styleSheet = document.getElementById("styleSheet");

    if (screenWidth >= 1680 && screenWidth <= 1920) {
        styleSheet.setAttribute("href", "style2.css");
    } else if (screenWidth >= 1280 && screenWidth < 1680) {
        styleSheet.setAttribute("href", "style3.css");
    } else {
        styleSheet.setAttribute("href", "style4.css");
    }
}

setStyleSheet();

window.addEventListener("resize", function() {
    setStyleSheet();
});
