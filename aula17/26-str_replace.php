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
        $frase = "Gosto de estudar Matemática!!";
        $novaFrase = str_replace("Matemática", "PHP", $frase);
        echo "$frase <br/>";
        echo "$novaFrase";
    ?>
</div>
</body>
</html>