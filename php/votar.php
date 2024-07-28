<?php
require 'database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
    $opcion_id = $_POST['opcion_id'];

    $stmt = $pdo->prepare("INSERT INTO votos (id_usuario, id_opcion) VALUES (?, ?)");
    if ($stmt->execute([$usuario_id, $opcion_id])) {
        header("Location: ../index.php");
    } else {
        echo "Error al registrar el voto.";
    }
}
?>
