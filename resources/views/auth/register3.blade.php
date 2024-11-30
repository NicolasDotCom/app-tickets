<!-- Aquí es donde el administrador registra un nuevo usuario para la plataforma -->

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
        <h2>Registro</h2>
        <h3>Llena los campos para registrarte</h3>

        <form class="login-form" action="{{ route('register') }}" method="POST"> <!-- Se deja la misma clase: "login-form" para usar los mismos estilos del login, y no tener 2 archivos css -->
            @csrf
            <!-- Nombre -->
            <label for="name"></label>
            <input type="text" placeholder="{{__('Nombre')}}" id= name name="name" value="{{old('name')}}">
            <!-- Mensaje de error del Nombre -->
            <div>
                @error('name')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <!-- Correo -->
            <label for="email"></label>
            <input type="text" placeholder="{{__('Correo Electrónico')}}" id= email name="email" value="{{old('email')}}">
            <!-- Mensaje de error del Correo -->
            <div>
                @error('email')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <!-- Contraseña -->
            <label for="password"></label>
            <input type="password" placeholder="{{__('Contraseña')}}" id= password name="password" value="{{old('password')}}">
            <!-- Mensaje de error de la Contraseña -->
            <div>
                @error('password')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <!-- Confirmar Contraseña -->
            <label for="password_confirmation"></label>
            <input type="password" placeholder="{{__('Confirmar Contraseña')}}" id= password_confirmation name="password_confirmation" value="{{old('password_confirmation')}}">
            <!-- Mensaje de error de la Confirmacion de la contraseña -->
            <div>
                @error('password_confirmation')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <!-- Si ya se encuentra registrado se redirige al login -->
            <a href="{{ route('login') }}">{{ __('¿Ya estas registrado?') }}</a>
            <!-- Registrar -->
        <button type="submit">{{ __('REGISTRAR') }}</button>
        </form>
    </div>
</body>
</html>