<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <H1>EJERCICIO 5</H1>
    <?php

        $numero = rand(0,99);
        $unidades = array("cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve",
        "diez","once","doce","trece","catorce","quince");
        
        $decena = $numero/10;
        $unidad = ($numero%10)/1;
        echo "$numero<br> $decena $unidad";

        
        $numero = $numero;
        if($numero<=15){

            $num = $unidades[$numero];
            echo $num;

        }
            
        
    ?>
</body>
</html>