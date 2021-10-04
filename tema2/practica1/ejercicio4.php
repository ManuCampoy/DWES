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
          <H1>EJERCICIO 4</H1>
          <?php
                
                $a = rand(0,99);
                $b = rand(0,99);
                $c = rand(0,99);

                
                $solucion1 = -$b + sqrt((pow($b,2)-4*$a*$c)/2*$a);
                $solucion2 = -$b - sqrt((pow($b,2)-4*$a*$c)/2*$a);

                echo $a."x^2 + ".$b."x +$c";
                if($a == 0){

                    echo "Es una solucion compleja";

                }elseif($b< (4*$a*$c)){

                    echo "Es una solucion compleja";

                }else{

                    echo "Las soluciones para la ecuacion son <br>";
                    echo "$solucion1 y $solucion2";
                }
                
          ?>
      </div>
    </div>
</body>
</html>