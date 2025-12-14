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
