<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=livreor', 'root', 'Zen4321@');

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['id'])) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}

// Récupérer les commentaires du livre d'or
$requete = $bdd->query("SELECT commentaires.*, utilisateurs.login AS nom_utilisateur 
                       FROM commentaires 
                       INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id 
                       ORDER BY commentaires.date DESC");
$commentaires = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <nav id="navTop">
            <ul id="listeNavTop">
            <section class="lien">
                        <a href="deconnexion.php">
                            <li>Déconnexion</li>
                        </a>
                </section>
                <section class="lien">
                        <a href="commentaire.php">
                            <li>Commentaire</li>
                        </a>
                </section>
            </ul>
        </nav>
    </header>

    <div align="center">
        <h2>Livre d'or</h2>

        <?php if ($loggedIn) : ?>
            <p><a href="commentaire.php">Ajouter un commentaire</a></p>
        <?php endif; ?>

        <?php foreach ($commentaires as $commentaire) : ?>
            <div class="commentaire">
                <p>Posté le <?php echo date('d/m/Y', strtotime($commentaire['date'])) . " ". $commentaire['nom_utilisateur'];  ?> </p>
                <p><?php echo $commentaire['commentaire']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
