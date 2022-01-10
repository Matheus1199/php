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
        $nome = "   Matheus Bonafin   ";
        echo(strlen($nome));
        $novo = rtrim($nome);
        echo "<br/>";
        echo "$novo";
        echo "<br/>";
        echo strlen($novo);
    ?>
</div>
</body>
</html>