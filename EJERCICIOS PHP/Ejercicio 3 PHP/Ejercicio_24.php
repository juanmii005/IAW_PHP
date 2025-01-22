<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24 PHP</title>
</head>
<body>
    <form method="get">
        <input type="text" name="numero" placeholder="Escribe un numero">
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php
        $numero = floatval($_GET['numero'] ?? 1);

        switch ($numero) {
            case "1";
                echo "<br>El primer mes es Enero";
            break;
            case "2";
                echo "<br>El segundo mes es Febrero";
            break;
            case "3";
                echo "<br>El tercer mes es Marzo";
            break;
            case "4";
                echo "<br>El cuarto mes es Abril";
            break;
            case "5";
                echo "<br>El quinto mes es Mayo";
            break;
            case "6";
                echo "<br>El sexto mes es Junio";
            break;
            case "7";
                echo "<br>El septimo mes es Julio";
            break;
            case "8";
                echo "<br>El octavo  mes es Agosto";
            break;
            case "9";
                echo "<br>El noveno mes es Septiembre";
            break;
            case "10";
                echo "<br>El décimo mes es Octubre";
            break;
            case "11";
                echo "<br>El undécimo mes es Noviembre";
            break;
            case "12";
                echo "<br>El duodécimo mes es Diciembre";
            break;
            default;
                echo "<br>Numero no valido";
        }
    ?>
</body>
</html>
