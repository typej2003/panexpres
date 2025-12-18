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
    <livewire:styles />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        .text-primary-custom { color: #893e08 !important; }
        
        /* Indicadores Numéricos */
        .img-number {
            width: 32px; height: 32px;
            border-radius: 50%;
            background: #fff;
            border: 1px solid #ddd;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; font-weight: bold; font-size: 0.85rem;
            transition: 0.2s; color: #555;
        }
        .img-number.active {
            background: #893e08; color: white; border-color: #893e08;
        }

        /* Estilo del selector de cantidad */
        .input-qty::-webkit-inner-spin-button, .input-qty::-webkit-outer-spin-button {
            -webkit-appearance: none; margin: 0;
        }

        @media (max-width: 991px) {
            .main-image-container { height: 320px !important; }
            .sticky-md-top { position: relative !important; top: 0 !important; }
        }
    </style>
</head>
<body>
    <div id="container-body">

        <div class="snow-container" id="snowContainer"></div>
        
        <div class="santa-sleigh" id="santaSleigh"></div>

        @livewire('layouts.navbar-expres')
        
        <div class="my-2"></div>    
        <section class="container-fluid">
            <div class="my-2"></div>
            @livewire('afiliado.ver-detalles', ['comercioId' => $comercioId, 'productId' => $productId])    

            @livewire('components.show-recommended-expres', ['productId' => $productId])    
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

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> -->
