<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Valor de Pi</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $pi_valor = $_GET["pi_valor"];
    $pi_resultado = number_format(pi(), $pi_valor);
    echo "<p class='result-text'>O Pi com $pi_valor casas é $pi_resultado</p>";
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu.</p>";
  }
  ?>
</div>

</body>
</html>
