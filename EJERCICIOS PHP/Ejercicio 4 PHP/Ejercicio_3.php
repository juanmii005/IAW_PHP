<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 PHP</title>
</head>
<body>
    <h1>Pasar un numero decimal a entero</h1>
    <form method="get">
        <input type="text" name="numero1" placeholder="Escribe un número decimal">
        <br><br>
        <button type="submit" name="boton">Convertir</button>
    </form>

    <?php
            $numerodecimal = $_GET["numero1"] ?? 1;
            $numeroentero = intval($numerodecimal);
            echo "<br>El $numerodecimal en número entero es:  $numeroentero";
    ?>
</body>
</html>
