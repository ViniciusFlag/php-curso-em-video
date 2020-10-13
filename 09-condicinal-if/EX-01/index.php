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
      $ano = isset($_GET["ano"]) ? $_GET["ano"] : "Digite um Numero valido";
      $idade = date("Y") - $ano;

      echo "Você nasceu em $ano e tem $idade anos. <br>";
      if ($idade >=18) {
        $v = "ja pode votar";
        $d = "ja pode dirigir";
      } else {
        $v = "não pode votar";
        $d = "não pode dirigir";
      }
      echo "Com essa idade você $v e tambem $d";
    ?>
</div>
</body>
</html>
  