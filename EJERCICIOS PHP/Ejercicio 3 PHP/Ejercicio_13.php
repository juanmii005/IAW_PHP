<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13 PHP</title>
</head>
<body>
    <form action = "Ejercicio_13.php" method = "get">
        <input type = "text" name = "euros" placeholder="Escribe la cantidad en euros  ">
        <button type = "sumbit" name = "boton">Calcular</button>
    </form>
    <?php 
    $euros = floatval($_GET['euros']);
    $cambio = 1.02;
    $dolares = $euros * $cambio;

    echo "<br>$euros euros son $dolares dólares";
    ?>
</body>
</html>