<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 PHP</title>
</head>
<body>
    <h1>Comprobar variables</h1>
    <form method="get">
        <input type="text" name="var" placeholder="Escribe">
        <br><br>
        <button type="submit" name="boton">Raíz cuadrada</button>
    </form>

    <?php
            $var = $_GET["var"] ?? 1;

            if (empty($var)) {
                echo "<br>La variable está vacía";
            } else {
                echo "<br>La variable dice $var";
            }
    ?>
</body>
</html>
