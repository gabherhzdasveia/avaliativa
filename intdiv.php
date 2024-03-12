<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Divisão Inteira</title>
  <link rel="stylesheet" href="resultado.css">
</head>
<body>

<div class="result">
  <?php
  try {
    $intdiv_dividendo = $_GET["intdiv_dividendo"];
    $intdiv_divisor = $_GET["intdiv_divisor"];

    $intdiv_resultado = intdiv($intdiv_dividendo, $intdiv_divisor);
    echo "<p class='result-text'>O quociente da divisão é $intdiv_resultado</p>";
  } catch (Exception $e) {
    echo "<p class='result-text'>Um erro ocorreu.</p>";
  }
  ?>
</div>

</body>
</html>
