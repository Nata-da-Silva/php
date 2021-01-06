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
            background-image: url('simb.jpg');
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
            font-size: 20px;
            color: black;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><br><br><br>
                <h3 class="text-center">Dividendo, Divisor, Quociente e Resto</h3>
                <img src="div.png" width="100" height="80">
                <h4 class="text-center">Questão 2</h4>

                <form action="questao2.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Digite um número:</h2></label><br>
                        <input type="number" name="numero1" placeholder=""style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Digite um número:</h2></label>
                        <input type="number" name="numero2" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 
                    if (isset($_POST['numero1']) && isset($_POST['numero2']))
                    {
                        $D = $_POST['numero1'];
                        $d = $_POST['numero2'];
                        $q = $D / $d;
                        $r = $D % $d;

                        echo "Dividendo: $D"; 
                        echo "<br>";
                        echo "Divisor: $d";
                        echo "<br>";
                        echo "Quociente: $q";
                        echo "<br>";
                        echo "Resto: $r";

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