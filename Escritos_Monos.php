<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "icon" href = "./favicon2.png" type = "image/png">
</head>
<body>
    <?php
    //Obtencion de datos
            $palabras  = (isset($_POST["palabras"]) && $_POST["palabras"] != NULL) ? $_POST["palabras"]: false;
            $modo = (isset($_POST["modo"]) && $_POST["modo"] != NULL) ? $_POST["modo"]: false;
            $zona_horaria = (isset($_POST["zona_horaria"]) && $_POST["zona_horaria"] != NULL) ? $_POST["zona_horaria"]: false;

    //Comprobando
      // /*
        echo $palabras."<br>";
        echo $modo."<br>";
        echo $zona_horaria."<br>";

    // */
    
    ?>
</body>
</html>