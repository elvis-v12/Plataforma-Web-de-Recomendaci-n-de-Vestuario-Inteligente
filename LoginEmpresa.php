<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso Gestion de inventario</title>
   <link rel="stylesheet" href="Estilos/StyleLoginEmpresa.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
    <div class="Login_bm">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="from_box login">
          <h2>Login</h2>
          <form action="#" >
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required>
                 <label for="">Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="contraseña" required>
                 <label for="">Contraseña</label>
            </div>
            <div class="remenber-forg">
                <label><input type="checkbox"> Remmenber me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Ingresar</button>
            <div class="login_register">
                <p>Dont't have an account<a href="#" class="register_link">Register</a></p>
            </div>
          </form>
        </div>
    </div>
    <script src="Scripts/ComponentesjsLoginEmpresa.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>