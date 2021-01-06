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
                <h3 class="text-center">Cálculo do Salário Final</h3><br>
                <img src="din.png" width="100" height="80"><br><br>
                <h4 class="text-center">Questão 7</h4><br>
                <form action="questao7.php" method="POST">                   
                    <div class="form-group">
                        <label for="escolha"><h2>Escolha o seu setor:</h2></label><br>
                        <select id="escolha" name="setor">
                            <option value="producao">Produção</option>
                            <option value="admin">Administrativo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Quantidade de horas trabalhados no mês</h2></label><br>
                        <input type="text" name="mes" placeholder="" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 
                if (isset($_POST['mes']) && isset($_POST['setor']))
                { 
                $n1 = $_POST['mes'];
                $n3 = $_POST['setor'];    
                $p = 10;
                $a = 12;
                
                if ($n3 == "producao")
                {
                    $r = $n1 * $p;
                    echo "Valor do seu salário final é R$$r";

                }
                else if ($n3 == "admin")
                {
                    $t = $n1 * $a;
                    echo "O valor do salário final é R$$t"; 
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