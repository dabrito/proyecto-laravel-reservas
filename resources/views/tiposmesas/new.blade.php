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
        <form action="{{ route('tiposmesas.store') }}" method="POST">
            @csrf
            <!-- nombre del tipo de mesa -->
            <div class="form-group mb-3">
                <label for="nombre_tipo" class="form-label">Nombre del tipo</label>
                <input type="text" name="nombre_tipo" id="nombre_tipo" class="form-control" placeholder="Ingresa el nombre del tipo de mesa" required>
            </div>
            <!-- descripcion del tipo de mesa -->
            <div class="form-group mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingresa el capacidad de la mesa" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar tipo de mesa</button>
            <a href="{{ route('tiposmesas.index')}}" class="btn btn-secondary">Volver</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
