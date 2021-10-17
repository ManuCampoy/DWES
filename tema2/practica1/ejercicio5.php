<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        function unidades($numero){

            switch($numero){

                case 1:
                    $numeroEnLetras="Uno";
                    break;
                case 2:
                    $numeroEnLetras="Dos";
                    break;
                case 3:
                    $numeroEnLetras="Tres";
                    break;
                case 4:
                    $numeroEnLetras="Cuatro";
                    break;
                case 5:
                    $numeroEnLetras="Cinco";
                    break;         
                case 6:
                    $numeroEnLetras="Seis";
                    break;
                case 7:
                    $numeroEnLetras="Siete";
                    break;
                case 8:
                    $numeroEnLetras="Ocho";
                    break;
                case 9:
                    $numeroEnLetras="Nueve";
                    break;
            }

            return $numeroEnLetras;
        }

        function decenas($numero){

            
            if($numero >= 10 && $numero <= 19){

            }
            if($numero >= 20 && $numero <= 29){

                $numeroEnLetras = "Veinti ";
                if ($numero > 20){

                     $numeroEnLetras = $numeroEnLetras."Y ".(unidades($numero - 20));
           
                }
            }
            if($numero >= 30 && $numero <= 39){

                $numeroEnLetras = "Treinta ";
                if ($numero > 30){

                    $numeroEnLetras = $numeroEnLetras."Y ".(unidades($numero - 30));

                }
               
            }
            
            if($numero >= 40 && $numero <= 49){

                $numeroEnLetras = "Cuarenta ";
                if ($numero > 40){

                    $numeroEnLetras = $numeroEnLetras."Y ".(unidades($numero - 40));
                    
                }
               
            }
            
            if($numero >= 50 && $numero <= 59){

                $numeroEnLetras = "Cincuenta ";
                if ($numero > 50){

                    $numeroEnLetras = $numeroEnLetras."Y ".(unidades($numero - 50));
                    
                }
               
            }
            
            
            if($numero >= 60 && $numero <= 69){

                $numeroEnLetras = "Sesenta ";
                if ($numero > 60){

                    $numeroEnLetras = $numeroEnLetras."Y ".(unidades($numero - 60));
                    
                }
               
            }
            
            
            if($numero >= 70 && $numero <= 79){

                $numeroEnLetras = "Setenta ";
                if ($numero > 40){

                    $numeroEnLetras = $numeroEnLetras."Y ".(unidades($numero - 70));
                    
                }
               
            }

            
            
            if($numero >= 80 && $numero <= 89){

                $numeroEnLetras = "Ochenta ";
                if ($numero > 80){

                    $numeroEnLetras = $numeroEnLetras."Y ".(unidades($numero - 80));
                    
                }
               
            }

            
            
            if($numero >= 90 && $numero <= 99){

                $numeroEnLetras = "Noventa ";
                if ($numero > 90){

                    $numeroEnLetras = $numeroEnLetras."Y ".(unidades($numero - 90));
                    
                    return $numeroEnLetras;
                }
               
            }
        }
    ?>
</head>
<body>
    
    <H1>EJERCICIO 5</H1>
    <?php

        $numeroEnLetras = 10;
        echo decenas($numeroEnLetras);
        
    ?>
</body>
</html>