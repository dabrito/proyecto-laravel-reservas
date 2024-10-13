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
        <a href="{{ route('tiposmesas.create') }}" class="btn btn-secondary">Nuevo tipo de mesa</a>
        <a href="{{ route('mesas.index') }}" class="btn btn-secondary">Volver</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">tipo</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">creada</th>
                    <th scope="col">actualizada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tiposmesas as $tipomesa)
                <tr>
                    <th scope="row">{{ $tipomesa->id }}</th>
                    <td>{{ $tipomesa->nombre_tipo }}</td>
                    <td>{{ $tipomesa->descripcion }}</td>
                    <td>{{ $tipomesa->created_at }}</td>
                    <td>{{ $tipomesa->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
