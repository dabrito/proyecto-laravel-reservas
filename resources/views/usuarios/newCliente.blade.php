<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Crear Nuevo Usuario</h1>
        <form action="{{ route('usuarios.storeCliente') }}" method="POST">
            @csrf
            <!-- Nombre del usuario -->
            <div class="form-group mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa el nombre del usuario" required>
            </div>
            <!-- Email del usuario -->
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Ingresa el email del usuario" required>
            </div>
            <!-- Password del usuario -->
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Ingresa el password del usuario" required>
            </div>
            <div class="form-group mb-3">
                <label for="rol" class="form-label">Rol</label>
                <input type="text" name="rol" id="rol" class="form-control" placeholder="Ingresa el rol del usuario" value="cliente" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
            <a href="{{ route('usuarios.verClientes') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
