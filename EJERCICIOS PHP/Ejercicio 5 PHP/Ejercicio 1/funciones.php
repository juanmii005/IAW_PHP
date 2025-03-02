<?php
include_once 'conexion.php';

function registro($conn, $dni, $nombre, $apellidos, $localidad, $centro_de_estudios, $usuario, $contraseña) {
    $consulta = "INSERT INTO usuarios (dni, nombre, apellidos, localidad, centro_de_estudios, usuario, contraseña) VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$centro_de_estudios', '$usuario', '$contraseña')";
    $final = mysqli_query($conn, $consulta);
    
    if($final){
        echo "Las metio bien";
    } else {
        echo "No va";
    }
    
    return $final;
}

