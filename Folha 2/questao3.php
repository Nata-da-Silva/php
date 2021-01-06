<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Lista de Exercícios II</title>
</head>
<style>
        body {

            text-align: center;
            background-image: url('OIP.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;


        }
        h2 {

            font-size: 28px;
            color: red;
        }
        h3 {
            font-size: 40px;
            color: red;
        }
        h4 {
            font-size: 30px;
            color: red;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="text-center">Produto mais Barato</h3><br>
                <img src="din.png" width="100" height="80"><br><br>
                <h4 class="text-center">Questão 3</h4><br>

                <form action="questao3.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Digite o preço do produto:</h2></label><br>
                        <input type="text" name="preço1" placeholder= "R$" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Digite o preço do segundo produto:</h2></label>
                        <input type="text" name="preço2" placeholder= "R$" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Digite o preço do terceiro produto:</h2></label>
                        <input type="text" name="preço3" placeholder= "R$" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 
                    error_reporting(0);
                    $p1 = $_POST['preço1'];
                    $p2 = $_POST['preço2'];    
                    $p3 = $_POST['preço3'];

                    if ($p1 < $p2)
                        if ($p1 < $p3)
                    {

                     echo "O produto que custa R$$p1 é a melhor opção";

                    }

                    if ($p2 < $p1)
                        if ($p2 < $p3)
                    
                     {

                      echo "O produto que custa R$$p2 é a melhor opção";

                     }
                    
                    if ($p3 < $p1)
                        if ($p3 < $p2)
                    {

                     echo "O produto que custa R$$p3 é a melhor opção";

                    }

                ?>
                </h4>
            </div>
            <div class="col-md-4">          
            </div>
        </div>
    </div>
</body>
</html>