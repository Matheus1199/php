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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $media <br/>";
        $sit = ($media>5)?"APROVADO":"REPROVADO";
        echo "A situação do aluno é $sit";
    ?>
</div>
</body>
</html>