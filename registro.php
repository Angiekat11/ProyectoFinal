<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="css/style.css">


<div class="container">
    <h2>Registro de Usuario</h2>

    <!-- Formulario de Registro -->
    <form action="procesar_registro.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>

        <label for="confirmar_contrasena">Confirmar Contraseña:</label>
        <input type="password" name="confirmar_contrasena" required>

        <label for="edad">Edad:</label>
        <input type="number" name="edad">

        <button type="submit">Registrarse</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
