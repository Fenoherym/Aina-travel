<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @vite('resources/css/app.css')
    @vite('resources/scss/app.scss')
    <link rel="stylesheet" href="{{ asset('build/assets/app.3ee71b8a.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.73168167.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.d9cff854.css') }}">
</head>

<body class="auth">
    <div class="login">
        <div class="login-form">
            <div class="title">
                <h3>Se connecter</h3>
            </div>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email')  is-invalid
                    @enderror"
                        placeholder="votre email" name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Mot de passe</label>
                    <input type="password"
                        class="form-control @error('password')  is-invalid
                    @enderror"
                        placeholder="votre mot de passe" name="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="btn-connex">
                    <button type="submit" class="btn-submit">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
