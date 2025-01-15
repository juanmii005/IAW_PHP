<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 19 PHP</title>
</head>
<body>
    <form method = "get">
        <input type = "text" name = "edad" placeholder="Escribe la edad">
        <button type = "sumbit" name = "boton">Calcular</button>
    </form>
    <?php 
    $edad = floatval($_GET['edad'] ?? 0);

    if ($edad <= 14){
    echo "<br>Con $edad se encuentra en la Infancia";
    }

    elseif ($edad > 14 && $edad <= 26) {
    echo "<br>Con $edad se encuentra en la Juventud";
    }
    elseif ($edad > 26 && $edad <= 59) {
        echo "<br>Con $edad se encuentra en la Adultez";
        }
    else {
    echo "<br>Con $edad años es una persona mayor";
    }
    ?>
</body>
</html>