<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mesas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <a href="{{ route('mesas.create') }}" class="btn btn-secondary">Nueva mesa</a>
        <a href="{{ route('tiposmesas.index') }}" class="btn btn-secondary">Tipos de mesa</a>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Volver</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">numero de mesa</th>
                    <th scope="col">capacidad</th>
                    <th scope="col">tipo de mesa id</th>
                    <th scope="col">disponible</th>
                    <th scope="col">creada</th>
                    <th scope="col">actualizada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mesas as $mesa)
                <tr>
                    <th scope="row">{{ $mesa->id }}</th>
                    <td>{{ $mesa->numero_mesa }}</td>
                    <td>{{ $mesa->capacidad }}</td>
                    <td>{{ $mesa->tipo_id }}</td>
                    <td>{{ $mesa->disponible }}</td>
                    <td>{{ $mesa->created_at }}</td>
                    <td>{{ $mesa->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
