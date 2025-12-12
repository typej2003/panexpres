<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compra y vende Pan de Jamón y Combos Navideños Caracas">
    <meta name="keywords" content="vende, compra, Pan, Jamón, Pan de Jamón, Combos Navideños, Caracas, directo a tu mesa, @panexpres.vezla, Panexprés, Panexpres">
    <link rel="shortcut icon" type="x-icon" href="/img/panexpres_logo.png" />
    <title>PanExprés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/css/styles_expres.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/navidad.css') }}">
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

        @if($words == '' || $words == null)   
            @if($in_sliderprincipal > 0)
                @livewire('components.promociones-expres')
            @endif
        @endif

        @if($in_marcasproductos > 0)
            @livewire('components.marcas-productos')
        @endif
        <div class="my-2"></div>    
        <section class="container-fluid">
            <div class="my-2"></div>                    
            @if($words == '')    
                <div class="my-2"></div>
                @livewire('components.show-products-expres')
            @endif
            
            @if($words != '' )   
                @livewire('components.results-products-expres', [
                    'comercioId' => $comercio_id, 
                    'parametro' => $words,
                    'manufacturer_id' => $manufacturer_id,
                    'modelo_id' => $modelo_id,
                    'motor_id' => $motor_id,
                    ])
            @endif
        </section> 

        @livewire('layouts.footer-expres')

    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('/js/script_expres.js') }}"></script>
    <script src="{{ asset('/js/navidad.js') }}"></script> 
</body>
</html>