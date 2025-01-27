<?php
session_start();
include 'db.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Entorno Valhalla</title>
    <link rel="stylesheet" href="private.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Lexend&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/Images/Icon-Valhalla.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://www.youtube.com/iframe_api"></script> <!-- Added YouTube IFrame API -->
    <script src="assets/script.js"></script>
</head>
<body>
<header class="nav">
        <div class="navbar">
        <img src="/Images/Icon-Valhalla.png" alt="" class="logo">
        <div>
            <a class="nav-enlaces" href="#home">Inicio</a>
            <a class="nav-enlaces" href="#salud">Salud</a>
            <a class="nav-enlaces" href="#comentarios">Comentarios</a>
        </div>
        <a href="index.php" class="btn btn-primary">Volver⚔️</a>
        </div>
</header>
<section id="home" class="home">
    <h1>Hola <?php echo htmlspecialchars($_SESSION['usuario']); ?>!, bienvenido al<br><span>Entorno Valhalla</span></h1>
    <p></p>
</section>
<section id="salud" class="salud">
    <h2>Area de Salud</h2>
    <div id="player-container"></div>
    <div>
        <button id="prev-button">Anterior</button>
        <button id="next-button">Siguiente</button>
    </div>
</section>
<section id="comentarios" class="comentarios">
    <h2>Comunidad Valhalla</h2>
        <form method="POST" action="" class="comentar">
            <textarea name="comentario" placeholder="Escribe un comentario..." required></textarea>
            <button type="submit" name="comentar">Comentar</button>
        </form>
    <h3>Comentarios</h3>
        <?php
        // Insertar comentario principal
        if (isset($_POST['comentar']) && !empty(trim($_POST['comentario']))) {
        $comentario = $conn->real_escape_string(trim($_POST['comentario']));
        $usuario_id = $_SESSION['id'];

        $query = "INSERT INTO comentarios (comentario, usuario, reply, fecha) VALUES ('$comentario', $usuario_id, 0, NOW())";
            if (!$conn->query($query)) {
            echo "Error al comentar: " . $conn->error;
            }
        }

        // Insertar respuesta a comentario
        if (isset($_POST['reply']) && !empty(trim($_POST['comentario'])) && isset($_POST['reply_to'])) {
            $comentario = $conn->real_escape_string(trim($_POST['comentario']));
            $usuario_id = $_SESSION['id'];
            $reply_to = intval($_POST['reply_to']);

            $query = "INSERT INTO comentarios (comentario, usuario, reply, fecha) VALUES ('$comentario', $usuario_id, $reply_to, NOW())";
            if (!$conn->query($query)) {
            echo "Error al responder: " . $conn->error;
            }
        }

        // Mostrar comentarios principales
        $query = "SELECT comentarios.*, usuarios.usuario AS nombre_usuario 
                FROM comentarios 
                JOIN usuarios ON comentarios.usuario = usuarios.id 
                WHERE comentarios.reply = 0 
                ORDER BY comentarios.id DESC";

        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()) {
            echo "<div class='comentario'>";
            echo "<strong>" . htmlspecialchars($row['nombre_usuario']) . "</strong>";
            echo "<p>" . htmlspecialchars($row['comentario']) . "</p>";
            echo "<span>" . $row['fecha'] . "</span>";
            echo "<form method='POST' action=''>";
            echo "<textarea name='comentario' placeholder='Responde...' required></textarea>";
            echo "<input type='hidden' name='reply_to' value='" . $row['id'] . "'>";
            echo "<button type='submit' name='reply'>Responder</button>";
            echo "</form>";

            // Mostrar respuestas
            $reply_query = "SELECT comentarios.*, usuarios.usuario AS nombre_usuario 
                        FROM comentarios 
                        JOIN usuarios ON comentarios.usuario = usuarios.id 
                        WHERE comentarios.reply = " . $row['id'] . " 
                        ORDER BY comentarios.id ASC";

            $replies = $conn->query($reply_query);
            while ($reply = $replies->fetch_assoc()) {
                echo "<div class='respuesta'>";
                echo "<strong>" . htmlspecialchars($reply['nombre_usuario']) . "</strong>";
                echo "<p>" . htmlspecialchars($reply['comentario']) . "</p>";
                echo "<span>" . $reply['fecha'] . "</span>";
                echo "</div>";
            }

            echo "</div>";
        }
        ?>
</section>
<section class="logout"><a href="logout.php">Quitar Sesión</a></section>
<footer>
    <div class="footer-container">
        <div class="social-media">
            <h4>Síguenos en:</h4>
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="contact-info">
            <h4>Contacto:</h4>
            <p>Email: contacto@valhallagym.com</p>
            <p>Teléfono: +123 456 7890</p>
            <p>Ubicación: Calle Valhalla, 123, Ciudad Vikinga</p>
        </div>
        <div class="trademark">
            <p>&copy; 2023 Valhalla Gym. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

</body>
<script src="/script.js"></script>
</html>
