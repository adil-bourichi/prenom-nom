<!DOCTYPE html>
<html>
<head>
  <title>Exemple d'inclusion de script</title>
  <script src="script.js"></script>
</head>
<body>
  <?php
  function bisextile($annee) {
    if (($annee % 4 === 0 && $annee % 100 !== 0) || $annee % 400 === 0) {
      return true;
    } else {
      return false;
    }
  }

  $annee = 2024;
  if (bisextile($annee)) {
    echo "L'année $annee est bisextile.";
  } else {
    echo "L'année $annee n'est pas bisextile.";
  }
  ?>
</body>
</html>
