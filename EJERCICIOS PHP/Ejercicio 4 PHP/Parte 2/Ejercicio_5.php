<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <form method="post" action="ejercicio5.php">
        <fieldset>
            <legend>Conversor monedas</legend>
            <select name="options" >
                <option name="op" value="0">libra</option>
                <option name="op" value="1">dolar</option>
                <option name="op" value="2">yen</option>
            </select>
            <br><br>
            cantidad
            <input type="text" name="num1" />
            <br><br>
            <input type="submit" value="enviar" name="enviar" />
     </fieldset>
    </form>


    <?php
    if (isset($_POST["enviar"])){
       $num1 = floatval($_POST['num1']);
       $op = $_POST['options'];
    }

    function cambio($num1, $op){
        switch($op){
            case 0:
                return ($num1 / 1.22);
            case 1:
                return ($num1 / 0.75);
            case 2:
                return ($num1 / 0.009);
        }
    }

    $resultado = cambio($num1,$op);

    echo $resultado;
    ?>

</body>
</html>
