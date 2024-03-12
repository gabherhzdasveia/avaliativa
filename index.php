<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Menon - Atividade Back-end</title>
    <link rel="stylesheet" href="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Avaliação Back-end 06/03</h1>
    <main>
        <div class="container">
          <form id="baseconvert" action="/php/base_convert.php" method="get">
              <span class="subtitle">Conversão de Base</span>
              <span>A função base_convert() converte um número de uma base para outra.</span>
              <div>
                  <label for="bs_numero">Número</label>
                  <input type="text" id="bs_numero" name="bs_numero"/>
              </div>
              <div>
                  <label for="bs_frombase">Base de Origem</label>
                  <select id="bs_frombase" name="bs_frombase">
                      <option value="2">Binário</option>
                      <option value="8">Octal</option>
                      <option value="10">Decimal</option>
                      <option value="16">Hexadecimal</option>
                  </select>
              </div>
              <div>
                  <label for="bs_tobase">Base de Destino</label>
                  <select id="bs_tobase" name="bs_tobase">
                      <option value="2">Binário</option>
                      <option value="8">Octal</option>
                      <option value="10">Decimal</option>
                      <option value="16">Hexadecimal</option>
                  </select>
              </div>
              <button type="submit">Calcular</button>
          </form>
          <form id="pow" action="/php/pow.php" method="get">
              <span class="subtitle">Potência</span>
              <span>A função pow() em PHP é utilizada para calcular a potência de um número.</span>
              <div>
                  <label for="pow_base">Base</label>
                  <input type="number" id="pow_base" name="pow_base"/>
              </div>
              <div>
                  <label for="pow_expoente">Expoente</label>
                  <input type="number" id="pow_expoente" name="pow_expoente"/>
              </div>
              <button type="submit">Calcular</button>
          </form>
            <form id="hypot" action="/php/hypot.php" method="get">
                <span class="subtitle">Hipotenusa</span>
                <span>A função hypot() em PHP é utilizada para calcular a hipotenusa de um triângulo retângulo, dados os comprimentos dos catetos.</span>
                <div>
                    <label for="hypot_cateto1">Cateto 1</label>
                    <input type="number" id="hypot_cateto1" name="hypot_cateto1"/>
                </div>
                <div>
                    <label for="hypot_cateto2">Cateto 2</label>
                    <input type="number" id="hypot_cateto2" name="hypot_cateto2"/>
                </div>
                <button type="submit">Calcular</button>
            </form>
            <form id="intdiv" action="/php/intdiv.php" method="get">
              <span class="subtitle">Divisão Inteira</span>
              <span>A função intdiv() em PHP é utilizada para realizar a divisão de dois números, retornando apenas a parte inteira do resultado. Ela é especialmente útil quando se deseja obter um resultado sem casas decimais.</span>
              <div>
                  <label for="intdiv_dividendo">Dividendo</label>
                  <input type="number" id="intdiv_dividendo" name="intdiv_dividendo"/>
              </div>
              <div>
                  <label for="intdiv_divisor">Divisor</label>
                  <input type="number" id="intdiv_divisor" name="intdiv_divisor"/>
              </div>
              <button type="submit">Calcular</button>
          </form>
            <form id="abs" action="/php/abs.php" method="get">
                <span class="subtitle">Valor Absoluto</span>
                <span>A função abs() retorna o valor absoluto (positivo) de um número.</span>
                <div>
                    <label for="abs_valor">Número</label>
                    <input type="number" id="abs_valor" name="abs_valor"/>
                </div>
                <button type="submit">Calcular</button>
            </form>
            <form id="cos" action="/php/cos.php" method="get">
                <span class="subtitle">Cosseno</span>
                <span>A função cos() em PHP é utilizada para calcular o cosseno de um número em radianos.</span>
                <div>
                    <label for="cos_valor">Número</label>
                    <input type="number" id="cos_valor" name="cos_valor"/>
                </div>
                <button type="submit">Calcular</button>
            </form>
            <form id="max" action="/php/max.php" method="get">
                <span class="subtitle">Valor Máximo</span>
                <span>A função max() em PHP é utilizada para encontrar o valor máximo em um conjunto de números ou em um array.</span>
                <div>
                    <label for="max_valor">Número(s)</label>
                    <input type="text" id="max_valor" name="max_valor"/>
                </div>
                <button type="submit">Calcular</button>
            </form>
            <form id="min" action="/php/min.php" method="get">
                <span class="subtitle">Valor Mínimo</span>
                <span>A função min() em PHP é utilizada para encontrar o valor mínimo em um conjunto de números ou em um array.</span>
                <div>
                    <label for="min_valor">Número(s)</label>
                    <input type="text" id="min_valor" name="min_valor"/>
                </div>
                <button type="submit">Calcular</button>
            </form>
            <form id="tan" action="/php/tan.php" method="get">
              <span class="subtitle">Tangente</span>
              <span>A função tan() em PHP é utilizada para calcular a tangente de um número em radianos.</span>
              <div>
                  <label for="tan_valor">Número</label>
                  <input type="number" id="tan_valor" name="tan_valor"/>
              </div>
              <button type="submit">Calcular</button>
          </form>
            <form id="pi" action="/php/pi.php" method="get">
                <span class="subtitle">Constante Pi</span>
                <span>A constante pi em PHP representa o valor matemático de pi (π), que é uma constante matemática que representa a razão entre a circunferência de um círculo e seu diâmetro.</span>
                <div>
                    <label for="pi_valor">Número</label>
                    <input type="number" id="pi_valor" name="pi_valor"/>
                </div>
                <button type="submit">Calcular</button>
            </form>
            <form id="sin" action="/php/sin.php" method="get">
                <span class="subtitle">Seno</span>
                <span>A função sin() em PHP é utilizada para calcular o seno de um número em radianos.</span>
                <div>
                    <label for="sin_valor">Número</label>
                    <input type="number" id="sin_valor" name="sin_valor"/>
                </div>
                <button type="submit">Calcular</button>
            </form>
            <form id="sqrt" action="/php/sqrt.php" method="get">
                <span class="subtitle">Raiz Quadrada</span>
                <span>A função sqrt() em PHP é utilizada para calcular a raiz quadrada de um número.</span>
                <div>
                    <label for="sqrt_valor">Número</label>
                    <input type="number" id="sqrt_valor" name="sqrt_valor"/>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </div>
    </main>
</body>
</html>
