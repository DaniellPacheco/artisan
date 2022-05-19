<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/app.css">

        <title>Artisan - Um Novo Jeito de Ler Novel</title>
    </head>
    <body>
        <main class="register-wrap">
            <form action="/register" method="POST" class="login-form">
                @csrf
                <h1 class="login-form-title">
                    <a href="/">
                        <img class="logotipo" src="{{ asset('images/logotipo.svg') }}" alt="Logotipo Artisan">
                    </a>
                </h1>
                <fieldset class="login-field-wrap">
                    <label for="name" class="login-form-label">Name</label>
                    <input type="text" name="name" class="login-form-input" value="{{ old('name') }}">
                    @error('email')
                        <p class="error-message">{{ $message }}</p>                        
                    @enderror
                </fieldset>
                <fieldset class="login-field-wrap">
                    <label for="Email" class="login-form-label">Email</label>
                    <input type="email" name="email" class="login-form-input" value="{{ old('email') }}">
                    @error('email')
                        <p class="error-message">{{ $message }}</p>                        
                    @enderror
                </fieldset>
                <fieldset class="login-field-wrap">
                    <label for="Password" class="login-form-label">Password</label>
                    <input type="password" name="password" class="login-form-input">
                    @error('password')
                        <p class="error-message">{{ $message }}</p>                        
                    @enderror
                </fieldset>
                <fieldset class="login-field-wrap">
                    <label for="Password" class="login-form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="login-form-input">
                    @error('password_confirmation')
                        <p class="error-message">{{ $message }}</p>                        
                    @enderror
                </fieldset>
                <button class="login-form-button" type="submit">Entrar</button>
                <a class="login-form-forget" href="/">Já possuo uma conta</a>
            </form>
        </main>
    </body>
</html>