<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $enteros = array(0,1,2,3,4,5,6,7,8,9,10);
        $suma=0;
        
        //Sumamos los numeros pares.
        echo "<h4> Media de números pares</h4>";
        foreach ($enteros as $clave => $valor) {
            
            if($valor%2==0){
    
                $suma += $valor;

            }

            $media = $suma/5;
        } 
        echo $media;
        
        echo "<br>";

        //Mostramos los números pares por pantalla
        echo "<h4> Números impares por pantalla </h4>";
        for($i = 0; $i < sizeof($enteros); $i++){

            if($i%2!=0){

                echo $enteros[$i]." ";

            }
        }
        echo "<br>";
    ?>
</body>
</html>