<?php 
    $medios = ["El Pais" => "https://www.elpais.com", 
                "Libertad Digital" => "https://www.libertaddigital.com/", 
                "El Mundo" => "https://www.elmundo.es/",
                "ABC" => "https://www.abc.es/", 
                "La Vanguardia" => "https://www.lavanguardia.com/"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 2</title>
</head>
<body>
    <ul>
    <li> <a href="<?= $medios['El Pais'] ?>">El País</a></li>
    <li> <a href="<?= $medios['Libertad Digital'] ?>">Libertad Digital</a></li>
    <li> <a href="<?= $medios['El Mundo'] ?> ">El Mundo</a></li>
    <li> <a href="<?= $medios['ABC'] ?>">ABC</a></li>
    <li> <a href="<?= $medios['La Vanguardia'] ?>">La Vanguardia</a></li>
    </ul>
</body>
</html>