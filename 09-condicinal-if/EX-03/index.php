<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    .red {
      color: red;
    }

    .btn {
      padding: 10px;
      background: rgb(18, 18, 145);
      color: #ffffff;
      border: none;
      border-radius: 5px;
    }

    .btn:hover {
      background: rgb(19, 19, 163);
    }
  </style>
</head>
<body>
  <!-- entre 0 e 5 reprovado // do 5 ao 7 recuperação  // 7 ao 10 aprovado-->
<div>
    <?php
      $n1 = isset($_GET["n1"]) ? $_GET["n1"] : "numero invalido";
      $n2 = isset($_GET["n2"]) ? $_GET["n2"] : "numero invalido";

      $m = ($n1 + $n2) / 2;

      echo "A media de <span class='red'>$n1</span> e 
      <span class='red'>$n2</span> é <span class='red'>$m</span>. <br>";

      if (($m >= 7) && ($m <= 10)) {
        $sit = "Aluno Aprovado.";
      } elseif (($m >= 5) && ($m < 7)) {
        $sit = "Aluno em Recuperação";
      } elseif (($m < 5) && ($m >= 0)) {
        $sit = "Aluno Reprovado";
      } else {
        $sit = "Invalido";
      }
      echo "Situação: <span class='red'>$sit</span>";
    ?>
    <br>
    <a class="btn" href="index.html">Voltar</a>
    
</div>
</body>
</html>
  