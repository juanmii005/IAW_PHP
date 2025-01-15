<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 18 PHP</title>
</head>
<body>
    <form method = "get">
        <input type = "text" name = "numero1" placeholder="Escribe un numero ">
        <button type = "sumbit" name = "boton">Calcular</button>
    </form>
    <?php 
    $numero1 = floatval($_GET['numero1'] ?? 0);
    $var = 1;

    echo "<br>Has elegido el numero $numero1 <br>";
    echo "Los numeros impares menores que $numero1 son: <br>";

    while ($var < $numero1) {
        echo "<br>" . $var;
        $var += 2;
    }
    ?>
</body>
</html>