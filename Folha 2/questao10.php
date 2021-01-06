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
            text-align: left;
        }
</style>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><br>
                <h3 class="text-center">Morangos e Maçãs</h3><br>               
                <h4 class="text-center">Questão 10</h4><br>

                <form action="questao10.php" method="POST">
                    <div class="form-group">
                        <label for=""><h2>Quantidade em KG de morangos comprados:</h2></label><br>
                        <input type="text" name="morango" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;">
                    </div>
                    <div class="form-group">
                        <label for=""><h2>Quantidade em KG de maçãs compradas:</h2></label>
                        <input type="text" name="maca" placeholder= "" style="width:250px; height:40px; border-radius:4px; box-shadow: 1px 1px 2px; border:1px solid #000000;" >
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <h4>
                <?php 

                if (isset($_POST['morango']) && isset($_POST['maca']))
                {                 
                    $n1 = $_POST["morango"];
                    $n2 = $_POST["maca"];                    

                    if ($n1 > 5 )                   
                    { 
                        $valorMorango = $n1 * 2.2;
                        echo "O valor da compra da compra do morango: R$$valorMorango";   
                        echo '<br>';
                    }   

                    if ($n1 <= 5)
                    {
                        $valorMorango = $n1 * 2.5;
                        echo '<br>';
                        echo "O valor da compra do morango: R$$valorMorango";
                        echo '<br>';                
                    }

                    if ($n2 > 5)                   
                    { 
                        $valorMaca = $n2 * 1.5;

                        echo '<br>';
                        echo "O valor da compra da maçã: R$$valorMaca";
                        echo '<br>';
                                       
                    }  

                    if ($n2 <= 5)
                    {
                        $valorMaca = $n2 * 1.8;
                        echo '<br>';
                        echo "O valor da compra da maçã: R$$valorMaca";
                        echo '<br>';
                    }    
                    
                    $r = $valorMaca + $valorMorango;
                    echo '<br>';
                    echo "Valor total da compra: R$$r "; 
                    echo '<br>';

                    if ($n1 > 8 or $n2 > 8 or $r >= 25)
                    {
                        $rr = $r * 0.9;
                        $desM = $valorMaca * 0.9;
                        $desm = $valorMorango *0.9; 

                        echo '<br>';
                        echo "Você recebeu 10% de desconto porque o valor da compra foi maior que R$25";
                        echo '<br> <br>';
                        echo "Valor da compra do morango: R$$desm";
                        echo '<br> <br>';
                        echo "Valor da compra da maçã R$$desM";
                        echo '<br> <br>';
                        echo  "Valor total da compra: R$$rr";

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