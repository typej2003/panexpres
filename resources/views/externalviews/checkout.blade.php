<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compra y vende Pan de Jamón y Combos Navideños Caracas">
    <meta name="keywords" content="vende, compra, Pan, Jamón, Pan de Jamón, Combos Navideños, Caracas, directo a tu mesa, @panexpres.vezla, Panexprés, Panexpres">
    <link rel="icon" type="image/png" href="{{ asset('android-chrome-192x192.png?v=1') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico?v=1') }}">
    <meta name="theme-color" content="#ff572f"> 

    <title>PanExprés</title>
    <title>@yield('title', 'PanExpres - Tu panadería a un clic')</title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/styles_expres.css">

@livewire('layouts.navbar-checkout-expres')
<div class="container-fluid">
    @livewire('afiliado.shipping', ['nropedido' => $nropedido])
</div>

<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>
<script src="/js/script_expres.js"></script>


@stack('js')
@stack('before-livewire-scripts')
<livewire:scripts />
@stack('after-livewire-scripts')


@stack('alpine-plugins')
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
