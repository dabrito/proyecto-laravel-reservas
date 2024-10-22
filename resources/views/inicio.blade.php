<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Layout</title>
    <!-- Incluimos los estilos aquí para probar -->
    <style>
        /* Asegurar que el contenedor ocupe el máximo ancho disponible */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .background img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Estilo del marco redondeado */
        .content {
            max-width: 600px;
            margin: auto;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            text-align: center;
            color: black; /* Cambia el color del texto a negro */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* H1 personalizado */
        h1 {
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        /* Botones con espaciado entre ellos */
        .btn {
            margin: 10px;
        }

        /* Asegurar que el contenedor de la página siempre tenga el tamaño máximo disponible */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="background">
        <img src="{{ asset('images/restaurantebuenavista.webp') }}" alt="Restaurante Buenavista">
    </div>
    <div class="content">
        <h1>Bienvenido a las reservas del restaurante</h1>
        <a href="{{ route('usuarios.sesion') }}" class="btn btn-primary btn-lg">Login</a>
        <a href="{{ route('usuarios.create') }}" class="btn btn-secondary btn-lg">Registrarse</a> 
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
