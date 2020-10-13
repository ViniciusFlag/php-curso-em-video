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
      $i = 1;

      while ($i <= 5) {
        $v = "num".$i;
        $url = "v".$i;
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
        $i++; 
      }

      $i = 1;
      while ($i <= 5) {
        $v = "num".$i;
        echo "Valor $i: " .$$v."<br>";
        $i ++;
      }
      //break dentro do while, é utilizado se caso ndecessario
      //continue, se necessario volta para o inicio do while
    ?>
</div>
</body>
</html>
  