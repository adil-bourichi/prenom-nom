
document.getElementById("button").addEventListener("click", function() {
    
    fetch("expression.txt")
    .then(response => {
        
        if (!response.ok) {
            throw new Error("Erreur lors de la récupération du fichier.");
        }
        
        return response.text();
    })
    .then(data => {
        
        const paragraph = document.createElement("p");
        paragraph.textContent = data;

        document.getElementById("content").appendChild(paragraph);
    })
    .catch(error => {
        
        console.error(error);
    });
});
