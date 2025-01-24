<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valhalla Gym</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/loginFormStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Lexend&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/assets/Images/Icon-Valhalla.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="assets/script.js"></script>
</head>
<body>
    <header class="nav">
    <div class="navbar">
        <img src="/assets/Images/Icon-Valhalla.png" alt="" class="logo">
        <div>
            <a href="#home">Inicio</a>
            <a href="#about">Acerca</a>
            <a href="#instalaciones">Instalaciones</a>
            <a href="#programa_de_entrenamiento">Programas</a>
        </div>
        <button id="showLogin">Iniciar Sesión</button>
    </div>
<!--     
    <div id="loginForm">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-10">
                <h3 class="text-center mb-4">LOGIN</h3>
                <p class="text-center ">Ingrese su usuario y contraseña</p>
                <br>
                <?php
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo "<p style='color:red'> Usuario y/o contraseña incorrectos...</p>";
                }
                ?>
                <form action="./includes/sesion/validarSesion.php" method="post">
                    <div class="form-group">
                        <label for="usuario" class="form-label fs-6">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="clave" class="form-label fs-6">Contraseña:</label>
                        <input type="password" class="form-control" id="clave" name="clave" required>
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </center>
                </form>
                <br>
                <center>
                    <p>¿Aun no tienes cuenta?<a href="registro.php"> Registrar</a></p>
                </center>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div> -->
</header>
<section class="home" id="home">
<h1 class="h1">Valhalla Gym</h1>
</section>
<!-- Additional content omitted for brevity -->
</body>
</section class="about" id="about">
<div class="container">
<div id="row" class="box">
    <p>Coach Daniel</p>
    <div class="cover">
        <img src="/assets/Images/3d-gym-equipment_23-2151114163.avif" alt="">
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
        <img src="/assets/Images/3d-gym-equipment_23-2151114163.avif" alt="">
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
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
</div>
<div class="Lol">
<a href="#" class="load_videos">YouTube</a>
</div>
</section>
    
<section>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-10">
                <h3 class="text-center mb-4">LOGIN</h3>
                <p class="text-center ">Ingrese su usuario y contraseña</p>
                <br>
                <?php
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo "<p style='color:red'> Usuario y/o contraseña incorrectos...</p>";
                }
                ?>
                <form action="./includes/sesion/validarSesion.php" method="post">
                    <div class="form-group">
                        <label for="usuario" class="form-label fs-6">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for=" password" class="form-label fs-6">Contraseña:</label>
                        <input type="password" class="form-control" id="clave" name="clave" required>
                    </div>
                    <br>
                    <center> <button type="submit" class="btn btn-primary ">Iniciar Sesión</button></center>
                </form>
                <br>
                <center>
                    <p>¿Aun no tienes cuenta?<a href="registro.php"> Registrar</a></p>
                </center>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            </section>
    <script src="assets/script.js"></script>
<footer>
    <div class="footer-container">
        <div class="social-media">
            <h3>Síguenos en:</h3>
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="contact-info">
            <h3>Contacto:</h3>
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
