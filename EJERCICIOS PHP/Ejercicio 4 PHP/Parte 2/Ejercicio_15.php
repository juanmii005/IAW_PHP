<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 15 PHP</title>
</head>
<body>
    <h1>Función que invierte un número</h1>
    <?php
        function invertirNumero($num) {
            return (int)strrev((string)$num);
        }
        $resultado = invertirNumero(54321);
        echo "El número 54321 invertido es: $resultado";
    ?>
</body>
</html>
