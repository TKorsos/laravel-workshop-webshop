<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workshop Webshop Fullstack záró 2</title>
</head>
<body>
    @if (Session::has('success'))
        <li>{{ Session::get('success') }}</li>
    @endif

    <h2>Regisztráció</h2>

    <form action="" method="POST">

        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Add meg a nevedet!">
        @error('name')
            <br>{{ $message }}
        @enderror
        <br><br>

        <input type="text" name="email" value="{{ old('email') }}" placeholder="Add meg az e-mail címedet!">
        @error('email')
            <br>{{ $message }}
        @enderror
        <br><br>

        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Add meg a telefonszámodat!">
        <span>* Nem kötelező megadni!</span>
        @error('phone')
            <br>{{ $message }}
        @enderror
        <br><br>

        <input type="text" name="password" placeholder="Add meg a jelszavadat!">
        @error('password')
            <br>{{ $message }}
        @enderror
        <br><br>

        <input type="text" name="password_confirmation" placeholder="Erősítsd meg a jelszavadat!">
        <br><br>

        <button>Küldés</button>

    </form>
    
</body>
</html>