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
            background-image: url('mate.jpg');
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
            text-align: justify;
            font-size: 20px;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><br>
                <h3 class="text-center">Cálculos</h3><br>
                <img src="4.png" width="100" height="80"><br><br>
                <h4 class="text-center">Questão 9</h4><br>
                <form action="questao9.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Digite um número inteiro:</h2></label><br>
                        <input type="text" name="int" placeholder= "Digite um número inteiro" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Digite um número inteiro:</h2></label><br>
                        <input type="text" name="int2" placeholder= "Digite um número inteiro" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Digite um número real:</h2></label><br>
                        <input type="text" name="real" placeholder= "Digite um número real" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 
                    if (isset($_POST['int'])&&isset($_POST['int2'])&&isset($_POST['real']))
                    {
                        $m = (int)$_POST['int'];
                        $n = (int)$_POST['int2'];
                        $s = (double)$_POST['real'];
                        $c = $m * 2;
                        $r = $n / 2;
                        $b = $c + $r;
                        echo "O produto do dobro do primeiro com metade do segundo: $b";
                        echo '<br><br>';
                        $t = $m * 3 + $s;
                        echo "A soma do triplo do primeiro com o terceiro: $t";
                        echo '<br><br>';
                        $w = $s ** 3;
                        echo "O terceiro elevado ao cubo: $w";
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