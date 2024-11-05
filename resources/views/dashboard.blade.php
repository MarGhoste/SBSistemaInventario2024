<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Panel de Control SB</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/bolivaricono.png') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/cssPaginaPrincipal.css') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <!-- <script src="{{ asset('JS/BloqueoAtras.js') }}"></script> -->
<body>

<!-- Menú lateral -->
<aside class="side-menu" id="sideMenu">
    <ul>
      <li class="logo">
        <img src={{asset('assets/img/bolivaricono.png')}} alt="SB INVENTARIO Logo" class="logo-img" />
        <a>Simón Bolivar Inventario 2023</a>
      </li>
      <li>
          <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Panel de control</a>
        <!-- <a href="paginaprincipal.php"><i class="fas fa-home"></i> Panel de control</a> -->
      </li>
      <li>
        <a href="{{route(name: 'accesos')}}"><i class="fas fa-user"></i> Accesos</a>
        <!-- <a href="accesos.php"><i class="fas fa-user"></i> Accesos</a> -->
      </li>
      <li>
        <a href="#"><i class="fas fa-chalkboard"></i> Laboratorios</a>
      </li>
      <li>
        <a href="#"><i class="fas fa-cogs"></i> Configuración</a>
      </li>
      <li>
        <a href="PHP/salirSesion.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
      </li>
    </ul>
  </aside>









  <script src="{{ asset('assets/js/jsPaginaPrincipal.js') }}"></script>
</body>
</html>