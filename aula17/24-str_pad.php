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
        $nome = "Guanabara";
        $novo = str_pad($nome, 50, " ", STR_PAD_BOTH);
        print("Meu professor $novo é lindo");
    ?>
</div>
</body>
</html>