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
        $n1 = isset($_GET['n1'])?$_GET['n1']:0;
        $n2 = isset($_GET['n2'])?$_GET['n2']:0;
        $media = ($n1 + $n2) / 2;
        echo "A média entre $n1 e $n2 é igual a $media <br/>"; 
        if ($media < 5) {
            $situacao = "REPROVADO";
        }
        elseif ($media <= 6) {
            $situacao = "RECUPERAÇÃO";
        }
        else {
            $situacao = "APROVADO";
        }
        echo "Situação do Aluno: $situacao"
    ?>
    <br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>