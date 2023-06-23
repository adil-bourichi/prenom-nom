<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=livreor', 'root', 'Zen4321@');
if (isset($_POST['inscription'])) {

    if (!empty($_POST['comment'])) {
        $insertmbr = $bdd->prepare("INSERT INTO commentaires(commentaire, id_utilisateur,date) VALUES(?,?,?)");
        $insertmbr->execute(array($_POST['comment'], $_SESSION['id'], date('Y-m-d h:i:s')));
        header("Location: livre-or.php");
    } else {
        echo "veillez remplir tous les champs";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
                        <a href="livre-or.php">
                            <li>livreor</li>
                        </a>
                </section>
   
            </ul>
        </nav>
    </header>
    <div align="center">
        <h2>Commentaire</h2>
        <br>
        <form method="post" action="">
            <table>
                <tr>
                    <td align="right">
                        <p><label for="w3review">Laissez votre commentaire</label></p>
                        <textarea id="w3review" name="comment" rows="4" cols="50"></textarea>
                    </td>
                </tr>
            </table> <br>
            <input type="submit" name="inscription" value="commenter">
        </form>
    </div>
</body>

</html>