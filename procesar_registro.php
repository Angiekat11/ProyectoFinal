<?php
include('db/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Guardar la contraseña de forma segura
    $edad = $_POST['edad'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, correo, contrasena, edad) VALUES ('$nombre', '$correo', '$contrasena', $edad)";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso. ¡Bienvenido!";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }
}

$conexion->close();
?>
