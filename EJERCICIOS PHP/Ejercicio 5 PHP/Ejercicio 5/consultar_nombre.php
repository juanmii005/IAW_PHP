<?php

include "funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];

    $resultado = consultar_nombre($conn, $nombre);


}
?>