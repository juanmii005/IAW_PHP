<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 20 PHP</title>
</head>
<body>
    <form method="get">
        <input type="text" name="numero1" placeholder="Escribe el primer número">
        <input type="text" name="numero2" placeholder="Escribe el segundo número">
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php
        $numero1 = floatval($_GET['numero1'] ?? 0);
        $numero2 = floatval($_GET['numero2'] ?? 0);

        $a = $numero1;
        $b = $numero2;

        while ($b != 0) {
            $resto = $a % $b;
            $a = $b;
            $b = $resto;
        }

            echo "<p>El MCD de $numero1 y $numero2 es: $a</p>";

   
    ?>
</body>
</html>
