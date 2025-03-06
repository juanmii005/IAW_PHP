<?php

include "funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST["origen"];

    $resultado = consultar_origen($conn, $origen);


}
?>