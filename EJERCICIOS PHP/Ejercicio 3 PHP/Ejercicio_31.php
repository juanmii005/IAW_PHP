<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 31 PHP</title>
</head>
<body>
    <h1>NOTAS DE ALUMNOS</h1>
    <form method="get">
        <input type="text" name="numero1" placeholder="Escribe la nota 1">
        <br>
        <input type="text" name="numero2" placeholder="Escribe la nota 2">
        <br>
        <input type="text" name="numero3" placeholder="Escribe la nota 3">
        <br>
        <input type="text" name="numero4" placeholder="Escribe la nota 4">
        <br>
        <input type="text" name="numero5" placeholder="Escribe la nota 5">
        <br>
        <input type="text" name="numero6" placeholder="Escribe la nota 6">
        <br>
        <input type="text" name="numero7" placeholder="Escribe la nota 7">
        <br>
        <input type="text" name="numero8" placeholder="Escribe la nota 8">
        <br>
        <input type="text" name="numero9" placeholder="Escribe la nota 9">
        <br>
        <input type="text" name="numero10" placeholder="Escribe la nota 10">
        <br>
        <button type="submit" name="boton">Calcular</button>
    </form>

    <?php
    //if(empty isset)
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

    $arrayNotas = array($numero1
                        , $numero2
                        , $numero3                            
                        , $numero4
                        , $numero5
                        , $numero6
                        , $numero7
                        , $numero8
                        , $numero9
                        , $numero10                                                                                                                                                                                                    
                        );
    // los arrays se accede por posiciones, ejemplo, nº de lista tuya en clase
    // pero como buenos informáticos, la primera posición es la 0
    // es decir si hay 10 alumnos en clase vamos desde el 0 hasta el 9
    $avg = 0;
    $mayoresa7 = 0;
    $menoresa7 = 0;
    for ($i=0; $i < 10 ; $i++) 
    { 
        $nota = $arrayNotas[$i];//Accedemos a la nota del array, según valor de i
        if ($nota > 7) 
        {
            $mayoresa7++;
        }
        else
        {
            $menoresa7++;
        }
        $avg += $nota;
    }
    $avg /= 10;

    echo "<br>Media de notas: $avg <br>";
    echo "<br>Notas mayores a 7: $mayoresa7 <br>";
    echo "<br>Notas menores o iguales a 7: $menoresa7 <br>";
?>

</body>
</html>