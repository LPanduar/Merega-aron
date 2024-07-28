<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio de Sesión</title>
</head>
<body>
<div class="container">
    <h2>Inicio de Sesión</h2>
    <form action="php/login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="registro.php">Registrarse</a>
    <a href="recuperar_password.php">Recuperar Contraseña</a>
</div>
</body>
</html>