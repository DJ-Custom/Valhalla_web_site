<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valhalla Gym</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Lexend&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/Images/Icon-Valhalla.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="assets/script.js"></script>
</head>
<body>
    <header class="nav">
        <div class="navbar">
        <img src="/Images/Icon-Valhalla.png" alt="" class="logo">
        <div>
            <a class="nav-enlaces" href="#home">Inicio</a>
            <a class="nav-enlaces" href="#about">Acerca</a>
            <a class="nav-enlaces" href="#instalaciones">Instalaciones</a>
            <a class="nav-enlaces" href="#programa_de_entrenamiento">Programas</a>
        </div>
        <a href="login.php" class="btn btn-primary">Entorno🛡️</a>
        </div>
    </header>
<section class="home" id="home">
<h1 class="h1">Valhalla Gym</h1>

</section>
<section class="about" id="about">
<h2>¿Quiénes somos?</h2>
<div class="container">
<div id="row" class="box">
    <p>Coach Daniel</p>
    <div class="cover">
        <img src="/Images/Daniel-Photo.jpeg" alt="">
    </div>
</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint similique eius aut animi quo natus, consectetur odio, assumenda optio adipisci aliquid itaque obcaecati veritatis nisi fugiat, maiores maxime! Ipsum tempore optio aliquid laborum rem fugit ipsa nulla aliquam debitis corrupti.</p>
</div>
<h2>¿Qué buscamos?</h2>
<div class="container">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quo facere reprehenderit eligendi, maiores sit necessitatibus fugiat quia iure accusamus eveniet velit explicabo harum sequi possimus sint voluptatum delectus perspiciatis. Ducimus consequuntur possimus consectetur, tenetur quasi aperiam? Eveniet quas laborum ullam.</p>
<div id="row" class="box">
    <p>Coach Mario</p>
    <div class="cover">
        <img src="/Images/Mario-Photo.jpeg" alt="">
    </div>
</div>
</div>
</section>
<section class="training" id="programa_de_entrenamiento">
<h2>Programas de Entrenamiento</h2>
<div class="container">
    <div id="row"></div>
    <div id="row"></div>
    <div id="row"></div>
</div>
</section>
<section class="instalaciones" id="instalaciones">
<h2>Nuestras Instalaciones</h2>
<div class="container">
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/7.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/2.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/9.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/4.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/10.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/1.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/8.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/3.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="/Images/Galeria/5.jpeg" alt="">
    </div>
</div>
<div class="Lol">
<a href="https://www.youtube.com/" class="load_videos">YouTube</a>
</div>
</section>
    <script src="assets/script.js"></script>
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
</html>
