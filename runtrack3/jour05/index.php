<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
</head>
<body>
    <?php
    session_start();

    if (isset($_SESSION['prenom'])) {
        echo "<p>Bonjour " . $_SESSION['prenom'] . "</p>";
    } else {
        echo "<a href='inscription.php'>Inscription</a> | <a href='connexion.php'>Connexion</a>";
    }
    ?>
</body>
</html>
