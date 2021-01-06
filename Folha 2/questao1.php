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

        }
        h2 {

            font-size: 28px;
            color: black;
        }
        h3 {
            font-size: 40px;
        }
        h4 {
            font-size: 30px;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><br>
                <h3 class="text-center">Número Divisível</h3><br><br>
                <img src="div.png" width="100" height="80"><br><br>
                <h4 class="text-center">Questão 1</h4><br><br>

                <form action="questao1.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Digite um número:</h2></label><br>
                        <input type="text" name="num1" placeholder= "" style="width:250px; height:40px;
                         border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Digite um número:</h2></label>
                        <input type="text" name="num2" placeholder= "" style="width:250px; height:40px;
                         border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 

                    if (isset($_POST['num1']) && isset($_POST['num2']))
                    {
                    $n = $_POST['num1'];
                    $i = $_POST['num2'];    
                   
                    if ($n % $i == 0)
                  
                    echo "$n é divisível por $i ";
                   
                    else 
                        echo "$n não é divisível por $i";      
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