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
        //exercicio de operadores

        // $preco = $_GET["p"];
        // echo "O preço do pedeido é R$ ". 
        // number_format($preco, 2, ",", "."); ;
        // $preco +=$preco * 10/100;

        // echo "<br> Preço com 10% de aumento sera R$ ". 
        // number_format($preco, 2, ",", "."); 

        //pré-incremento = $a = $a + 1; || ++$a
        //pré-incremento = $a = $a + 1; || $a++
        //pós-decremento = $a = $a - 1; || --$a
        //pós-decremento = $a = $a - 1; || $a--
        // $atual = $_GET["aa"];
        // echo "O ano atual é: $atual e o anterior é: ". --$atual;

        //VARIAVEIS REFERENCIADA
        // echo "<h2>Sem referencia</h2>";
        // $a = 3;
        // $b = $a;
        // $b += 5;
        // echo "O valor de A é: $a";
        // echo "<br>O valor de B é: $b";

        // echo "<h2>Com referencia</h2>";
        // $a = 3;
        // $b = &$a;
        // $b += 5;
        // echo "O valor de A é: $a";
        // echo "<br>O valor de B é: $b";

        //VARIAVEL DA VARIAVEL
        $x = "abc";
        $$x = "def";

        echo "O conteudo da variavel de X é $x";
        echo "<br>O conteudo da variavel da variavel X(abc) é $abc";
      ?> 
</div>
</body>
</html>
  