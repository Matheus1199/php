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
    <form action="exercicio02-parte2.php" method="get">
        <select name="num">
        <?php
            for ($c=1; $c<=10; $c+=1) {
                echo "<option>$c</option>";
            }
        ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</div>
</body>
</html>