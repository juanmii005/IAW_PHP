<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10 PHP</title>
</head>
<body>
    <?php
       $var = 1;
       $resultado = 1;

       echo "Multiplicacion de los primeros 20 numeros naturales: <br>";

       while ($var <= 20) {
        if ($var < 20){
            echo "$var x ";
        }
        else {
            echo "$var = ";
        }
        $resultado *= $var;
        $var ++;
    }

        echo " $resultado";
    ?>
</body>
</html>