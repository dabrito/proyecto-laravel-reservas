<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mis Reservas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4 position-relative">
        <h1>Mis Reservas</h1>
        <hr>
        
        <!-- Tabla para mostrar las reservas -->
        <table class="table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Número Mesa</th>
                    <th>Fecha de la Reserva</th>
                    <th>Hora de la Reserva</th>
                    <th>Número de Personas</th>
                </tr>
            </thead>
            <tbody>
                @if($reservas->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center">No hay reservas disponibles.</td>
                    </tr>
                @else
                    @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->usuario->nombre  }}</td>
                        <td>{{ $reserva->mesa->numero_mesa }}</td>
                        <td>{{ $reserva->fecha_reserva }}</td>
                        <td>{{ $reserva->hora_reserva }}</td>
                        <td>{{ $reserva->numero_personas }}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <!-- Botón para volver al inicio -->
        <a href="{{ route('inicio') }}" class="btn btn-primary mt-3">Volver al Inicio</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

