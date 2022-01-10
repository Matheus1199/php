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
        $est = isset($_GET['tEst'])?$_GET['tEst']:1;
        switch ($est) {
            case 1:
            case 3:
            case 4:
            case 14:
            case 22:
            case 23:
            case 27:
                echo "Estado da Região Norte";
                break;
            case 2:
            case 5:
            case 6:
            case 10:
            case 15:
            case 17:
            case 18:
            case 26:
                echo "Estado da Região Nordeste";
                break;
            case 7:
            case 9:
            case 11:
            case 12:
                echo "Estado da Região Centro-Oeste";
                break;
            case 8:
            case 13:
            case 19:
            case 25:
                echo "Estado da Região Sudeste";
                break;
            case 16:
            case 21:
            case 24:
                echo "Estado da Região Sul";
                break;
            default:
                echo "Estado ínvalido";
        }
    ?>
    <br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>