<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/login/assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('/assets/front/assets/img/logo.ico') }}">
    <title>Olvide la contraseña</title>
</head>
<body>
    <div class="login-card">
        <img src="{{ asset('/assets/front/assets/img/forgot_logo.png') }}" alt="Logo" style="width: 200px; height: auto;">
        </br>
        </br>

            
            <div>
                {{ __('¿Olvidaste tu contraseña? No te preocupes. Indícanos tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña que te permitirá elegir una nueva.') }}
            </div>
            </br>
            <!-- Estado de la sesión. -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
        
                <form class="login-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
            
                    <!-- Correo Electrónico -->
                    
                        <x-input-label for="email"/>
                        <x-text-input id="email" placeholder="{{__('Correo Electrónico')}}" class="login-form" type="email" name="email" :value="old('email')" required autofocus style="" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    
            
                    
                        <x-primary-button>
                            {{ __('Enviar enlace de restablecimiento de contraseña') }}
                        </x-primary-button>
                    
                </form>

    
    </div>
    
</body>
</html>