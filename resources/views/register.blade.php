<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}" >
    </head>

    <body> 
        <div class="registration-form">
            <h1>Registration Form</h1>
            <form method="post" action="{{ route('storeUser') }}">
                @csrf
                <label>Name: </label>
                <input type="text" name="name" id="name"/>

                <label>Email: </label>
                <input type="email" name="email" id="email"/>

                <label>Password: </label>
                <input type="password" name="password" id="password"/>

                <input type="submit" value="submit"/>
            </form>
        </div>
    </body>
</html>