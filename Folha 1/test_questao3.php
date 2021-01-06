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
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><br><br><br>
                <h3 class="text-center">Cálculo do Salário</h3>
                <img src="salario15.png" width="200" height="90">
                <h4 class="text-center">Questão 3</h4>

                <form action="test_questao3.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Seu ganho por hora:</h2></label><br>
                        <input type="number" name="ganho" placeholder=""style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Horas tarabalhadas no mês:</h2></label>
                        <input type="number" name="hora" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </form>
                <h4>
                <?php 
                    if (isset($_POST['ganho']) && isset($_POST['hora']))
                    {
                        $g = (float)$_POST['ganho'];   
                        $h = (float)$_POST['hora'];
                        $s = $g * $h; 
                        echo "Seu salário é: R$". number_format($s, 2, ',','.' );
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