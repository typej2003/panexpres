<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Hola, {{ $user->names }} {{ $user->surnames }}</h1>
    <p>{{ $body }}</p>
    <p>Te invitamos a disfrutar de todos nuestro productos</p>
     
    <p>Gracias,</p>
    {{ config('app.name') }}<br>


</body>
</html>