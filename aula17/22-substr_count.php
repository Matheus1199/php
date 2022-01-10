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
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $cont = substr_count($frase, "PHP");
        print("PHP encontrado $cont vezes");
    ?>
</div>
</body>
</html>