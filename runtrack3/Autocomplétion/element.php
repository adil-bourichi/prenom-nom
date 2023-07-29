<?php
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "autocompletion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$id = $_GET['id'];

$sql_element = "SELECT * FROM pokemons WHERE id = $id";
$result_element = $conn->query($sql_element);

if ($result_element->num_rows > 0) {
    $row = $result_element->fetch_assoc();
    $name = $row['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Élément - Autocompletion</title>
</head>
<body>
    <header>
        <form action="recherche.php" method="get">
            <input type="text" name="search" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
        </form>
    </header>

    <main>
        <h1>Informations sur l'élément "<?php echo $name; ?>" :</h1>
        <p>Nom : <?php echo $name; ?></p>
    </main>
</body>
</html>
