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
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado foi $valor <br/>";
        echo "A raiz de $valor é igual a ". number_format($rq, 2);
    ?>
    <br/>
    <a href="./01-exercicio.html">Voltar</a>
</div>
</body>
</html>