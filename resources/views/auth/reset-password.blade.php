<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/bolivaricono.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/cssInicioSesion.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/cssCuadroModal.css') }}" />
    <title>SB Inventario / Restablecer Contraseña</title>
</head>
<body style="background-image: url('{{ asset('assets/img/fondoinventario1.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-color: #001f3f;">
    <div class="container2">
        <h1 class="text-center">INVENTARIO SIMON BOLIVAR 2023</h1>
        <img src="{{ asset('assets/img/bolivaricono.png') }}" alt="ICONODELBOLIVAR" class="imagen-titulo">
    </div>
    <div class="container">
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="icon">
                <img src="{{ asset('assets/img/sesion2.png') }}" alt="Icono" />
            </div>
            <h1>Restablecer Contraseña</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Correo electrónico" value="{{ old('email', $request->email) }}" required autofocus />

            <label for="password">Nueva Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Nueva contraseña" required />

            <label for="password_confirmation">Confirmar Nueva Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña" required />

            <button type="submit">Restablecer Contraseña</button>
        </form>
    </div>
</body>
</html>
