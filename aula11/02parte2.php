<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css/estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
<div>
    <?php
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            $i += 1;
        }


        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            echo "Valor $i : " . $$v . "<br/>";
            $i += 1;
        }
    ?>
    <a href="02"></a>
</div>
</body>
</html>