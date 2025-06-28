<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workshop Webshop Fullstack záró 2</title>
</head>
<body>
    <p>Belépve mint {{ Auth::user()->name }}. <a href="/logout">Kilépés</a></p>

    @if (Session::has('errors'))
        <li>{{ Session::get('errors') }}</li>
    @endif

    @if (Session::has('success'))
        <li>{{ Session::get('success') }}</li>
    @endif

    <h2>Profilom</h2>

    <p>Felhasználónév: <strong>{{ Auth::user()->name }}</strong></p>
    <p>E-mail cím: <em>{{ Auth::user()->email }}</em></p>
    <p>Telefonszám: <em>{{ optional(Auth::user())->phone ?? "Nincs megadva telefon" }}</em></p>
    
</body>
</html>