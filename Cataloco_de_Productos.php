<!DOCTYPE html>
<html lang="es">
<head>
    <!--Meta etiquetas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Titulo-->
    <title>STYLEGENIE | Página Principal</title>
    <!--Meta datos-->
    <meta name="description" content="Descubre estilo único en Stylegenie. Moda elegante y moderna para cada ocasión. ¡Explora y encuentra tu estilo con nosotros!">
    <!--MD Redes Sociales-->
    <meta property="og:title" content="STYLEGENIE | Página Principal">
    <meta property="og:description" content="Descubre estilo único en Stylegenie. Moda elegante y moderna para cada ocasión. ¡Explora y encuentra tu estilo con nosotros!">
    <meta property="og:image" content="">

    <!--Estilos-->
    <link rel="stylesheet" href="Estilos/StyleTienda_Ropa.css">
    <link rel="icon" href="ruta/a/favicon.ico"> <!--icon-->
    <link rel="apple-touch-icon" href="ruta/a/icono-movil.png"> <!--icon de móvil-->
    <meta name="theme-color" content="#FFFF00"> <!--color de barra de móvil-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
 
</head>
<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="header-logo">
            <img src="Imagenes/Logo.png" alt="Logo de STYLEGENIE">
            <h1>STYLEGENIE</h1>
        </div>
        <nav class="nav">
            <a href="carrito.php">Catálogo</a>
            <a href="blog.html">Blog</a>
            <a href="contacto.html">Contacto</a>
        </nav>
        <div class="header-search">
            <input type="text" placeholder="Buscar en STYLEGENIE">
            <button><img src="img/search.svg" alt="Buscar"></button>
        </div>
        <div class="header-options">
            <a href="login.html">Iniciar Sesión</a>
            <a href="favoritos.html"><img src="img/heart.svg" alt="Favoritos"></a>
            <a href="carrito.html"><img src="img/shopping-cart.svg" alt="Carrito de compras"><div>0</div></a>
        </div>
    </header>

    <!-- Redes Sociales -->
    <aside class="aside-redes">
        <a href="https://www.facebook.com/Stylegenie"><img class="facebook" src="img/facebook.svg" alt="Facebook"></a>
        <a href="https://www.instagram.com/Stylegenie"><img class="instagram" src="img/instagram.svg" alt="Instagram"></a>
        <a href="https://www.tiktok.com/@Stylegenie"><img class="tiktok" src="img/tiktok.svg" alt="TikTok"></a>
    </aside>

    <aside class="aside-wsp">
        <a href="https://wa.me/123456789"><img src="img/whatsapp-svgrepo-com.svg" alt="WhatsApp"></a>
    </aside>

    <!-- Catálogo de productos -->
    <div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">STYLEGENIE</h1>
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <h1 class="logo">STYLEGENIE</h1>
            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <button id="todos" class="boton-menu boton-categoria active"><i class="bi bi-hand-index-thumb-fill"></i> Todos los productos</button>
                    </li>
                    <li>
                        <button id="abrigos" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Abrigos</button>
                    </li>
                    <li>
                        <button id="camisetas" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Camisetas</button>
                    </li>
                    <li>
                        <button id="pantalones" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Pantalones</button>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito" href="./carrito.php">
                            <i class="bi bi-cart-fill"></i> Carrito <span id="numerito" class="numerito">0</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© 2024 STYLEGENIE</p>
            </footer>
        </aside>
        <main>
            <h2 class="titulo-principal" id="titulo-principal">Todos los productos</h2>
            <div id="contenedor-productos" class="contenedor-productos">
                <!-- Esto se va a rellenar con JS -->
            </div>
        </main>
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy;2024, STYLEGENIE</p>
    </footer>
    
    <!-- Scripts -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="Scripts/main.js"></script>
    <script src="Scripts/menu.js"></script>
</body>
</html>
