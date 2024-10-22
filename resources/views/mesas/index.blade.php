<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mesas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Menú de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <a class="navbar-brand" href="#">Gestión de Mesas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mesas.create') }}">Nueva Mesa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tiposmesas.index') }}">Tipos de Mesa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservas.index') }}">Volver</a>
                    </li>
                </ul>
            </div>
        </nav>

        <hr>

        <!-- Tabla para mostrar las mesas -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Número de Mesa</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Tipo de Mesa</th>
                    <th scope="col">Disponible</th>
                    <th scope="col">Creada</th>
                    <th scope="col">Actualizada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mesas as $mesa)
                <tr>
                    <th scope="row">{{ $mesa->id }}</th>
                    <td>{{ $mesa->numero_mesa }}</td>
                    <td>{{ $mesa->capacidad }}</td>
                    <td>{{ $mesa->tipo->nombre_tipo}}</td>
                    <td>{{ $mesa->disponible }}</td>
                    <td>{{ $mesa->created_at }}</td>
                    <td>{{ $mesa->updated_at }}</td>
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
