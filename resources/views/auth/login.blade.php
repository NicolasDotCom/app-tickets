<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/login/assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('/assets/front/assets/img/logo.ico') }}">
    <title>Iniciar Sesión</title>
</head>
<body>
    
    <div class="login-card">
        <h2>Iniciar Sesión</h2>
        <h3>Introduce tus credenciales</h3>

        <form class="login-form" action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Correo Electrónico -->
            <input type="email" name="email"  placeholder="Correo">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <!-- Contraseña -->
            <input type="password" name="password" placeholder="Contraseña">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <!-- Recuerdame -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
            </label>
        </div>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">¿Ha olvidado su contraseña?</a>
            @endif
            <button type="submit">INICIAR SESIÓN</button>
        </form>
    </div>
</body>
</html>