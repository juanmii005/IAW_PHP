<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 PHP</title>
</head>
<body>
    <h1>Comprobar variables</h1>


    <?php
            $var = "VARIABLE DEFINIDA";
            $var1;

            if (isset($var)) {
                echo "<br>La variable está definida y dice $var";
            } else {
                echo "<br>La variable no esta definida";
            }

            if (isset($var1)) {
                echo "<br>La variable 2 está definida y dice $var1";
            } else {
                echo "<br>La variable 2 no esta definida";
            }
    ?>
</body>
</html>
