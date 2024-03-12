<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Conversão de Base</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $numero = $_GET["bs_numero"];
    $base_origem = $_GET["bs_frombase"];
    $base_destino = $_GET["bs_tobase"];

    $resultado = base_convert($numero, $base_origem, $base_destino);

    echo "<p class='result-text'>O número convertido é $resultado</p>";
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu.</p>";
  }
  ?>
</div>

</body>
</html>
