<!DOCTYPE html>
<php lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Cosseno</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  $cos_valor = $_GET["cos_valor"];
  $cos_resultado = cos($cos_valor);
  echo "<p class='result-text'>O Cosseno de $cos_valor é $cos_resultado</p>";
  ?>
</div>

</body>
</php>
