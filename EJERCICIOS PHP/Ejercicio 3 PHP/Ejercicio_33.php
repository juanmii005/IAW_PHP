<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 33 PHP</title>
</head>
<body>
<h1>NUMERO PRIMOS COMPRENDIDOS ENTRE 2 NUMEROS</h1>
    <form method="get">
        <input type="text" name="numero1" placeholder="Escribe el numero 1">
        <br><br>
        <input type="text" name="numero2" placeholder="Escribe el numero 2">
        <br><br>
        <button type="submit" name="boton">Calcular</button>
    </form>

<?php
    $numero1 = floatval($_GET['numero1'] ?? 1);
    $numero2 = floatval($_GET['numero2'] ?? 1);

        for ($num = $numero1; $num <= $numero2; $num++) {
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
                echo "<br>" . $num . " ";
            }
}
?>
</body>
</html>