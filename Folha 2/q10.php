<html>

<head>
    <title>Questão 10</title>
</head>

<body>
    <form action="" method="post">

        <label>Kg de morangos:</label>  <br/>
        <input id="morangos" name="morangos">   <br/><br/><br/> 
        <label>Kg de maças:</label>  <br/>
        <input id="macas" name="macas">   <br/><br/><br/> 
        <input type= "submit" value = "Calcular Total" >
        <br/><br/><br/>
        <label>Resultado:</label>  <br/><br/><br/>

    </form>


    <?php

    $morango=$_POST["morangos"];
    $valorMorango = 0;

    $macas=$_POST["macas"];
    $valorMacas = 0;

    $resultado = 0;

    echo "Morango: ".$morango."Kg <br/>";
    echo "Maçã: ".$macas."Kg <br/><br/>";


    if($morango <= 5)       //Morangos menos que 5KG
    {
        echo ("Morango/Kg = R$2.50 <br/><br/>");
        $valorMorango = 2.5 * $morango;    
    }

    if($morango > 5)      //Morangos mais que 5KG
    {
        echo ("Morango/Kg = R$2.20 <br/><br/>");
        $valorMorango = 2.2 * $morango; 
    }

    if($macas <= 5)         //Maças menos que 5KG
    {
        echo ("Maçã/Kg = R$1.80 <br/><br/>");
        $valorMacas = 1.8 * $macas;  
    }
    if($macas > 5)          //Maças mais que 5K
    {
        echo ("Maçã/Kg = R$1.50 <br/><br/><br/>");
        $valorMacas = 1.5 * $macas;   
    }


    echo ("Valor TOTAL morangos: R$".$valorMorango."<br/>");
    echo ("Valor TOTAL maçãs: R$".$valorMacas."<br/><br/>");
    $resultado = $valorMorango + $valorMacas;
    echo ("Valor TOTAL da compra: R$".$resultado."<br/><br/>");

    
    //Mais do que 8 Kg e descontos individuais   
    if((($morango > 8) || ($macas > 8)) || ($resultado > 25) )
    {
        if($resultado > 25) //Se o total ultrapassar 25 reais, ganha 10% de desconto     
        {                       
            echo("Ganhou 10% de desconto porque a compra ultrapassou 25 reais. <br/><br/><br/>");
            $valorMorango = $valorMorango * 0.9;
            $valorMacas = $valorMacas * 0.9;

        }else     //Senão, ganha 10% de desconto apenas no produto que passou de 8 KG 
        {                  
            if($morango > 8)
            {
                echo ("Valor dos morangos sem desconto: R$".$valorMorango."<br/>");
                $valorMorango = $valorMorango * 0.9;
                echo ("Valor dos morangos com desconto: R$".$valorMorango."<br/><br/>");
            }
            if($macas > 8)
            {
                echo ("Valor das maçãs sem desconto: R$".$valorMacas."<br/>");
                $valorMacas = $valorMacas * 0.9;
                echo ("Valor das maçãs com desconto: R$".$valorMacas."<br/><br/>");
            }
        }
       
    }

    $resultado = $valorMorango + $valorMacas;  //Soma o novo total a pagar entre morango e maçã

    echo "Valor a pagar pelos morangos: R$".$valorMorango. "<br/>"; 

    echo "Valor a pagar pelas maçãs: R$".$valorMacas. "<br/><br/>";

    echo("Valor total a pagar: R$".$resultado);
    ?>


</body>

</html>
