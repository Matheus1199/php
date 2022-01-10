<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css/estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b)?"SIM":"NÃO";
        echo "As variaveis são iguais? $r";
        $r = ($a === $b)?"SIM":"NÃO";
        echo "<br/>As variaveis são identicas? $r";
    ?>
</div>
</body>
</html>