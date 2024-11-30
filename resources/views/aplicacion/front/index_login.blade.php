<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/login/assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('/assets/front/assets/img/logo.ico') }}">
    <title>BIENVENIDO</title>
</head>
<body>
    
    <div class="login-card">
        <img src="{{ asset('/assets/front/assets/img/logo.png') }}" style="width: 200px; height: auto; border-radius: 50%;">
        <h2>BIENVENID@</h2>
        <h3>ESTA ES LA MESA DE AYUDA DE HELP-TICKETS</h3>
        <form class="login-form">
            @if (Route::has('login'))
                @auth
                    @else
                    <button type="button" onclick="window.location.href='{{ route('login') }}';">INICIAR SESIÓN</button>
                @endauth
            @endif
        </form>
    </BR>
    </div>
</body>
</html>