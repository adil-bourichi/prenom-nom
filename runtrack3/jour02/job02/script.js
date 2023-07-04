function showhide() {
    let citation = document.getElementById("citation");

    if (citation) {
        citation.remove();
    } else {
        citation = document.createElement("article");
        citation.id = "citation";
        citation.textContent = "L'important n'est pas la chute, mais l'atterrissage.";

        document.body.appendChild(citation);
    }
}