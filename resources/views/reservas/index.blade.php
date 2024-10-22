<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Reserva</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- Menú de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <a class="navbar-brand" href="#">Reservas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios.verClientes') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mesas.index') }}">Mesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservas.create') }}">Crear Reserva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inicio') }}">Volver a Inicio</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h1>Reservas</h1>
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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Usuario</th>
                    <th>Numero Mesa</th>
                    <th>Nombre Cliente</th>
                    <th>Fecha de la Reserva</th>
                    <th>Hora de la Reserva</th>
                    <th>Número de Personas</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->usuario_id }}</td>
                    <td>{{ $reserva->mesa_id }}</td>
                    <td>{{ $reserva->nombre }}</td>
                    <td>{{ $reserva->fecha_reserva }}</td>
                    <td>{{ $reserva->hora_reserva }}</td>
                    <td>{{ $reserva->numero_personas }}</td>
                    <td><a href="{{ route('reserva.edit', $reserva->id) }}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta reserva?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
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
