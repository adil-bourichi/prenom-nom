function sommenombrespremiers(num1, num2) {
    function estNombrePremier(num) {
      if (num <= 1) {
        return false;
      }
      for (var i = 2; i <= Math.sqrt(num); i++) {
        if (num % i === 0) {
          return false;
        }
      }
      return true;
    }
  
    if (estNombrePremier(num1) && estNombrePremier(num2)) {
      return num1 + num2;
    } else {
      return false;
    }
  }
  
  // Exemple d'utilisation de la fonction
  var nombre1 = 7;
  var nombre2 = 11;
  var somme = sommenombrespremiers(nombre1, nombre2);
  if (somme !== false) {
    console.log("La somme des nombres premiers " + nombre1 + " et " + nombre2 + " est : " + somme);
  } else {
    console.log("Au moins l'un des nombres n'est pas premier.");
  }
  