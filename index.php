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
    <link rel="icon" type="image/svg+xml" href="Images/Icon-Valhalla.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="script.js"></script>
</head>
<body> 
    <header class="nav">
        <div class="navbar">
        <img src="Images/Icon-Valhalla.png" alt="" class="logo">
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

<div class="ttl"><div class="ttl1"></div><h2>¿Quiénes somos?</h2><div class="ttl1"></div></div>
<div class="container">
<div id="row" class="box">
    <p><span>Coach Daniel</span><br>Profesional en Ciencias del Movimiento Humano, el Deporte y la Recreacion de la Universidad de Costa Rica</p>
    <div class="cover">
        <img src="Images/Daniel-Photo.jpeg" alt="">
    </div>
</div>
    <p>"Valhalla Gym Training es un centro de acondicionamiento físico que se enfoca en el desarrollo integral del ser humano a través de las diferentes áreas de la actividad física, sean estas de la recreación, el deporte y la salud, a través de la prescripción de ejercicios que se desarrollan ética, profesional y objetivamente según las necesidades de cada persona."</p>
</div>
<div class="ttl"><div class="ttl2"></div><h2>¿Qué buscamos?</h2><div class="ttl2"></div></div>
<div class="container">
    <p>"Nuestro objetivo es ser el mejor centro de acondicionamiento físico de todo Occidente, destacándonos por la calidad de nuestros servicios y el enfoque integral de nuestros programas. A través del desarrollo de planes interdisciplinarios, buscamos adaptarnos a las necesidades de la comunidad naranjeña y sus alrededores, promoviendo un estilo de vida saludable y ofreciendo un espacio inclusivo donde cada persona pueda alcanzar sus metas físicas con el apoyo de profesionales capacitados."</p>
<div id="row" class="box">
    <p><span>Coach Mario</span><br>Profesional en Educacion Fisica, Deporte y Recreacion<br><br>Maestria en Ciencias de la Educacion en enfasis en Administracion </p>
    <div class="cover">
        <img src="Images/Mario-Photo.jpeg" alt="">
    </div>
</div>
</div>
</section>
<section class="training" id="programa_de_entrenamiento">
<h2>Programas de Entrenamiento</h2>
<div class="container">
    <div id="row">
        <h3>Programas Generales:</h3>
        <h4>Entrenamiento funcional y contra resistencia:</h4>
        <p>Son clases grupales enfocadas en ejercicios de alta intensidad, peso libre y pliométricos, es decir, aquellos que se realizan utilizando el propio peso corporal junto con otros elementos como mancuernas, barras, balones medicinales y discos. Su objetivo es desarrollar capacidades y destrezas físicas, incluyendo movilidad, flexibilidad, resistencia cardiovascular y neuromuscular. Además, contribuyen al desarrollo de la fuerza, la potencia, la estabilidad y las capacidades coordinativas de las personas.</p>
        <br><h4>Entrenamiento de pesas y fuerza:</h4>
        <p>En este programa, el entrenamiento se adapta a los objetivos individuales de cada persona. Una característica distintiva de esta metodología es el uso de máquinas asistidas y poleas, que permiten un trabajo más focalizado en los diferentes grupos musculares. Esto facilita la consecución de objetivos como la hipertrofia muscular, el desarrollo de la fuerza, la resistencia muscular, así como la tonificación y definición de la musculatura.</p>
        <div class="img-program1"></div>
    </div>
    <div id="row">
        <h3>Entrenamientos Personalizados</h3>
        <h4>Rehabilitación física:</h4>
        <p>Nos especializamos en el tratamiento de lesiones causadas por traumatismos, ayudando a cada persona a recuperar su movilidad, funcionalidad y calidad de vida a través de ejercicios específicos y terapias adaptadas a sus necesidades. Nuestro enfoque combina técnicas de fortalecimiento, flexibilidad y reeducación postural para garantizar una recuperación segura y efectiva.</p>
        <h4>Rendimiento deportivo:</h4>
        <p>Diseñamos programas de entrenamiento personalizados según las exigencias técnicas y tácticas de cada disciplina deportiva. Nuestro objetivo es optimizar el desempeño de los atletas, mejorando su fuerza, resistencia, velocidad y coordinación. A través de metodologías avanzadas, buscamos potenciar sus capacidades físicas y minimizar el riesgo de lesiones, permitiéndoles alcanzar su máximo rendimiento.</p>
        <h4>Tratamiento de patologías a través del ejercicio:</h4>
        <p>Implementamos planes de entrenamiento especializados para el manejo de enfermedades crónicas como diabetes, hipertensión y dislipidemia, así como otras condiciones relacionadas con el síndrome metabólico. A través de la actividad física guiada, promovemos la mejora de la salud cardiovascular, el control del peso corporal y el bienestar general, siempre bajo la supervisión de profesionales capacitados.</p>
        <div class="img-program2"></div>
    </div>
</div>
</section>
<section class="instalaciones" id="instalaciones">
<h2>Nuestras Instalaciones</h2>
<div class="container">
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/7.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/2.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/9.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/11.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/10.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/12.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/13.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/3.jpeg" alt="">
    </div>
    <div class="row">
    <img class="instalaciones-img" src="Images/Galeria/5.jpeg" alt="">
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
