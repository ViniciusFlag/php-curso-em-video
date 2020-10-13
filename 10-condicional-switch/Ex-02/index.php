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
          $ds = isset($_GET["ds"]) ? $_GET["ds"] : 0;
          switch ($ds) {
               case 1:
               case 2:
               case 3:
               case 4:
               case 5:
               case 6:
                    echo "Levanta e vai estudar!";
               break;
               case 7:
               case 8:
                    echo "Pode descansar!";
               break;
               default:
                    echo "Dia da semana invalido!";
          }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</div>
</body>
</html>
  