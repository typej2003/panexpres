<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <style>
        /* Estilos base para simular Bootstrap en el correo */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; }
        .container { width: 100%; padding: 20px; }
        .card { background: #ffffff; border: 1px solid #dee2e6; border-radius: 8px; width: 600px; margin: 0 auto; overflow: hidden; }
        .card-body { padding: 30px; }
        .text-center { text-align: center; }
        .btn-success { 
            background-color: #198754; 
            color: white; 
            padding: 12px 25px; 
            text-decoration: none; 
            border-radius: 5px; 
            display: inline-block; 
            font-weight: bold;
        }
        h1 { color: #333; font-size: 24px; }
        p { color: #555; line-height: 1.6; }
        hr { opacity: 1; }
    </style>
</head>
<body>    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="text-center" style="margin-bottom: 25px;">
                    {{-- Nota: La imagen debe estar en un servidor público, no en local --}}
                    <img src="{{ asset('/img/logopanexpres_color.png') }}" alt="Logo Pan Express" style="max-height: 80px; width: auto;">
                    <hr style="width: 80%; border: 0; border-top: 5px solid #893e08; margin: 20px auto;">
                </div>

                <div style="padding: 0 20px;">
                    <h1>Hola, {{ $names }} {{ $surnames }}</h1>
                    <p>¡Gracias por tu compra!</p>
                    <p>{!! $body !!}</p>
                    <p>Te invitamos a disfrutar todos nuestros productos.</p>
                    
                    <div class="text-center" style="margin: 30px 0;">
                        <a href="#" class="btn-success">Sigue tu pedido</a>
                    </div>

                    <p style="font-size: 14px; color: #777;">Rastrea, reprograma o cancela tu pedido desde nuestro portal.</p>
                    
                    <p>Gracias,<br>
                    <strong>{{ config('app.name') }}</strong></p>
                </div>
            </div>
            <div style="background: #f1f1f1; padding: 15px; text-align: center; font-size: 12px; color: #999;">
                &copy; {{ date('Y') }} Pan Express. Todos los derechos reservados.
            </div>
        </div>
    </div>
</body>
</html>