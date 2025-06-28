<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workshop Webshop Fullstack záró 2</title>
</head>
<body>
    @if (Session::has('errors'))
        <li>{{ Session::get('errors') }}</li>
    @endif

    @if (Session::has('success'))
        <li>{{ Session::get('success') }}</li>
    @endif

    <h2>Belépés</h2>

    <form action="" method="POST">

        @csrf
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Add meg az e-mail címedet!">
        <br><br>

        <input type="text" name="password" placeholder="Add meg a jelszavadat!">
        <br><br>

        <button>Belépés</button>

    </form>
    
</body>
</html>