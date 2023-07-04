function tri(numbers, order) {
    var length = numbers.length;
  
    for (var i = 0; i < length - 1; i++) {
      for (var j = 0; j < length - i - 1; j++) {
        if ((order === "asc" && numbers[j] > numbers[j + 1]) ||
            (order === "desc" && numbers[j] < numbers[j + 1])) {
          // Échange les éléments
          var temp = numbers[j];
          numbers[j] = numbers[j + 1];
          numbers[j + 1] = temp;
        }
      }
    }
  
    return numbers;
  }
  
  // Exemple d'utilisation de la fonction
  var numbers = [4, 2, 9, 1, 7];
  var order = "asc";
  var resultat = tri(numbers, order);
  console.log(resultat); // [1, 2, 4, 7, 9]
  