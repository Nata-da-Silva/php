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
            color: black;
        
        }
        h4 {
            font-size: 30px;
            color: black;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5"><br>
                <h3 class="text-center">Calculo de Juros e Descontos</h3><br>
                <img src="din.png" width="100" height="80"><br><br>
                <h4 class="text-center">Questão 6</h4><br>
                <form action="questao6.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Nome do produto:</h2></label><br>
                        <input type="text" name="nome" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for="produto"><h2>Preço do produto:</h2></label>
                        <input type="text" name="preco" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <div class="form-group">
                        <label for="produto"><h2>Escolha a forma de pagamento:</h2></label><br>
                        <select id="produto" name="pagamento">
                            <option value="avista">A vista</option>
                            <option value="aprazo">A prazo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 
                if (isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['pagamento']))
                { 
                $n1 = $_POST['preco'];
                $n3 = $_POST['pagamento'];    

                if ($n3 == "avista")
                { 
                $s =  $n1 * 0.05;
                $r = $n1 - $s;   
                echo "$r você recebeu 5% de desconto pela compra a vista"; 
                }    
                else if ($n3 == "aprazo")
                {                    
                    $a = $n1 * 0.02;
                    $b = $n1 + $a;               
                    echo "$b você recebeu um juros 2% pela compra a prazo";
                }

                }
                ?>
                </h4>
            </div>
            <div class="col-md-3">            
            </div>
        </div>
    </div>
</body>
</html>