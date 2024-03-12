<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Tangente</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $tan_valor = $_GET["tan_valor"];
    $tan_resultado = tan($tan_valor);
    echo "<p class='result-text'>A tangente de $tan_valor graus é aproximadamente $tan_resultado</p>";
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu.</p>";
  }
  ?>
</div>

</body>
</html>
