<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-md-8 themed-grid-col">
      <div class="flex-shrink-0 p-3 bg-white">
          <H1>EJERCICIO 3</H1>
          <?php
                $radio = rand(0,10);
                $volumen = 4 * pi() * pow($radio,3)/ 3; 
                echo "(4 * π * ".$radio."^3)/3 <br>";
                echo "Solucion <br>";
                echo "El volumen de la esfera con radio $radio es -> $volumen";
                
          ?>
      </div>
    </div>
</body>
</html>