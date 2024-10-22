<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }
        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .btn {
            width: 100%;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container">
        <div class="login-card">
            <h1 class="text-center mb-4">Inicia Sesión</h1>
            <form action="{{ route('usuarios.login') }}" method="POST">
                @csrf
                <!-- Email del usuario -->
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Ingresa el email del usuario" required>
                </div>
                <!-- Password del usuario -->
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa el password del usuario" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Inicia Sesión</button>
                <a href="{{ route('inicio') }}" class="btn btn-secondary">Volver</a>

                @if (session('error'))
                    <div class="alert alert-danger mt-3">{{ session('error') }}</div>
                @endif
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
