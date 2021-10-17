<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>EJERCICIO 13</h1>
    <?php

        //Añadimos un elemento al final
        function addFifo(&$cola,$elementos){

            foreach($elementos as $elemento){

                array_push($cola, $elemento);
            }

        }

        //Eliminamos el ultimo elemento
        function quitarFifo(&$fifo){

            array_pop($fifo);
        }

        //Mostramos el array por pantalla
        function mostrarFifo($fifo){

            foreach($fifo as $valor){

                echo $valor;
    
            }
    
        }
        $fifo = array(1,2,3,4);

        addFifo($fifo, array(5,6));
        quitarFifo($fifo);
        mostrarFifo($fifo);
        

    ?>
</body>
</html>