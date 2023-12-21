<?php
include('db/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario de contacto
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Insertar datos en la tabla de mensajes_contacto
    $sql = "INSERT INTO mensajes_contacto (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

    if ($conexion->query($sql) === TRUE) {
        echo "Mensaje enviado exitosamente. ¡Gracias por contactarnos!";
    } else {
        echo "Error al enviar el mensaje: " . $conexion->error;
    }
}

$conexion->close();

?>
<p></p> <a href="index.php">Regresar al Inicio</a></p>
