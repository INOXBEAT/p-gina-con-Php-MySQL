<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <header class="header">

        <div class="menu container">
            
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#" class="logo">logo</a></li>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#Nosotros">Nosotros</a></li>
                    <li><a href="#Servicios">Servicios</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                </ul>
            </nav>
        </div> 

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical Center</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Nam aliquid et cupiditate ut modi illo adipisci iste ex consequatur perferendis 
                    laboriosam quisquam eveniet facilis pariatur, sunt sint eum natus accusantium?
                </p>
                <a href="#" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="images/left.png" alt="">
            </div>
        </div>

    </header>

    <section id="Nosotros" class="about container">

        <div class="about-img">
            <img src="images/about.png" alt="about">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Accusamus hic qui odio aut. Vitae veniam iusto nemo officia 
                sed accusamus iste placeat ad enim est aspernatur rem 
                ratione, magnam laudantium.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Fugiat voluptatum ex distinctio rem modi, ipsa, at culpa id 
                quaerat sit tenetur voluptatem, nisi aut accusamus laboriosam? 
                Nesciunt doloremque quae asperiores.
            </p>
        </div>

    </section>
    
    <main id="Servicios" class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>pediatria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>ginecologia</h3>
            </div>
                
            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>dermatologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>cardiologia</h3>
            </div>

        </div>
    </main>


    <section id="Contacto" class="formulario container">
        <form method="post" autocomplete="off">
            <h2>Agenda consulta</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunction()">        
            </div>

        </form>
    </section>

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#Nosotros">Nosotros</a></li>
                    <li><a href="#Servicios">Servicios</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                </ul>
            </div>

        </div>

    </footer>

    <?php
        include("send.php");    
    ?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/pagina"
        }
    </script>

</body>
</html>