<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9 PHP</title>
</head>
<body>
    <?php
       $var = 1;

       echo "La tabla del $var: <br>";

       while ($multiplicacion <= 10)
   {
       echo "$var x $multiplicacion = ".($var * $multiplicacion)."<br>";
       $multiplicacion ++;
   }
    ?>
</body>
</html>