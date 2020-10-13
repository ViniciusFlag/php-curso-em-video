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
        //criar um contador personalizável
        $i = isset($_GET["i"]) ? $_GET["i"] : 0;
        $f = isset($_GET["f"]) ? $_GET["f"] : 0;
        $in = isset($_GET["in"]) ? $_GET["in"] : 0;

        if ($i < $f) {
            while ($i <= $f) {
                echo $i."<br>";
                $i += $in;
            }
        } elseif ($i > $f) {
            while ($i >= $f) {
                echo $i."<br>";
                $i -= $in;
            }
        } else {
            echo "Digite numeros validos!<br>";
        }
    ?>
    <a href="index.html">Voltar</a>
</div>
</body>
</html>
  