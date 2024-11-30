<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/login/assets/css/style.css') }}"> <!-- Se deja la misma clase: "login-form" para usar los mismos estilos del login, y no tener 2 archivos css -->
    <link rel="icon" href="{{ asset('/assets/front/assets/img/logo.ico') }}">
    <title>Registro</title>
</head>
<body>
    
    <div class="login-card"> <!-- Se deja la misma clase: "login-card" para usar los mismos estilos del login, y no tener 2 archivos css -->
        <h2>Contacta con el administrador para que te registre</h2>
        </br>
        <form class="login-form"> <!-- Se deja la misma clase: "login-form" para usar los mismos estilos del login, y no tener 2 archivos css -->
            <button type="button" onclick="window.location.href='{{ route('login') }}';">INICIAR SESIÓN</button>
        </form>
    </div>
</body>
</html>
