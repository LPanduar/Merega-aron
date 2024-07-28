<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Encuesta</title>
</head>
<body>
<div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="buscar_encuestas.php">Buscar Encuestas</a>
    <a href="preferencias.php">Preferencias</a>
    <a href="php/logout.php">Cerrar Sesión</a>
</div>

<div class="container">
    <?php
    require 'php/database.php';
    $id_encuesta = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM encuestas WHERE id = ?");
    $stmt->execute([$id_encuesta]);
    $encuesta = $stmt->fetch();

    if ($encuesta) {
        echo "<h2>" . htmlspecialchars($encuesta['nombre']) . "</h2>";
        echo "<p>" . htmlspecialchars($encuesta['pregunta']) . "</p>";
        echo "<img src='" . htmlspecialchars($encuesta['imagen']) . "' alt='Imagen de Encuesta'>";

        $stmt = $pdo->prepare("SELECT * FROM opciones WHERE id_encuesta = ?");
        $stmt->execute([$id_encuesta]);
        $opciones = $stmt->fetchAll();

        echo "<form action='php/votar.php' method='POST'>";
        foreach ($opciones as $opcion) {
            echo "<label><input type='radio' name='opcion_id' value='" . $opcion['id'] . "'> " . htmlspecialchars($opcion['opcion']) . "</label><br>";
        }
        echo "<button type='submit'>Votar</button>";
        echo "</form>";
    } else {
        echo "Encuesta no encontrada.";
    }
    ?>
</div>
</body>
</html>