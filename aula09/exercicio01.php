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
        $a = isset($_GET['ano'])?$_GET['ano']:1900;
        $data = new DateTime();
        $i = $data->format("Y") - $a;
        echo "Você nasceu em $a e terá $i anos";
        if ($i >= 18) {
            $v = "Já pode votar";
            $d = "Já pode dirigir";
            
        }
        else {
            $v = "Não pode votar";
            $d = "Não pode dirigir";
        }

        echo "<br>Com essa idade voce $v e tambem $d";
    ?>
    <br>
    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>