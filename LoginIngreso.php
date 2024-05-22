
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
                    <!-- Formulario de inicio de sesión -->
                    <form action="php/login_usuario_be.php"  method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Username" name="username">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button type="submit" name="entrar">Entrar</button>
                    </form>
                    
                <!-- Registro -->
                <!-- Formulario de Registro -->
                <form id="Formulario_Registro" action="php/registro_usuario_be.php" method="POST"
                    class="formulario__registrar">
                    <h2>Información personal</h2>
                    <div id="Registro_Personal">
                    <input type="text" placeholder="DNI" name="dni" required>
                    <input type="text" placeholder="Nombre(s)" name="nombre_completo" required>
                    <input type="text" placeholder="Apellido(s)" name="apellido" required>
                    <input type="text" placeholder="Teléfono" name="telefono" required>
                    <input type="text" placeholder="Dirección" name="direccion" required>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <select name="genero" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>

                    <input type="date" placeholder="Fecha de Nacimiento" name="fechaNacimiento" required>
                    <button type="botton" onclick="mostrarSiguiente()"> Siguiente</button>
                    </div>
                    <div id="Registro_Cuenta" style="display:none;">
                            <h2>Crea tu usuario</h2>
                            <input type="text" placeholder="Username" name="usuario" required/>
                            <input type="password" placeholder="Contraseña" name="contraseña" required/>
                            <button type="summit" name="registrar">Registrarme</button>
                        </div>
                </form>
            </div>
        </div>
    </main>
    <script src="Scripts/ComponenteJsLogin.js"></script>
</body>

</html>