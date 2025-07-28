<?php
// Registro de nuevos usuarios

$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

if (!$usuario || !$contrasena) {
    exit("Debe enviar usuario y contraseña.");
}

// Leer archivo JSON
$usuarios = json_decode(file_get_contents("usuarios.json"), true);

// Verificar si el usuario ya existe
foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuario) {
        echo "Error: El usuario ya existe.";
        header("refresh:2;url=index.php");
        exit;
    }
}

// Agregar nuevo usuario
$usuarios[] = [
    "usuario" => $usuario,
    "contrasena" => password_hash($contrasena, PASSWORD_DEFAULT)
];

// Guardar archivo
file_put_contents("usuarios.json", json_encode($usuarios, JSON_PRETTY_PRINT));

// Mensaje y redirección
echo "Usuario registrado con éxito. Redirigiendo...";
header("refresh:2;url=index.php");
exit;
?>
