<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva Reserva</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4 position-relative">
        <h1>Ingrese los datos</h1>

        <!-- Formulario para crear la reserva -->
        <form action="{{ route('reservas.store') }}" method="POST">
        @csrf

            <div class="form-group">
                <label for="usuario_id">Nombre Completo:</label>
                <input type="number" name="usuario_id" class="form-control" placeholder="Ingrese nombre completo del cliente" required>
            </div>

            <div class="form-group">
                <label for="mesa_id">Mesa:</label>
                <input type="number" name="mesa_id" class="form-control" placeholder="Ingrese numero de mesa disponible" required>
            </div>

            <div class="form-group">
                <label for="fecha_reserva">Fecha de la Reserva:</label>
                <input type="date" name="fecha_reserva" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="hora_reserva">Hora de la Reserva:</label>
                <input type="time" name="hora_reserva" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="numero_personas">Número de Personas:</label>
                <input type="number" name="numero_personas" class="form-control" placeholder="Ingrese el número de personas" required>
            </div>


            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" class="form-control">
                    <option value="pendiente">Pendiente</option>
                    <option value="confirmada">Confirmada</option>
                    <option value="cancelada">Cancelada</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear Reserva</button>
            
        </form>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary mt-2">Volver</a>
    </div>
        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
