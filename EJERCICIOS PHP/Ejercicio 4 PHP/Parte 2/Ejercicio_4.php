<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 PHP</title>
</head>
<body>
    <h1>Calculadora básica con operaciones</h1>
    <?php
        function calculadora($num1, $num2, $operacion) {
            switch ($operacion) {
                case 'suma': 
                    return $num1 + $num2;
                case 'resta': 
                    return $num1 - $num2;
                case 'multiplicacion': 
                    return $num1 * $num2;
                case 'division': 
                    return $num2 != 0 ? $num1 / $num2 : 'Error: División por cero';
                default: return 'Operación no válida';
            }
        }
        $resultado = calculadora(8, 4, 'multiplicacion');
        echo "El resultado de 8 * 4 es: $resultado";
    ?>
</body>
</html>
