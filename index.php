<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="UTF-8">
        <title>Servicio Web - Registro e Inicio de Sesión</title>

        <style>
            body {
                background-color: #f0f2f5;
                font-family: Arial, sans-serif;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 40px;
            }

            h1 {
                color: #333;
                margin-bottom: 20px;
            }

            .form-container {
                background-color: #fff;
                border-radius: 8px;
                padding: 20px 30px;
                margin-bottom: 30px;
                width: 100%;
                max-width: 400px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }

            .form-container h2 {
                margin-bottom: 15px;
                color: #444;
            }

            label {
                display: block;
                margin-top: 10px;
                font-weight: bold;
                color: #555;
            }

            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px;
                margin-top: 15px;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
                font-weight: bold;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            footer {
                margin-top: 40px;
                color: #777;
                font-size: 14px;
            }
        </style>

    </head>

    <body>
        
        <h1>Servicio Web - Registro e Inicio de Sesión</h1>

        <div class="form-container">
            <h2>Registro</h2>
            <form method="POST" action="registro.php">
                <label for="usuario_reg">Usuario</label>
                <input type="text" name="usuario" id="usuario_reg" required>

                <label for="contrasena_reg">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena_reg" required>

                <input type="submit" value="Registrar">
            </form>
        </div>

        <div class="form-container">
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <label for="usuario_log">Usuario</label>
                <input type="text" name="usuario" id="usuario_log" required>

                <label for="contrasena_log">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena_log" required>

                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>

        <footer>
            Desarrollado por Juan Sierra | Evidencia GA7-220501096-AA5-EV01
        </footer>

    </body>
    
</html>
