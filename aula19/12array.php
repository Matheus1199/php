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
    <pre>
        <?php
            $n = array(3,5,8,2);
            print_r($n);
            rsort($n);
            print_r($n);
        ?>
    </pre>
</div>
</body>
</html>