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
            $v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
            print_r($v);
            $v[] = "E";
            print_r($v);
            unset($v[9]);
            print_r($v);
        ?>
    </pre>
</div>
</body>
</html>