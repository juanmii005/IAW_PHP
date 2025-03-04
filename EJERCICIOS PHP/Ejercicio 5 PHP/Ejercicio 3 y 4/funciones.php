<?php
include_once 'conexion.php';

function registro($conn, $codigo, $nombre, $numero_creditos) {
    $comprobacion = mysqli_query($conn, "SELECT codigo FROM asignaturas WHERE codigo = '$codigo'");
    
    if(mysqli_num_rows($comprobacion) > 0){
        echo "<center><h2>La asignatura no se ha introducido en la base de datos porque ya existe una con ese codigo</h2>";
        echo "<center><a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        $consulta = "INSERT INTO asignaturas (codigo, nombre, numero_creditos) VALUES ('$codigo', '$nombre', '$numero_creditos')";
        $registro = mysqli_query($conn, $consulta);
        
        if ($registro) {
            echo "<center><h2>La asignatura se ha introducido en la base de datos correctamente</h2>";
            echo "<center><a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
        } 

        return $registro;
    }
}

function registro_alumnos($conn, $dni, $nombre, $apellidos, $localidad, $año_inicio, $acceso) {
    $comprobacion = mysqli_query($conn, "SELECT dni FROM alumnos WHERE dni = '$dni'");

    if (mysqli_num_rows($comprobacion) > 0) {
        echo "<center><h2>El alumno ya esta registrado en la base de datos</h2>";
        echo "<center><a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
    } else {
        $consulta_alumnos = "INSERT INTO alumnos (dni, nombre, apellidos, localidad, año_inicio, acceso) VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$año_inicio', '$acceso')";
        $registrar_alumnos = mysqli_query($conn, $consulta_alumnos);

        if ($registrar_alumnos) {
            echo "<center><h2>El alumno se ha registrado en la base de datos correctamente</h2>";
            echo "<center><a href='inicio.html'>PULSA AQUI PARA VOLVER A LA PÁGINA PRINCIPAL</a>";
        }

        return $registrar_alumnos;

    }

}

?>