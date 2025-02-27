<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 PHP</title>
</head>
<body>
    <h1>ÁREA CIRCULO</h1>
    <form method="get">
        <input type="text" name="radio" placeholder="Escribe">
        <br><br>
        <button type="submit" name="boton">Calcular</button>
    </form>
    <?php
        $radio = $_GET["radio"] ?? 1;
        $area = areaCirculo($radio);
        function areaCirculo($radio) {return pi() * pow($radio, 2);}
        echo "<br>El área del círculo con radio $radio es: $area";
    ?>
</body>
</html>