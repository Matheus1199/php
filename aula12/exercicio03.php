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
        $v = isset($_GET['val']) ? $_GET['val']:1;
        echo "Calculando o fatorial de ";
        $c = $v;
        $fat = 1;
        do {
            $fat *= $c;
            $c -= 1;
        } while ($c >= 1);
        echo "$v ! = $fat";
    ?>
    <br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>