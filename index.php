<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Mi web</title>
</head>
<body>
    <!-- Comentario en HTML -->
    <h1>Bienvenido a mi web </h1>
    <?php
    // Comentario en PHP
      echo " Hola, mundo! Esta es una página de ejemplo en PHP.";
      echo "<br>"; // Comentario en línea
      echo "Este es otro mensaje.";
      // variables en php
      $num1 = 10;
      $num2 = 2.5;

      echo "Esto es la suma entre ".$num1." y ". $num2." el resultado es ". $num1 + $num2;

      $num1++;
      $num2 *= 2;
      echo "<h2>num1 incrementando: $num1, num2 multiplicado por 2 = $num2</h2>";
      // operaciones aritméticas
      $suma = $num1 + $num2;
      $resta = $num1 - $num2;
      $multiplicacion = $num1 * $num2;

      $division = $num1 / $num2 * $num2;

    ?>
</body>
</html>