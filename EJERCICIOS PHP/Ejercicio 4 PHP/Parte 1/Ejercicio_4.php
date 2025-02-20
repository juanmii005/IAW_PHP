<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 PHP</title>
</head>
<body>
    <h1>Raíz cuadrada de un numero dado</h1>
    <form method="get">
        <input type="text" name="numero1" placeholder="Escribe un número">
        <br><br>
        <button type="submit" name="boton">Raíz cuadrada</button>
    </form>

    <?php
            $numero1 = $_GET["numero1"] ?? 1;
            $raiz = sqrt($numero1);
            echo "<br>La raíz cuadrada de $numero1 es $raiz";
    ?>
</body>
</html>
