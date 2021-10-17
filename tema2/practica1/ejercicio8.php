<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <H1>EJERCICIO 8</H1>
    <?php

        $loteria = array(0,1,2,3,4,5,6,7,8,9);

        shuffle($loteria);

        echo "<h3>EL NÚMERO PREMIADO DE HOY ES</h3>";
        for($i=0;$i<=4;$i++){

            echo $loteria[$i];

        }

        


        
    ?>
</body>
</html>