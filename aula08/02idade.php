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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO INFORMADO]";
        $ano = isset($_GET["ano"])?date("Y") - $_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[SEM SEXO]";
        echo "$nome é $sexo e tem $idade anos.";
    ?>
    <br>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>