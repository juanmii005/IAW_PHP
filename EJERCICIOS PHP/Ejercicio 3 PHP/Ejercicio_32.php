<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 32 PHP</title>
</head>
<body>
    <h1>MULTIPLOS DE 5 Y DE 3</h1>
    <form method="get">
        <input type="text" name="numero1" placeholder="Escribe el numero 1">
        <br>
        <input type="text" name="numero2" placeholder="Escribe el numero 2">
        <br>
        <input type="text" name="numero3" placeholder="Escribe el numero 3">
        <br>
        <input type="text" name="numero4" placeholder="Escribe el numero 4">
        <br>
        <input type="text" name="numero5" placeholder="Escribe el numero 5">
        <br>
        <input type="text" name="numero6" placeholder="Escribe el numero 6">
        <br>
        <input type="text" name="numero7" placeholder="Escribe el numero 7">
        <br>
        <input type="text" name="numero8" placeholder="Escribe el numero 8">
        <br>
        <input type="text" name="numero9" placeholder="Escribe el numero 9">
        <br>
        <input type="text" name="numero10" placeholder="Escribe el numero 10">
        <br>
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php
    $numero1 = floatval($_GET['numero1'] ?? 1);
    $numero2 = floatval($_GET['numero2'] ?? 1);
    $numero3 = floatval($_GET['numero3'] ?? 1);
    $numero4 = floatval($_GET['numero4'] ?? 1);
    $numero5 = floatval($_GET['numero5'] ?? 1);
    $numero6 = floatval($_GET['numero6'] ?? 1);
    $numero7 = floatval($_GET['numero7'] ?? 1);
    $numero8 = floatval($_GET['numero8'] ?? 1);
    $numero9 = floatval($_GET['numero9'] ?? 1);
    $numero10 = floatval($_GET['numero10'] ?? 1);

    $arrayNumeros = array($numero1, $numero2, $numero3, $numero4, $numero5, $numero6, $numero7, $numero8, $numero9, $numero10);

    $multiplosDe3 = 0;
    $multiplosDe5 = 0;
    $multiplosDeAmbos = 0;

    for ($i = 0; $i < 10; $i++) { 
        $num = $arrayNumeros[$i];

        if ($num % 3 == 0) {
            $multiplosDe3++;
        }
        if ($num % 5 == 0) {
            $multiplosDe5++;
        }
        if ($num % 3 == 0 && $num % 5 == 0) {
            $multiplosDeAmbos++;
        }
    }

    echo "<br>Números múltiplos de 3: $multiplosDe3 <br>";
    echo "<br>Números múltiplos de 5: $multiplosDe5 <br>";
    echo "<br>Números múltiplos de ambos: $multiplosDeAmbos <br>";
?>
</body>
</html>