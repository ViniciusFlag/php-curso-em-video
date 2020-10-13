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
      $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informmado]";
      $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[não informmado]";
      $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informmado]";
      $idade = date("Y") - $ano;

      echo "$nome é $sexo e tem $idade anos";
    ?>  
    <br>
    <a href="modeloHTML.html">Voltar</a>
</div>
</body>
</html> 
  