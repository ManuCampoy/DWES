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
        
        $matriz[7][7] = 0;

        for($i=0;$i<=6;$i++){
            for($j=0;$j<=6;$j++){

                if(($i==$j)||($i+$j==6)){

                    $matriz[$i][$j]=1;
                    echo " ".$matriz[$i][$j]." ";

                }
                else{

                    $matriz[$i][$j]= rand(0,9);
                    echo  " ".$matriz[$i][$j]." ";

                }

            }
            echo "<br>";

        }
        
        foreach ($matriz as $m => $value) {
            foreach ($value as $key => $value) {

                $sumValue += $value;

            }

            
            echo "<br>";

        }
        echo $sumValue."  ";
        
    ?>
</body>
</html>