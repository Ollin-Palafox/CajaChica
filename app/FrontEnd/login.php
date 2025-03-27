<?php
// Inicia la sesión
session_start();

// Datos ficticios para validación (puedes reemplazar con conexión a base de datos más adelante)
$usuarios = [
    ["correo" => "usuario@example.com", "contraseña" => "12345", "nombre" => "Usuario Ejemplo"]
];

// Maneja el formulario al enviarlo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Verifica las credenciales
    foreach ($usuarios as $usuario) {
        if ($usuario['correo'] === $correo && $usuario['contraseña'] === $contraseña) {
            $_SESSION['nombre'] = $usuario['nombre'];
            header('Location: configuracion.html'); // Redirige al archivo de configuración
            exit;
        }
    }

    // Muestra un mensaje de error si las credenciales no coinciden
    $error = "Correo o contraseña incorrectos.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('background.jpg'); /* Ruta de tu imagen */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center h-100">
        <div class="login-container">
            <h2 class="text-center mb-4">Iniciar Sesión</h2>
            <!-- Mostrar mensaje de error si las credenciales son incorrectas -->
            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo Institucional</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo" required>
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>