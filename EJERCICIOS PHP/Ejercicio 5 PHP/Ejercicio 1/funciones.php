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

function usuarios_registrados($conn, $usuario, $contraseña) {
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'";
    $datos = mysqli_query($conn, $consulta);

    if(mysqli_num_rows($datos) > 0){
        while($row = mysqli_fetch_assoc($datos)){
            echo "Nombre: " . $row['nombre'] . " " . $row['apellidos'] . "<br>";
            echo "DNI: " . $row['dni'] . "<br>";
            echo "Localidad: " . $row['localidad'] . "<br>";
            echo "Centro de Estudio: " . $row['centro_de_estudios'] . "<br>";
        }
    } else {
        echo "Usuario no encontrado en la base de datos";
    }
    
    return $datos;
}
?>