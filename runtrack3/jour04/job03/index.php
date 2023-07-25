<!DOCTYPE html>
<html>
<head>
    <title>Tri des données Pokémon</title>
</head>
<body>
    <h1>Tri des données Pokémon</h1>
    <form id="filterForm">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id"><br>

        <label for="name">Nom:</label>
        <input type="text" id="name" name="name"><br>

        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="">Tous les types</option>
            <option value="Grass">Grass</option>
            <option value="Fire">Fire</option>
            <option value="Water">Water</option>
           
        </select><br>

        <input type="button" value="Filtrer" onclick="filterPokemons()">
    </form>

    <div id="results">
       
    </div>

    <script src="script.js"></script>
</body>
</html>
