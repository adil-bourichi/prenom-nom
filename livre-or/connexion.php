<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=livreor', "root", "Zen4321@");

if (isset($_POST['formconnexion'])) {
    $loginconnect = htmlspecialchars($_POST['loginconnect']);
    $mdpconnect = $_POST['mdpconnect'];
    if (!empty($loginconnect) and !empty($mdpconnect)) {

        $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = ? AND password = ?");
        $requser->execute(array($loginconnect, $mdpconnect));
        $userexist = $requser->rowCount();

        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['login'] = $userinfo['login'];
        }
        header("Location: profil.php?id=" . $_SESSION['id']);
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Connexion</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
</head>

<body>
    <header>
        <nav id="navTop">
            <ul id="listeNavTop">

                <section class="lien">
                    <a href="index.php">
                        <li>Accueil</li>
                    </a>
                </section>

                <section class="lien">
                    <a href="inscription.php">
                        <li>S'inscrire</li>
                    </a>
                </section>

                <section class="lien">
                    <a href="connexion.php">
                        <li>Connexion</li>
                    </a>
                </section>
            </ul>
        </nav>
    </header>
    <div align="center">
        <h2>Connexion</h2>
        <br /><br />
        <form method="POST" action="">
            <input type="login" name="loginconnect" placeholder="login" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
        </form>
        <?php
        if (isset($erreur)) {
            echo '<font color="red">' . $erreur . "</font>";
        }
        ?>
    </div>
</body>

</html>