<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 35 PHP</title>
</head>
<body>
<h1>CONVERTIR DE DECIMAL A BINARIO</h1>
    <form method="get">
        <input type="number" name="numero1" placeholder="ESCRIBE UN NUMERO DECIMAL">
        <button type="submit" name="boton">CALCULAR</button>
    </form>

<?php
    $numero1 = floatval($_GET['numero1'] ?? 0);
    $binario = '';
    $temp = $numero1;
        while ($temp > 0) {
            $binario = ($temp % 2) . $binario;
            $temp = intdiv($temp, 2);
        }
    echo "<p>El número $numero1 en binario es: $binario</p>";
?>

</body>
</html>
