<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $horario = $_GET['horario'];

    switch($horario)
    {
        case "M":
            echo "Matutino<br>";
           
        break;
        case "T":
            echo "Vespertino<br>";
           
        break;
        case "N":
            echo "Noturno<br>";
            
        break;
        default:
        echo "Valor Invalido";
    break;
    }
   

    ?>
</body>
</html>