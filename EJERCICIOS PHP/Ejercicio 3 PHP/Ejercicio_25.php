<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24 PHP</title>
</head>
<body>
    <form method="get">
        <input type="text" name="numeroalfabeto" placeholder="Escribe un numero">
        <br><br>
        <input type="text" name="numero" placeholder="Escribe un numero">
        <br><br>
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php
        $numeroalfabeto = $_GET['numeroalfabeto'] ?? 1;
        $numero = $_GET['numero'] ?? 1;

        switch ($numeroalfabeto) {
            case "1";
                echo "<br>La primera letra es la A";
            break;
            case "2";
                echo "<br>La segunda letra es la B";
            break;
            case "3";
                echo "<br>La tercera letra es la C";
            break;
            case "4";
                echo "<br>La cuarta letra es la D";
            break;
            case "5";
                echo "<br>La quinta letra es la E";
            break;
            case "6";
                echo "<br>La sexta letra es la F";
            break;
            case "7";
                echo "<br>La septima letra es la G";
            break;
            case "8";
                echo "<br>La octava letra es la H";
            break;
            case "9";
                echo "<br>La novena letra es la I";
            break;
            default;
                echo "<br>No es un numero valido";
        }

        switch ($numero) {
            case "I";
                echo "<br>I = 1";
            break;
            case "V";
                echo "<br>V = 5";
            break;
            case "X";
                echo "<br>X = 10";
            break;
            case "L";
                echo "<br>L = 50";
            break;
            case "C";
                echo "<br>C = 100";
            break;
            case "D";
                echo "<br>D = 500";
            break;
            case "M";
                echo "<br>M = 1000";
            break;
            default;
                echo "<br>No es un número romano válido";
        }
    ?>
</body>
</html>