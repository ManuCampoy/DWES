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
            <h1>EJERCICIO 1</h1>
            <?php
                $num1 = rand(0,99);
                $num2 = rand(0,99);
                $diferencia = $num1 - $num2;
                echo " La diferencia entre $num1 y $num2 es -> $diferencia "; 
                echo "<br>";
                $division = $num1 / $num2;
                echo " El cociente de $num1 entre $num2 es -> $division "; 
			?>
		</div>
	  </div>
    </div>
</body>
</html>