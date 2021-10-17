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

        $alumnos = array(

            "nombre" => "Manuel Campoy Modesto",  
            "lengua" => 5, 
            "matematicas" => 7,
            "fisica" => 6, 
            "quimica" => 7,
            "biologia" => 8, 
            "filosofia" => 7,
            "historia" => 9, 
            "frances" => 7,
            "ingles" => 3, 
            "programacion" => 5,

        );

        
        foreach()
        echo "Notas de " . $alumnos["nombre"] . ": ". $alumnos["historia"] ."<br>";

    ?>
</body>
</html>