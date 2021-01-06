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
                <h3 class="text-center">Nome e Idade</h3><br><br>
                <img src="OIP.png" width="100" height="80"><br><br>
                <h4 class="text-center">Questão 1</h4><br><br>

                <form action="questao1.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Seu nome:</h2></label><br>
                        <input type="text" name="nome" placeholder= "Seu nome" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Sua idade:</h2></label>
                        <input type="text" name="idade" placeholder= "Sua idade" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 

                    if (isset($_POST['nome']) && isset($_POST['idade']))
                    {
                    $n = $_POST['nome'];
                    $i = $_POST['idade'];
                    echo "Nome: $n";
                    echo "<br/>";
                    echo "Idade: $i";
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