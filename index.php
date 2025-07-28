<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Login Servicio Web</title>
    </head>

    <body>

        <h2>Registro</h2>

        <form method="POST" action="registro.php">
            Usuario: <input type="text" name="usuario" required><br>
            Contraseña: <input type="password" name="contrasena" required><br>
            <input type="submit" value="Registrar">
        </form>

        <h2>Login</h2>

        <form method="POST" action="login.php">
            Usuario: <input type="text" name="usuario" required><br>
            Contraseña: <input type="password" name="contrasena" required><br>
            <input type="submit" value="Iniciar Sesión">
        </form>

    </body>
    
</html>
