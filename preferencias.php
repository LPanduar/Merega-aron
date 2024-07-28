<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Preferencias</title>
</head>
<body>
<div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="buscar_encuestas.php">Buscar Encuestas</a>
    <a href="preferencias.php">Preferencias</a>
    <a href="php/logout.php">Cerrar Sesión</a>
</div>

<div class="container">
    <h2>Preferencias de Usuario</h2>
    <form action="php/preferencias.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
            <option value="O">Otro</option>
        </select>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad">

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">

        <label for="foto">Foto de Perfil:</label>
        <input type="file" id="foto" name="foto">

        <button type="submit">Actualizar Preferencias</button>
    </form>
    <a href="index.php">Volver</a>
</div>
</body>
</html>
