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
            $cad = array("nome" => "Matheus",
                         "idade" => 16,
                         "peso" => 51.5);
            $cad["fuma"] = true;
            foreach($cad as $k => $c){
                echo "O campo $k possui o conteudo $c </br>";
            }
        ?>
    </pre>
</div>
</body>
</html>