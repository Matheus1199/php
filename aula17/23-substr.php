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
        $site = "Curso em Vídeo";
        // $sub = substr($site, 0, 5);
        // $sub = substr($site, 7);
        // $sub = substr($site, -5);
        $sub = substr($site, -5, 2);
        echo "$sub";

    ?>
</div>
</body>
</html>