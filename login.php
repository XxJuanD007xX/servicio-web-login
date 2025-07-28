<?php
// Inicio de sesión

$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Verificar que se envíen los datos
if (!$usuario || !$contrasena) {
    echo "Debe enviar usuario y contraseña.";
    header("refresh:2;url=index.php");
    exit;
}

// Leer archivo JSON de usuarios
$usuarios = json_decode(file_get_contents("usuarios.json"), true);

// Bandera para saber si se autenticó correctamente
$autenticado = false;

// Recorrer lista de usuarios
foreach ($usuarios as $u) {
    // Validar usuario y contraseña
    if ($u['usuario'] === $usuario && password_verify($contrasena, $u['contrasena'])) {
        $autenticado = true;
        break;
    }
}

// Verificar resultado
if ($autenticado) {
    echo "Autenticación satisfactoria. Redirigiendo...";
    header("refresh:2;url=index.php");
} else {
    echo "Error en la autenticación. Redirigiendo...";
    header("refresh:2;url=index.php");
}
exit;
?>
