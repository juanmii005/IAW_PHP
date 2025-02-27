<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 PHP</title>
</head>
<body>
    <h1>ÁREA CIRCULO</h1>
    <form method="get">
        <input type="text" name="numero" placeholder="Numero">
        <input type="text" name="exponente" placeholder="Exponente">
        <br><br>
        <button type="submit" name="boton">Calcular</button>
    </form>
    <?php
        $numero = $_GET["numero"] ?? 1;
        $exponente = $_GET["exponente"] ?? 1;
        $resultado = numXexpo($radio);
        function numXexpo($radio) {return pi() * pow($radio, 2);}
        echo "<br>El área del círculo con radio $radio es: $area";
    ?>
</body>
</html>