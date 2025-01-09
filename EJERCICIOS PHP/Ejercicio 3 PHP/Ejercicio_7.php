<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 PHP</title>
</head>
<body>
    <?php
       $var = 1;
       while ($var <= 30)
   {
       echo "$var al cuadrado es = ".pow($var, 2)."<br>";
       $var ++;
   }
    ?>
</body>
</html>