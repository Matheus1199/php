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
        include "funcoes.php";
        echo "<h2>Testando novas funções</h2>";
        ola();
        mostraValor(9);
        echo "<h2>Finalizando Programa...</h2>"
    ?>
</div>
</body>
</html>