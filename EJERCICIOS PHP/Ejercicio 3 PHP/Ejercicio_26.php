<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 26 PHP</title>
</head>
<body>
    <form method="get">
        <input type="text" name="numero1" placeholder="Escribe un numero">
        <br><br>
        <input type="text" name="operacion" placeholder="Escribe +, -, * o /">
        <br><br>
        <input type="text" name="numero2" placeholder="Escribe un numero">
        <br><br>
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php

        $numero1 = floatval($_GET['numero1'] ?? 1);
        $numero2 = floatval($_GET['numero1'] ?? 1);
        $operacion = $_GET['operacion'] ?? 1;

        switch ($operacion) {
            case '+':
                echo "<br>La suma de $numero1 y $numero2 es " . ($numero1 + $numero2);
                break;
            case '-':
                echo "<br>La resta de $numero1 y $numero2 es " . ($numero1 - $numero2);
                break;
            case '*':
                echo "<br>La multiplicacion de $numero1 y $numero2 es " . ($numero1 * $numero2);
                break;
            case '/':
                echo "<br>La division de $numero1 y $numero2 es " . ($numero1 / $numero2);
                break;
            default:
                echo "<br>No es una operacion valida";
            break;
        }
    ?>
</body>
</html>