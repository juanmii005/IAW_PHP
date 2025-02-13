<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9 PHP</title>
</head>
<body>
    <h1>Remplazar texto en cadena</h1>


    <?php
            $cadena1 = "China tiene una barbaridad de habitantes";
            $remplazo = str_replace($cadena1, "China no mola nada");

            echo $remplazo;
    
    ?>


</body>
</html>
