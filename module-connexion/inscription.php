<?php
$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion','root','Zen4321@');
if(isset($_POST['inscription'])){

    if(!empty($_POST['nom'])and !empty($_POST['prenom']) and !empty($_POST['login']) and!empty($_POST['mail']) and !empty($_POST['password']) )
    {
            $insertmbr = $bdd->prepare("INSERT INTO utilisateurs(login, prenom, nom, mail, password) VALUES(?, ?, ?, ?, ?)");
	         $insertmbr->execute(array($_POST['login'], $_POST['prenom'], $_POST['nom'], $_POST['mail'],$_POST['password']));
              header("Location: connexion.php");
    }
    else
    {
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
    <div align = "center">
        <h2>Création de compte</h2>
        <br>
        <form method="post" action="">
            <table>
                <tr>
                    <td align="right">
                        <label for="login"> Pseudo :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="votre pseudo" id="login" name="login" />
                    </td>
                </tr> 
                <tr>
                    <td align="right">
                        <label for="prenom"> Nom :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="votre Nom" id="nom" name="nom" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="nom"> Prenom :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="votre Prenom" id="prenom" name="prenom" />
                    </td>
                </tr> 
                
                <tr>   
                    <td align="right">
                        <label for="mail"> Mail :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="votre Mail" id="mail" name="mail" />
                    </td>
                </tr>
                <tr>   
                    <td align="right">
                        <label for="password"> Mot de passe :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="votre Mot de passe" id="password" name="password" />
                    </td>
                </tr>
                <tr>   
                    <td align="right">
                        <label for="motdepasse2"> Confirmation mot de passe :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Confirmez votre Mot de passe" id="motdepasse" name="motdepasse" />
                    </td>
                </tr>
            </table> <br>
            <input type="submit" name="inscription" value="je m'inscris">       
        </form>
    </div>
</body>
</html>