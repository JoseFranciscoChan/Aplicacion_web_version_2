<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="../login/css/style.css">
  </head>

  <body>

    <div class="login-box">
      

      <form action="validar.php" method="post" >
        <h1>Iniciar sesión</h1>
        
        <label for="correo">Correo</label>
        <input type="text" placeholder="ingrese su correo" name="correo"></p>
      
        <label for="password">Contraseña</label>
        <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
        <input type="submit" value="ingresar" ><br>
        <a href="#">He olvidado mi contraseña</a><br>
        <a href="registrarse01.php">Crear una cuenta</a>
      </form>
    </div>
  </body>
</html>

