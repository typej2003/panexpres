<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PanExprés</title>
    <meta name="description" content="Compra y vende Pan de Jamón y Combos Navideños Caracas">
    <meta name="keywords" content="vende, compra, Pan, Jamón, Pan de Jamón, Combos Navideños, Caracas, directo a tu mesa, @panexpres.vezla, Panexprés, Panexpres">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="x-icon" href="/img/panexpres_logo.png.png" />

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/footer_expres.css">
        
    @stack('styles')
    <livewire:styles />

    @stack('js')
    @stack('before-livewire-scripts')
    <livewire:scripts />
    @stack('after-livewire-scripts')

</head>
    
    <style>
    /* CSS para eliminar el espacio vacío cuando no hay barra lateral */
    .no-sidebar .content-wrapper, 
    .no-sidebar .main-footer {
        /* El !important es a menudo necesario para sobrescribir las reglas 
        de margin-left de AdminLTE/Bootstrap */
        margin-left: 0 !important; 
    }
    
</style>
@php
    // Define si el usuario es un rol que requiere la barra lateral
    $hasSidebar = Auth::check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'root');
    
    // Si NO tiene barra lateral, agregamos la clase que elimina el margen izquierdo
    $customBodyClass = $hasSidebar ? '' : 'no-sidebar';
@endphp
    
<body class="hold-transition sidebar-mini {{ setting('sidebar_collapse') ? 'sidebar-collapse' : '' }} {{ $customBodyClass }}">
    <div class="wrapper">
    
    @auth
        @if(auth()->user()->role=='cliente')
            <link rel="stylesheet" href="/css/styles_expres.css">
            @livewire('layouts.navbar-expres')
            <script src="/js/script_expres.js"></script>
        @else
            @livewire('layouts.navbar-in-expres')
        @endif
        @if ($hasSidebar)
            @include('layouts.partials.aside')
        @endif
        <div class="content-wrapper">
            {{ $slot }}
        </div>
        @if ($hasSidebar)
            <aside class="control-sidebar control-sidebar-dark">
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            @endif
        
        @livewire('layouts.footer-expres')

    </div>
    @endauth
    
    </body>
    

</html>


<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>

@stack('alpine-plugins')
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> -->



