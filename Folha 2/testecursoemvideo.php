<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Teste Curso em Vídeo</title>
</head>
<body>
<form method="POST" action="testecursoemvideo.php">
    <label>Digite as notas:</label><br><br>
    <input type="number" name="nota1" placeholder=""> <br><br>
    <input type="number" name="nota2" placeholder=""> <br><br>
    <input type="submit" name="Enviar">
    <?php    
    if (isset($_POST['nota1']) && isset($_POST['nota2'])) 
    {  
    $a = $_POST['nota1'];
    $b = $_POST['nota2'];
    $m = ($a + $b) / 2;

    if ($m >= 7)
    {
        echo "Você foi aprovado. Sua média é: $m </br>";
    }
    else if ($m >= 5 and $m < 7)
    {
        echo "Você está de recuperação. Sua média é: $m";
    }
    else 
    {
        echo "Você reprovou";
    }   
    }
    ?>
    </form>
</body>
</html> 