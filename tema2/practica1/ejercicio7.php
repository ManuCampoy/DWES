<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <H1>EJERCICIO 7</H1>
    <?php

        $elementos = array(1,2,3,4,5);

        for($i=0;$i<=10;$i++){

            echo "$elementos[0]*$i =";
            echo $elementos[0]*$i;
            echo "<br>";
            echo "$elementos[1]*$i =";
            echo $elementos[1]*$i;
            echo "<br>";
            echo "$elementos[2]*$i =";
            echo $elementos[2]*$i;
            echo "<br>";
            echo "$elementos[3]*$i = ";
            echo $elementos[3]*$i;
            echo "<br>";
            echo "$elementos[4]*$i =";
            echo $elementos[4]*$i;
            echo "<br>";

        }
    ?>
</body>
</html>