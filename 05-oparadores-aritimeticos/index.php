<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        //Operadores Aritimeticos 
        $n1 = 3;
        $n2 = 2;
        //Soma
        echo "a soma é de: ". ($n1 + $n2);
        //Subtração
        echo "<br>a subtração é de: ". ($n1 - $n2);
        //Multiplicação
        echo "<br>a multiplicação é de: ". ($n1 * $n2);
        //Divisão
        echo "<br>a divisão é de: ". ($n1 / $n2);
        //Módulo/Resto da Divisão
        echo "<br>a módulo é de: ". ($n1 % $n2);

        //Ordem de Precedencia
        //parênteses > Multiplicação - Divisão - Módulo > adição - subtração
        $m = ($n1 + $n2) / 2;
        echo "<br> a media vale $m";

        //Dados do usuário pela URL
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores da URL: $n1 e $n2</h2>";

        //Soma
        echo "a soma é de: ". ($n1 + $n2);
        //Subtração
        echo "<br>a subtração é de: ". ($n1 - $n2);
        //Multiplicação
        echo "<br>a multiplicação é de: ". ($n1 * $n2);
        //Divisão
        echo "<br>a divisão é de: ". ($n1 / $n2);
        //Módulo/Resto da Divisão
        echo "<br>a módulo é de: ". ($n1 % $n2);

        //funções matematicas
        //abs(); Valor absoluto
        echo "<h1>Funções Matematicas</h1>";
        echo "<h3>Absoluta</h3>";
        echo "O valor absoluto de $n1 é ". abs($n1);
        echo "<br>O valor absoluto de $n2 é ". abs($n2);

        //pow(); Potenciação
        echo "<h3>Potencia</h3>";
        echo "o valor de $n1<sup>$n2</sup> é: ". pow($n1, $n2);

        //sqrt(); Raiz Quadrada
        echo "<h3>Raiz Quadrada</h3>";
        echo "a raiz de $n1 é: ". sqrt($n1);

        //round(); Arredondamento
        echo "<h3>Arredondamento</h3>";
        echo "a arredondamento de $n1 é: ". round($n1);

        //intval(); Valor inteiro da variavel
        echo "<h3>Valor inteiro da Variavel</h3>";
        echo "o valor inteiro de $n1 é: ". intval($n1);

        //number_format(); Formatação
        echo "<h3>Formatação</h3>";
        echo "o valor de $n1 em moeda é: R$ ". number_format($n1, 2, ",", ".");
      ?> 
</div>
</body>
</html>
  