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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;

        echo "A media de $nota1 e $nota2 é $m <br>";

        // $sit = ($m < 6) ? "Aluno Reprovado" : "Aluno Aprovado";

        // echo "<h4>$sit<h4>";
        echo "<h3>A situação do aluno é: " . (($m < 6) ? "Reprovado" : "Aprovado") . "</h3>";
    ?>
</div>
</body>
</html>
  