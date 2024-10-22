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
        <h1>Crear Nueva mesa</h1>
        <form action="{{ route('mesas.store') }}" method="POST">
            @csrf
            <!-- Numero de mesa -->
            <div class="form-group mb-3">
                <label for="numero_mesa" class="form-label">Numero de mesa</label>
                <input type="number" name="numero_mesa" id="numero_mesa" class="form-control" placeholder="Ingresa el numero de mesa" required>
            </div>
            <!-- Capacidad de la mesa -->
            <div class="form-group mb-3">
                <label for="capacidad" class="form-label">Capacidad</label>
                <input type="number" name="capacidad" id="capacidad" class="form-control" placeholder="Ingresa el capacidad de la mesa" required>
            </div>
            <!-- Tipo de la mesa id -->
            <div class="form-group mb-3">
                <label for="tipo_id" class="form-label">Tipo de mesas id</label>
                <input type="number" name="tipo_id" id="tipo_id" class="form-control" placeholder="Ingresa el id del tipo de mesa" required>
            </div>
            <!-- Disponibilidad de la mesa -->
            <div class="form-group mb-3">
                <label for="disponible" class="form-label">Disponible</label>
                <input type="number" name="disponible" id="disponible" class="form-control" placeholder="Ingresa si esta disponible la mesa" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Mesa</button>
            <a href="{{ route('mesas.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
