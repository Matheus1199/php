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
         $t = "Aqui temos um texto gigantes criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
         $r = wordwrap($t, 5, "<br/>\n", true);
         echo "$r";

    ?>
</div>
</body>
</html>