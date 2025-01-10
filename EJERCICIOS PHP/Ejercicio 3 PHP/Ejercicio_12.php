<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11 PHP</title>
</head>
<body>
    <?php
       $var = 100;
       $resultado = 0;
       $cien = $var + 100;
       while ($var <= $cien)
   {
       $resultado += $var;
       $var ++;
   }

    echo "La suma de los 100 siguientes numeros a $var es $resultado";
    ?>
</body>
</html>