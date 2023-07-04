<!DOCTYPE html>
<html>
<head>
  <title>FizzBuzz</title>
</head>
<body>
  <h1>FizzBuzz</h1>

  <?php
  function fizzbuzz() {
    for ($i = 1; $i <= 151; $i++) {
      if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz<br>";
      } else if ($i % 3 === 0) {
        echo "Fizz<br>";
      } else if ($i % 5 === 0) {
        echo "Buzz<br>";
      } else {
        echo $i . "<br>";
      }
    }
  }

  fizzbuzz();
  ?>
</body>
</html>
