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
        <a href="{{ route('usuarios.verClientes') }}" class="btn btn-secondary">Clientes</a>
        <a href="{{ route('mesas.index') }}" class="btn btn-secondary">Mesas</a>
        <a href="{{ route('reservas.create') }}" class="btn btn-secondary">Crear Reserva</a>
        <a href="{{ route('inicio') }}" class="btn btn-primary position-absolute" style="right: 0;">volver a inicio</a>
        <hr>

        <!-- Formulario de búsqueda -->
        <form method="GET" action="{{ route('reservas.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por el ID del cliente" value="{{ request()->search }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
        </form>

        <!-- Tabla para mostrar las reservas -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID Cliente</th>
                    <th>Numero Mesa</th>
                    <th>Fecha de la Reserva</th>
                    <th>Hora de la Reserva</th>
                    <th>Número de Personas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->usuario_id }}</td>
                    <td>{{ $reserva->mesa_id }}</td>
                    <td>{{ $reserva->fecha_reserva }}</td>
                    <td>{{ $reserva->hora_reserva }}</td>
                    <td>{{ $reserva->numero_personas }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
