<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('/css/styles_expres.css') }}">
</head>
<body>
    <div class="text-center mb-4">
        <img src="{{ asset('/img/logopanexpres_color.png') }}" alt="Logo Pan Express" style="max-height: 100px; width: auto;">
        
        <hr class="my-3 mx-auto" style="width: 80%; border: 0; border-top: 5px solid #893e08; opacity: 1;">
    </div>
    <h1>Hola, {{ $names }} {{ $surnames }}</h1>
    <p>¡Gracias por tu compra!</p>
    <p>{!! $body !!}</p>
    <p>Te invitamos a disfrutar todos nuestros productos</p>
    <p><button class="btn btn-success">Sigue tu pedido</button></p>
    <p>Rastrea, reprograma o cancela tu pedido</p>
    <p>Gracias,</p>
    {{ config('app.name') }}<br>
</body>
</html>