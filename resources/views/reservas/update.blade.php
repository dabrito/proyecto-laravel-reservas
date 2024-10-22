<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Reserva</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Reserva</h1>
        <hr>

        <a href="{{ route('reservas.index') }}" class="btn btn-secondary mb-3">Volver a Reservas</a>

        <!-- Formulario para editar la reserva -->
        <form method="POST" action="{{ route('reservas.update', $reserva->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="usuario_id">ID Cliente</label>
                <input type="number" name="usuario_id" id="usuario_id" class="form-control" value="{{ old('usuario_id', $reserva->usuario_id) }}" required>
            </div>

            <div class="form-group">
                <label for="mesa_id">Número de Mesa</label>
                <input type="number" name="mesa_id" id="mesa_id" class="form-control" value="{{ old('mesa_id', $reserva->mesa_id) }}" required>
            </div>

            <div class="form-group">
                <label for="fecha_reserva">Fecha de la Reserva</label>
                <input type="date" name="fecha_reserva" id="fecha_reserva" class="form-control" value="{{ old('fecha_reserva', $reserva->fecha_reserva) }}" required>
            </div>

            <div class="form-group">
                <label for="hora_reserva">Hora de la Reserva</label>
                <input type="time" name="hora_reserva" id="hora_reserva" class="form-control" value="{{ old('hora_reserva', $reserva->hora_reserva) }}" required>
            </div>

            <div class="form-group">
                <label for="numero_personas">Número de Personas</label>
                <input type="number" name="numero_personas" id="numero_personas" class="form-control" value="{{ old('numero_personas', $reserva->numero_personas) }}" required>
            </div>

            <!-- Botón de enviar -->
            <button type="submit" class="btn btn-primary">Actualizar Reserva</button>

        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
