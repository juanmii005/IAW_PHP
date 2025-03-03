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

function usuarios_registrados($conn, $Usuario, $Contrasena) {
    $consulta = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' and Contrasena = '$Contrasena'";
    $datos = mysqli_query($conn, $consulta);
    
    if(mysqli_num_rows($datos) > 0){
        while($row = mysqli_fetch_assoc($datos)){
            echo "Nombre" . $row['Nombre'] . " " . $row['Apellidos'];
            echo "DNI: " . $row['Dni'];
            echo "Localidad: " . $row['Localidad'];
            echo "Centro de Estudio: " . $row['Centro_de_Estudio'];
        }
    } else {
        echo "Usuario no encontrado en la base de datos";
    }
    
    return $datos;
}
?>