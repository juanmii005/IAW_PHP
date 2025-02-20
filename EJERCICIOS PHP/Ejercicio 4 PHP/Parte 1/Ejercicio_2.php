<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 PHP</title>
</head>
<body>
<form method="get">
        <input type="text" name="numero1" placeholder="Escribe un numero">
        <br><br>
        <input type="text" name="numero2" placeholder="Escribe un numero">
        <br><br>
        <button type="submit" name="boton">Numero Random</button>
    </form>

    <?php
        $numero1 = $_GET["numero1"] ?? 1;
        $numero2 = $_GET["numero2"] ?? 1;
        $numeroAleatorio = rand($numero1, $numero2);
        echo "<br>El número aleatorio es: " . $numeroAleatorio;
    ?>
</body>
</html>