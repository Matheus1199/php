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
        $ano = $_GET['an'];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano tem idade $idade anos.";
        $tipo = ($idade>=18 and $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo " E dessa <br/> forma seu voto é $tipo"
    ?>
</div>
</body>
</html>