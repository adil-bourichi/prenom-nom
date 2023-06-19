<?php
	session_start();
	 
	$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion', "root", "Zen4321@");
	 
	if(isset($_POST['formconnexion'])) {
	   $mailconnect = htmlspecialchars($_POST['mailconnect']);
	   $mdpconnect = $_POST['mdpconnect'];
	   if(!empty($mailconnect) AND !empty($mdpconnect)) {
          
	      $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE mail = ? AND password = ?");
	      $requser->execute(array($mailconnect, $mdpconnect));
	      $userexist = $requser->rowCount();
        
	      if($userexist == 1) {
	         $userinfo = $requser->fetch();
	         $_SESSION['id'] = $userinfo['id'];
	         $_SESSION['pseudo'] = $userinfo['pseudo'];
	         $_SESSION['mail'] = $userinfo['mail'];
	         header("Location: profil.php?id=".$_SESSION['id']);
             if( $_SESSION['mail']  == "admin@gmail.com"){
                header("Location:admin.php");
            }
	      } else {
      
	         $erreur = "Mauvais mail ou mot de passe !";
	      }
      
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
	            <input type="email" name="mailconnect" placeholder="Mail" />
	            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
	            <br /><br />
	            <input type="submit" name="formconnexion" value="Se connecter !" />
	         </form>
	         <?php
	         if(isset($erreur)) {
	            echo '<font color="red">'.$erreur."</font>";
	         }
	         ?>
	      </div>
	   </body>
	</html>