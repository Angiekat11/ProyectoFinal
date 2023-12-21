-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS psicologia_infantil;

-- Seleccionar la base de datos
USE psicologia_infantil;

-- Crear la tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    edad INT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
