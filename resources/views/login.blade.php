<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}" >
    </head>

    <body>
        <div class="login-form">
            <h1>LOGIN FORM</h1>
            <form action="{{ route('userAuth') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                @error('email')
                <div class="form-error">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                @error('password')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
            </form>
            <p class="registration-link">Click <a href="{{ route('register') }}">here </a>for new user.</p>
        </div>
    </body>
</html>