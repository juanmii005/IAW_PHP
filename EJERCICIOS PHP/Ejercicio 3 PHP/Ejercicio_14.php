<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14 PHP</title>
</head>
<body>
    <form method = "get">
        <input type = "text" name = "base" placeholder="Escribe la base">
        <input type = "text" name = "altura" placeholder="Escribe la altura">
        <button type = "sumbit" name = "boton">Calcular</button>
    </form>
    <?php 
    $base = floatval($_GET['base'] ?? 0);
    $altura = floatval($_GET['altura'] ?? 0);
    $area = $base * $altura;

    echo "<br>El area del rectangulo es $area";
    ?>
</body>
</html>