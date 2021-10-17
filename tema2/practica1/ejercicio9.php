<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        
    <h1>EJERCICIO 9</h1>

    
        
</head>
<body>
    
    <?php

        for($i=0;$i<=4;$i++){
            
            
            $color = "rgb(rand(0,256),rand(0,256),rand(0,256))";
            echo "<svg height='150' width='150'>";
            echo "<circle cx='10".+$i."' cy='50' r='40' stroke='black' stroke-width='2' fill='rgb(".+rand(0,255).",".+rand(0,255).",".+rand(0,255).")'>"; 
            echo "</svg>";
        }
    ?>
</body>
</html>