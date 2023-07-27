document.getElementById("inscriptionForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const form = event.target;



    fetch("inscription_process.php", {
        method: "POST",
        body: new FormData(form)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            
            window.location.replace("connexion.php");
        } else {
            
            const errorMessagesDiv = document.getElementById("errorMessages");
            errorMessagesDiv.innerHTML = "";
            for (const key in data.errors) {
                const errorMessage = document.createElement("p");
                errorMessage.textContent = data.errors[key];
                errorMessagesDiv.appendChild(errorMessage);
            }
        }
    })
    .catch(error => console.error(error));
});
