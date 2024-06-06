<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}" >
    </head>

    <body>
    <nav class="navbar sticky-top nav-style">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col text-center">
                    <h1 class="navbar-brand">TO-DO LIST</h1>
                </div>
                <div class="col-auto ms-auto">
                    <a href=" {{ route('logout') }}"><button class="btn" type="submit">LOGOUT</button></a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    </body>
</html>