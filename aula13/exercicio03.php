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
        $n = isset($_GET['num'])?$_GET['num']:1;
        echo "<h1>Analisando número $n</h1> <br/>";
        echo "Valores múltiplos: ";
        for ($c=1; $c<=$n; $c+=1) {
            if ($n%$c=0) {
                $mult += 1;
                echo "$c ";
                $c += 1;
            }
        }
        echo "<br/>";
        echo "Total de múltiplos: $mult";
        echo "Resultado: $n";
        if ($mult <= 2) {
            echo "É PRIMO";
        }
        else {
            echo "NÃO É PRIMO";
        }
    ?>
</div>
</body>
</html>