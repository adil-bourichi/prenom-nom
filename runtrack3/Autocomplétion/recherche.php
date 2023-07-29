<?php
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "autocompletion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$search = $_GET['search'];

$sql_exact = "SELECT * FROM pokemons WHERE name LIKE '$search%'";
$result_exact = $conn->query($sql_exact);

$sql_contain = "SELECT * FROM pokemons WHERE name LIKE '%$search%' AND name NOT LIKE '$search%'";
$result_contain = $conn->query($sql_contain);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultats de recherche - Autocompletion</title>
</head>
<body>
    <header>
        <form action="recherche.php" method="get">
            <input type="text" name="search" placeholder="Rechercher..." value="<?php echo $search; ?>">
            <button type="submit">Rechercher</button>
        </form>
    </header>

    <main>
        <h1>Résultats de recherche pour "<?php echo $search; ?>" :</h1>
        <h2>Résultats exacts :</h2>
        <ul>
            <?php
            if ($result_exact->num_rows > 0) {
                while ($row = $result_exact->fetch_assoc()) {
                    echo "<li><a href='element.php?id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
                }
            } else {
                echo "<li>Aucun résultat exact trouvé.</li>";
            }
            ?>
        </ul>

        <h2>Résultats contenant "<?php echo $search; ?>" :</h2>
        <ul>
            <?php
            if ($result_contain->num_rows > 0) {
                while ($row = $result_contain->fetch_assoc()) {
                    echo "<li><a href='element.php?id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
                }
            } else {
                echo "<li>Aucun résultat contenant \"" . $search . "\" trouvé.</li>";
            }
            ?>
        </ul>
    </main>
</body>
</html>
