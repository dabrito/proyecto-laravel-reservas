<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Reserva</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4 position-relative">
        <h1>Se crea una nueva reserva</h1>
        <hr>
        <a href="{{ route('usuarios.crearCliente') }}" class="btn btn-secondary">Crear Cliente</a>
        <a href="{{ route('usuarios.verClientes') }}" class="btn btn-secondary">Ver Cliente</a>
        <a href="{{ route('inicio') }}" class="btn btn-primary position-absolute" style="right: 0;">volver a inicio</a>

        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
