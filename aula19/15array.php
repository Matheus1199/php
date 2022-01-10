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
            $n[0] = "C";
            $n[1] = "E";
            $n[2] = "H";
            $n[3] = "B";
            print_r($n);
            ksort($n);
            print_r($n);
        ?>
    </pre>
</div>
</body>
</html>