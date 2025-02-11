<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 34 PHP</title>
</head>
<body>
<h1>DEVOLVER UN NUMERO DE 4 CIFRAS AL REVES</h1>
    <form method="get">
        <input type="number" name="numero1" min="1000" max="9999" placeholder="Numero">
        <button type="submit" name="boton">INVERTIR</button>
    </form>

<?php
    $numero1 = floatval($_GET['numero1'] ?? 1111);

    echo "<br>" . strrev($numero1);

?>
</body>
</html>