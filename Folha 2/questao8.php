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
            color: black;
        
        }
        h4 {
            font-size: 25px;
            color: black;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5"><br>
                <h3 class="text-center">Reajuste do Salário</h3><br>
                <img src="salario15.png" width="190" height="90"><br><br>
                <h4 class="text-center">Questão 8</h4><br>

                <form action="questao8.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Digite o seu salário:</h2></label><br>
                        <input type="text" name="num1" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 

                if (isset($_POST['num1']))
                { 

                $n1 = $_POST["num1"];

                if ($n1 <= 280)
                {
                    $r = $n1 * 0.20;
                    $t = $n1 + $r;
                    echo "Seu salário era de R$". number_format($n1, 2, ',','.');
                    echo '<br>';
                    echo "Ouve uma aumento de 20% que equivale à R$". number_format($r, 2, ',','.');
                    echo '<br>';
                    echo "Seu novo salário é de R$". number_format($t, 2, ',','.');
                    echo '<br>';
                }

                else if ($n1 >= 280 && $n1 < 700)
                {
                    $r = $n1 * 0.15;
                    $t = $n1 + $r;
                    echo "Seu salário era de R$".number_format($n1, 2, ',','.');  
                    echo '<br>';                            
                    echo "Ouve uma aumento de 15% que equivale à R$$". number_format($r, 2, ',','.');
                    echo '<br>';
                    echo "Seu novo salário é de R$".number_format($t, 2, ',','.');
                    echo '<br>';
                }
                if ($n1 >= 700 && $n1 < 1500)
                {
                    $r = $n1 * 0.10;
                    $t = $n1 + $r;
                    echo "Seu salário era de R$". number_format($n1, 2, ',','.');
                    echo '<br>';
                    echo "Ouve uma aumento de 10% que equivale à R$". number_format($r, 2, ',','.');
                    echo '<br>';
                    echo "Seu novo salário é de R$". number_format($t, 2, ',','.');
                    echo '<br>';
                }

                else if ($n1 >= 1500)
                {
                    
                    $r = $n1 * 0.05;
                    $t = $n1 + $r;
                    echo "Seu salário era de R$". number_format($n1, 2, ',','.');
                    echo '<br>';
                    echo "Ouve uma aumento de 5% que equivale à R$". number_format($r, 2, ',','.');
                    echo '<br>';
                    echo "Seu novo salário é de R$". number_format($t, 2, ',','.');
                    echo '<br>';                   
                }    
                }
                ?>
                </h4>
            </div>
            <div class="col-md-6">            
            </div>
        </div>
    </div>
</body>
</html>