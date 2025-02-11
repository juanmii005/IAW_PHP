<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 29 PHP</title>
</head>
<body>
    <h3>Los 100 primeros numeros primos</h1>

    <?php
        for ($num = 1; $num <= 100; $num++) {
            $es_primo = true;
            if ($num < 2) {
                $es_primo = false;
            } 
            
            else {
            for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $es_primo = false;
                break;
                    }
                }
            }
            if ($es_primo) {
                echo $num . " ";
            }
}
?>
</body>
</html>