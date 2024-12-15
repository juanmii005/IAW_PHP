<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 26 PHP</title>
</head>
<body>
    <?php 

        $antiguosueldo = 1500;
        $sueldo13 = $antiguosueldo * 13 / 100;
        $sueldo26 = $antiguosueldo * 26 / 100;
        $sueldo39 = $antiguosueldo * 39 / 100;
        $nuevosueldo13 = $antiguosueldo + $sueldo13;
        $nuevosueldo26 = $antiguosueldo + $sueldo26;
        $nuevosueldo39 = $antiguosueldo + $sueldo39;

        echo "El nuevo sueldo con 13% es $nuevosueldo13 €<br>";
        echo "El nuevo sueldo con 26% es $nuevosueldo26 €<br>";
        echo "El nuevo sueldo con 39% es $nuevosueldo39 €<br>"; 
    ?>
</body>
</html>