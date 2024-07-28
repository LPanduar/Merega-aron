<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($password, $usuario['contrasena'])) {
        session_start();
        $_SESSION['usuario_id'] = $usuario['id'];
        header("Location: ../index.php");
    } else {
        echo "Email o contraseña incorrectos.";
    }
}
?>
