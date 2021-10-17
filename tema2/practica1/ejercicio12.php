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

        $diccionario = array(

            "cafe" => "coffee",
            "guitarra" => "guitar",
            "lapiz" => "pencil",
            "llave" => "key",
            "pelo" => "hair",
            "letra" => "letter",
            "teclado" => "keyboard",
            "felicidad" => "happiness",
            "mapa" => "map",
            "colegio" => "school",
            "lampara" => "lamp",
            "sol" => "sun",
            "rey" => "king",
            "nube" => "cloud",
            "habitacion" => "room",
            "guantes" => "gloves",
            "mono" => "monkey",
            "pared" => "wall",
            "silla" => "chair",
            "zapato" => "shoe",

        );

        ?>
        <form action="ejercicio12.php" method="post">
            <input type="text" id="palabra" name="palabra" placeholders="Inserta una palabra"/>
            <br>
            <input type="submit" value="Traducir"/>
        </form>
        <?php

        $palabra = $_POST['palabra'];

        if(array_key_exists($palabra,$diccionario)){

            echo "La traducción de la palabra ".$palabra." es: ".$diccionario[$palabra];

        }
        
    ?>
</body>
</html>