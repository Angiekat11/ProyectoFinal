<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Contacto</h2>

    <!-- Formulario de Contacto -->
    <form action="procesar_contacto.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required>

        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" rows="4" required></textarea>

        <button type="submit">Enviar Mensaje</button>
    </form>

    <!-- Enlace para invitar al usuario a registrarse -->
    <p>¿Quieres más información? <a href="registro.php">Regístrate</a> como opción de contacto.</p>
</div>

<?php include('includes/footer.php'); ?>
