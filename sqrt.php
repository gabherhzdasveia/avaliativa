<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Raiz Quadrada</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $sqrt_valor = $_GET["sqrt_valor"];
    $sqrt_resultado = sqrt($sqrt_valor);
    echo "<p class='result-text'>A raiz quadrada de $sqrt_valor é $sqrt_resultado</p>";
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu.</p>";
  }
  ?>
</div>

</body>
</html>
