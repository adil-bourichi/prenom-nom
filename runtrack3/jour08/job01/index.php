<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de création de compte</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Formulaire de création de compte</h2>
        <form action="traitement_formulaire.php" method="post">
            <label>Civilité:</label>
            <input type="radio" name="civility" value="M." required> M.
            <input type="radio" name="civility" value="Mme" required> Mme
            <input type="radio" name="civility" value="Autre" required> Autre
            <br>

            <label for="first_name">Prénom:</label>
            <input type="text" name="first_name" required>
            <br>

            <label for="last_name">Nom:</label>
            <input type="text" name="last_name" required>
            <br>

            <label for="address">Adresse:</label>
            <input type="text" name="address" required>
            <br>

            <label for="email">Adresse email:</label>
            <input type="email" name="email" required>
            <br>

            <label for="password">Mot de passe:</label>
            <input type="password" name="password" required>
            <br>

            <label for="confirm_password">Confirmer le mot de passe:</label>
            <input type="password" name="confirm_password" required>
            <br>

            <label>Passions:</label>
            <input type="checkbox" name="passions[]" value="Informatique"> Informatique
            <input type="checkbox" name="passions[]" value="Voyages"> Voyages
            <input type="checkbox" name="passions[]" value="Sport"> Sport
            <input type="checkbox" name="passions[]" value="Lecture"> Lecture
            <br>

            <input type="submit" value="Valider">
        </form>
    </section>

    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
    </footer>
</body>
</html>
