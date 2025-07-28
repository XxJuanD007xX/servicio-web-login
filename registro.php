<?php
// Registro de nuevos usuarios

// Recibimos usuario y contraseña por POST
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

if (!$usuario || !$contrasena) {
    exit("Debe enviar usuario y contraseña.");
}

// Cargar usuarios existentes
$usuarios = json_decode(file_get_contents("usuarios.json"), true);

// Verificar si el usuario ya existe
foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuario) {
        exit("Error: El usuario ya existe.");
    }
}

// Agregar nuevo usuario
$usuarios[] = [
    "usuario" => $usuario,
    "contrasena" => password_hash($contrasena, PASSWORD_DEFAULT)
];

// Guardar en el archivo
file_put_contents("usuarios.json", json_encode($usuarios, JSON_PRETTY_PRINT));

echo "Usuario registrado con éxito.";
?>
