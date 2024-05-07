
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/StyleLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Validacion de clientes</title>
</head>
<body>
     <main>
<div class="contenedor__todo">
    <div class="caja__trasera">
<div class="caja__trasera--login">
    <h3>¿Ya eres cliente vip?</h3>
    <p>Inicia sesion con tu cuenta de cliente para ingresar ala pagina</p>
    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
</div>
      <div class="caja__tracera--registrar">
        <h3>¿Aun no tines una cuenta?</h3>
        <p>Registrate para iniciar sesion</p>
        <button id="btn__registrarse">Registrarte</button>
      </div>
    </div>
    <!--Fomulario de registro login-->
   <div class="contenedor__login-registrar">
    <!--login-->
    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
        <h2>Inciar Sesion</h2>
        <input type="text" placeholder="Correo electronico" name="correo">
        <input type="password" placeholder="Contraseña" name=contrasena>
        <button>Entrar</button>
    </form>
    <!-- Registro -->
    <form action="php/registro_usuario_be.php" method="POST" class="formulario__registrar">
<h2>Registrarte</h2>
<input type="text" placeholder="Nombre completo" name="nombre_completo">
<input type="text" placeholder="Correo electronico" name="correo">
<input type="text" placeholder="Usuario" name="usuario">
<input type="password" placeholder="Contraseña" name="contrasena">
<button>Registrarme</button>
    </form>
   </div>
</div>
     </main>
     <script src="Scripts/ComponenteJsLogin.js"></script>
</body>
</html>