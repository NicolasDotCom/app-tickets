<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/login/assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('/assets/front/assets/img/logo.ico') }}">
    <title>Verificar Correo</title>
</head>
<body>
    
    <div class="login-card">
        <img src="{{ asset('/assets/front/assets/img/email_logo.png') }}" alt="Logo" style="width: 200px; height: auto; border-radius: 30%;">

        <h2>Verificación del correo electrónico.</h2>
        
        <h3>{{ __('Gracias por registrarte. Antes de empezar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que te acabamos de enviar? Si no lo has recibido, estaremos encantados de enviarte otro.') }}</h3>
        
        @if (session('status') == 'verification-link-sent')
        <div class="text-success" style="font-weight: bold; font-size: 16px; color: green;">
            {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionaste al registrarte.') }}
        </div>
        @endif
        
        <div>
                <form class="login-form" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                </br>
                        <button type="submit">
                            {{ __('Reenviar correo de verificación') }}
                        </button>
                </form>
                </br>
                <form class="login-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        {{ __('Cerrar sesión') }}
                    </button>
                </form>
        </div>
    
    </div>
    
</body>
</html>