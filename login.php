<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $clave = $conn->real_escape_string($_POST['clave']);

    if (!empty($usuario) && !empty($clave)) {
        $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            $user_data = $result->fetch_assoc();

            if ($user_data['clave'] === $clave) {
                $_SESSION['usuario'] = $user_data['usuario'];
                $_SESSION['id'] = $user_data['id'];
                header("Location: private.php");
                exit();
            } else {
                echo '<div class="mensaje">Usuario o clave incorrectos.</div>';
            }
        } else {
            echo '<div class="mensaje">Usuario o clave incorrectos.</div>';
        }
    } else {
        echo "Por favor, complete ambos campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="forms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Lexend&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/Images/Icon-Valhalla.png">
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <div class="container">
        <form method="POST" action="">
            <label for="usuario">Usuario:</label>
            <input class="input" type="text" id="usuario" name="usuario" required>
            <br>
            <div class="division"></div>
            <label for="clave">Clave:</label>
            <input class="input" type="password" id="clave" name="clave" required>
            <br>
            <input class="btn-form" type="submit" value="🪓Ingresar">
            <a class="btn-form" href="/index.php">Volver⚔️</a>
        </form>
    </div>
    <img src="/Images/Icon-Valhalla.png" alt="">
</body>
</html>
