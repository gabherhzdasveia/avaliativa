<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Valor Absoluto</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $abs_valor = $_GET["abs_valor"];
    $abs_resultado = abs($abs_valor);
    echo "<p class='result-text'>O valor absoluto de $abs_valor é $abs_resultado</p>";
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu</p>";
  }
  ?>
</div>

</body>
</html>