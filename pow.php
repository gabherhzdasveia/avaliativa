<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Potência</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $pow_base = $_GET["pow_base"];
    $pow_expoente = $_GET["pow_expoente"];

    $pow_resultado = pow($pow_base, $pow_expoente);
    echo "<p class='result-text'>$pow_base elevado a $pow_expoente é $pow_resultado</p>";
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu.</p>";
  }
  ?>
</div>

</body>
</html>
