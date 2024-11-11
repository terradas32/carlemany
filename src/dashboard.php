<?php
include 'db.php';
include 'auth.php';

if (!is_logged_in()) {
    header("Location: index.php");
    exit;
}

$stmt = $pdo->query("SELECT nombre, apellidos, telefono, email FROM users");
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold">Usuarios Registrados</h3>
                    <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
                </div>
                <div class="row">
                    <?php foreach ($users as $user): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold"><?= htmlspecialchars($user['nombre']) . ' ' . htmlspecialchars($user['apellidos']) ?></h5>
                                    <p class="card-text"><strong>Teléfono:</strong> <?= htmlspecialchars($user['telefono']) ?></p>
                                    <p class="card-text"><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

