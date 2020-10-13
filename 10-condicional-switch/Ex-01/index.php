<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $oper = isset($_GET["oper"]) ? $_GET["oper"] : 0;
      $num = isset($_GET["num"]) ? $_GET["num"] : 1;

       switch ($oper) {
         case 1:
              $r = $num * 2;
         break;
         case 2:
              $r = $num ^ 3;
         break;
         case 3:
              $r = sqrt($num);
       }

       echo "O resultado da operação escolhida é <span class='foco'>$r</span>";
    ?>
    <br>
    <a href="index.html">Voltar</a>
</div>
</body>
</html>
  