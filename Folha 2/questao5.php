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
            <div class="col-md-6"><br>
                <h3 class="text-center">Matutino, Verpertino e Noturno</h3><br>

                <h4 class="text-center">Questão 4</h4><br>

                <form action="questao5.php" method="POST">
                    <div class="form-group">
                <h2>
                    <input type="radio" id="periodo" name="periodo" value="M">
                <label for="periodo">Matutino</label><br>
                <input type="radio" id="periodo" name="periodo" value="V">
                <label for="periodo">Verpertino</label><br>
                <input type="radio" id="periodo" name="periodo" value="N">
                <label for="periodo">Noturno</label><br>
                </div>
                </h2>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 

                if (isset($_POST['periodo']))
                {  
    
                $a = $_POST["periodo"];

                if ($a == "M")
                {
                    echo "Bom Dia!";
    
                }
                else if ($a == "V")
                {
                    echo "Boa Tarde!";
                }    

                else if ($a == "N")
                {
                    echo "Boa Noite!";
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