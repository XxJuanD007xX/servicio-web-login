<?php
// Inicio de sesión

$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

if (!$usuario || !$contrasena) {
    exit("Debe enviar usuario y contraseña.");
}

// Cargar usuarios
$usuarios = json_decode(file_get_contents("usuarios.json"), true);

// Verificar credenciales
foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuario && password_verify($contrasena, $u['contrasena'])) {
        exit("Autenticación satisfactoria.");
    }
}

echo "Error en la autenticación.";
?>
