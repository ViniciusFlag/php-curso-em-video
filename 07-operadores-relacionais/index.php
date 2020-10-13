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
      //operadores relacionais 
      //maior $a > $b
      //menor $a < $b
      //maior igual $a >= $b
      //menor igual $a <= $
      //diferente $a <> $b $a != $b
      //igual $a == $b
      //identico $a === $b --mesmo tipo e igual
      //operador unario expressão?verdadeiro:falso $maior = $a>$b?$a:$b

      //EXERCICIO 01

      // $n1 = $_GET["a"];
      // $n2 = $_GET["b"];
      // $tipo = $_GET["op"];

      // echo "Os valores passados foram $n1 e $n2 <br>";
      // $r = ($tipo == "s")?$n1+$n2:$n1*$n2;

      // echo "O resultado sera $r";

      //IGUAL E IDENTICO

      $a = 3;
      $b = "3";
      $r = ($a == $b) ? "SIM" : "NÃO";
      echo "As variaveis A e B são iguais? $r<br>";
      
      $r = ($a === $b) ? "SIM" : "NÃO";
      echo "As variaveis A e B são identicas? $r";
      ?>
</div>
</body>
</html>
  