<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];

    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, contrasena, sexo, edad, telefono) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt->execute([$nombre, $email, $password, $sexo, $edad, $telefono])) {
        header("Location: ../login.php");
    } else {
        echo "Error al registrarse.";
    }
}
?>
