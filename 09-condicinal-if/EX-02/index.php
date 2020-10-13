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
      $ano = isset($_GET["ano"]) ? $_GET["ano"] : 2000;
      $idade = date("Y") - $ano;

      echo "Você nasceu em $ano e tem $idade anos. <br>";
      if ($idade < 16) {
        $tipoVoto = "não vota";
      } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
          $tipoVoto = "Voto opcional";
        } else {
          $tipoVoto = "voto obrigatorio;";
        }
  
      echo "Para essa idade, $tipoVoto";
    ?>
    <br><a href="index.html">Voltar</a>
</div>
</body>
</html>
  