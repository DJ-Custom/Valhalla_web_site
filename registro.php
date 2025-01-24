<?php

session_start();   

include ('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave']; 

    if(!empty($usuario) && !empty($clave)){

        $query = "INSERT INTO usuarios (usuario, clave, fecha) VALUES ('$usuario', '$clave', NOW())";

        mysqli_query($conn, $query);

        echo "Usuario registrado correctamente!.";
}
else{
    echo "Usuario o clave incorrecta!.";
}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="forms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Lexend&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/Images/Icon-Valhalla.png">
</head>
<body>
    <h1>Registro de Usuario</h1>
    <div class="container">
    <form method="post" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="clave">Clave:</label>
        <input type="password" id="clave" name="clave" required>
        <br>
        <input class="btn-form" type="submit" value="Registrar">
        <a class="btn-form" href="/index.php">Volver</a>
    </form>
    </div>
    <img src="/Images/Icon-Valhalla.png" alt="">
</body>
</html>
