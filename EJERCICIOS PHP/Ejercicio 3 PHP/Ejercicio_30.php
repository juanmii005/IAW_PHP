<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 30 PHP</title>
</head>
<body>
    <form method="get">
        <input type="text" name="numero1" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero2" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero3" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero4" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero5" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero6" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero7" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero8" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero9" placeholder="Escribe un numero">
        <a>+</a>
        <input type="text" name="numero10" placeholder="Escribe un numero">
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php

        $numero1 = floatval($_GET['numero1'] ?? 1);
        $numero2 = floatval($_GET['numero2'] ?? 1);
        $numero3 = floatval($_GET['numero3'] ?? 1);
        $numero4 = floatval($_GET['numero4'] ?? 1);
        $numero5 = floatval($_GET['numero5'] ?? 1);
        $numero6 = floatval($_GET['numero6'] ?? 1);
        $numero7 = floatval($_GET['numero7'] ?? 1);
        $numero8 = floatval($_GET['numero8'] ?? 1);
        $numero9 = floatval($_GET['numero9'] ?? 1);
        $numero10 = floatval($_GET['numero10'] ?? 1);
        $resultado = $numero1 + $numero2 + $numero3 + $numero4 + $numero5 + $numero6 + $numero7 + $numero8 + $numero9 + $numero10;
        $resultado2 = round($resultado) / 10;
        echo "<br>El resultado es " . $resultado;
        echo "<br>La media es " . $resultado2;


    ?>
</body>
</html>