<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Hipotenusa</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $hypot_cateto1 = $_GET["hypot_cateto1"];
    $hypot_cateto2 = $_GET["hypot_cateto2"];

    $hypot_resultado = hypot($hypot_cateto1, $hypot_cateto2);
    echo "<p class='result-text'>A hipotenusa é $hypot_resultado</p>";
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu.</p>";
  }
  ?>
</div>

</body>
</html>
