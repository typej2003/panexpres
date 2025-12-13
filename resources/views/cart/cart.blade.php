    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compra y vende Pan de Jamón y Combos Navideños Caracas">
    <meta name="keywords" content="vende, compra, Pan, Jamón, Pan de Jamón, Combos Navideños, Caracas, directo a tu mesa, @panexpres.vezla, Panexprés, Panexpres">
    <link rel="shortcut icon" type="x-icon" href="/img/panexpres_logo.png" />
    <title>PanExprés</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/css/styles_expres.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/navidad.css') }}">
    <livewire:styles />
</head>
<body>
    <div id="container-body">

        <div class="snow-container" id="snowContainer"></div>
        
        <div class="santa-sleigh" id="santaSleigh"></div>

        @livewire('layouts.navbar-expres')
        
        @if($in_cellphonecontact > 0)
            <a href="https://api.whatsapp.com/send?phone=+58{{$comercio->contactcellphone}}&text={{ $comercio->msgcontact}}" class="whatsapp-float" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-whatsapp whatsapp-icon"></i>
            </a>
        @endif

        <div class="my-2"></div>    
        <section class="container-fluid">
            <div class="my-2"></div>                    
            @livewire('cart.cart1')
        </section> 

        @livewire('layouts.footer-expres')

    </div>

    <script src="{{ asset('/js/script_expres.js') }}"></script>
</body>
</html>
@stack('js')
@stack('before-livewire-scripts')
<livewire:scripts />
@stack('after-livewire-scripts')

@stack('alpine-plugins')
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

