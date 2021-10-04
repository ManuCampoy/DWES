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
          <H1>EJERCICIO 2</H1>
          <?php
                
                    $nombre = "Manu";
                    $apellido = "Campoy";
                    $cadena1 = "Hola a todo el mundo";
                    $cadena2 = "Mi nombre es $nombre $apellido";

                    $cadena3 = $cadena1." ".$cadena2;
                    echo $cadena3;

                    echo "<br>";
                    $cadena1 = $cadena1." ".$cadena2;
                    echo $cadena1;
          ?>
      </div>
    </div>
</body>
</html>