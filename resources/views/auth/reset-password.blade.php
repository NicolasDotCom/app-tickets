<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/login/assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('/assets/front/assets/img/logo.ico') }}">
    <title>Restablecer contraseña</title>
</head>
<body>
        <div class="login-card">
            <form class="login-form" method="POST" action="{{ route('password.store') }}">
                @csrf
        
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
                <!-- Email Address -->
                
                    <x-input-label for="email"/>
                    <x-text-input id="email" placeholder="{{__('Correo Electrónico')}}" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                
        
                <!-- Password -->
                
                    <x-input-label for="password"/>
                    <x-text-input id="password" placeholder="{{__('Contraseña')}}" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
        
                <!-- Confirm Password -->
                
                    <x-input-label for="password_confirmation" />
        
                    <x-text-input id="password_confirmation" placeholder="{{__('Confirmar Contraseña')}}" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                
        
                
                    <x-primary-button>
                        {{ __('Reset Password') }}
                    </x-primary-button>
                
            </form>
        </div>    
</body>
</html>
