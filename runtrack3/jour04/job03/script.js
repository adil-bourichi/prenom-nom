
function filterPokemons() {
    const id = document.getElementById("id").value;
    const name = document.getElementById("name").value;
    const type = document.getElementById("type").value;

    fetch("pokemon.json")
        .then(response => response.json())
        .then(data => {
          
            const filteredPokemons = data.filter(pokemon =>
                (id === "" || pokemon.id.includes(id)) &&
                (name === "" || pokemon.name.toLowerCase().includes(name.toLowerCase())) &&
                (type === "" || pokemon.type.includes(type))
            );

            
            showResults(filteredPokemons);
        })
        .catch(error => console.error(error));
}


function showResults(pokemons) {
    const resultsDiv = document.getElementById("results");
    resultsDiv.innerHTML = ""; 

    if (pokemons.length === 0) {
        resultsDiv.textContent = "Aucun Pokémon ne correspond aux critères sélectionnés.";
        return;
    }

    
    const ul = document.createElement("ul");

    pokemons.forEach(pokemon => {
        const li = document.createElement("li");
        li.textContent = `${pokemon.id} - ${pokemon.name} (${pokemon.type})`;
        ul.appendChild(li);
    });

    resultsDiv.appendChild(ul);
}
