<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Lista de Exercícios I</title>
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
            color: black;
        }
        h3 {
            font-size: 40px;
        }
        h4 {
            font-size: 20px;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><br><br><br>
                <h3 class="text-center">De Fahrenheit para Celsius</h3><br>
                <img src="tempe.png" width="100" height="90"><br>
                <h4 class="text-center">Questão 5</h4><br>

                <form action="questao5.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Digite a temperatura em Fahrenheit:</h2></label><br>
                        <input type="number" name="graus" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <button type="submit" class="btn btn-primary">Converter</button>
                </form>
                <h4>
                <?php 

                    if (isset($_POST['graus']))
                    {
                        $F = $_POST['graus'];
                        $C = (5*($F-32)/9);
                        echo "Resultado: $C °C";
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