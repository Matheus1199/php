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
        $c = 1;
        while ($c <= 5) {
            echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
            $c += 1;
        }
    ?>
    <form method="get" action="02parte2.php">
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>