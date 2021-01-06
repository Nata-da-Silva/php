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
            background-image: url('sss.jpg');
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
            color: #000000;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><br>
                <h3 class="text-center">Salário Mensal</h3><br><br>
                <img src="calcu.png" width="100" height="90"><br><br>
                <h4 class="text-center">Questão 8</h4><br>
                <form action="questao8.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Ganho por hora:</h2></label>
                        <input type="text" name="hora" placeholder= "hora" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Número de horas trabalhadas no mês</h2></label>
                        <input type="text" name="mes" placeholder= "mes" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </form>
                <h4>
                <?php 
                    if (isset($_POST['hora']) && isset($_POST['mes']))
                    {
                        $h = $_POST['hora'];
                        $m = $_POST['mes'];
                        $s = $h * $m;
                        echo "Salário referido ao mês: R$". number_format($s, 2, ',','.');
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