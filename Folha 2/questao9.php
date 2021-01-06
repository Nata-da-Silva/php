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
            font-size: 25px;
            color: black;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5"><br>
                <h3 class="text-center">Lados de um Triângulo</h3><br>
                <img src="tri.png" width="100" height="80"><br><br>
                <h4 class="text-center">Questão 9</h4><br>

                <form action="questao9.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Digite os valores dos lados do triângulo:</h2></label><br>
                        <input type="number" name="lado1" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <input type="number" name="lado2" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <div class="form-group">
                        <input type="number" name="lado3" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 

                if (isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3']))
                {                 
                    $n1 = $_POST["lado1"];
                    $n2 = $_POST["lado2"];
                    $n3 = $_POST["lado3"];               
                
                    if ($n1 + $n2 > $n3 && $n2 + $n3 > $n1 && $n3 + $n1 > $n2)
                    
                    {
                        if ($n1 == $n2 and $n1 == $n3)
                        {
                            echo "É um Triângulo Equilátero, todos os lados são iguais";
                        }
                        else if ($n1 == $n2 or $n2 == $n3 or $n3 == $n1) 
                        {
                            echo "É um Triângulo Isósceles, possui dois lados iguais";
                        }
                        else
                            echo "É um Triângulo Escaleno, todos os lados são diferentes";           
                    }   

                    else 
                    {
                        echo "Os valores não podem ser de um triângulo";
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