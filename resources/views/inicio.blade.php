<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Layout</title>
    <!-- Cargar el archivo de estilos -->
    <link rel="stylesheet" href="{{ asset('css/inicio_estilos.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="background">
        <img src="{{ asset('images/restaurantebuenavista.webp') }}" alt="Restaurante Buenavista">
    </div>
    <div class="content">
        <h1>Bienvenidos a las reservas del restaurante</h1>
        <button class="btn btn-primary btn-lg">Login</button> <!-- Agregar btn-lg -->
        <a href="{{ route('usuarios.create') }}" class="btn btn-secondary btn-lg">Registrarse</a> <!-- Agregar btn-lg -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
