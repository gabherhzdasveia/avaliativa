<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Valor Mínimo</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $min_valor = $_GET["min_valor"];
    $valores = explode(",", $min_valor);
    $valores = array_filter($valores, 'strlen');

    if (!empty($valores)) {
      $min_resultado = min($valores);
      echo "<p class='result-text'>O resultado é $min_resultado</p>";
    } else {
      echo "<p class='result-text'>Nenhum valor válido foi fornecido.</p>";
    }
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu.</p>";
  }
  ?>
</div>

</body>
</html>
