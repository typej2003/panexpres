<div>
    <style>
        /* ----------------------------------------------------------- */
        /* DEFINICIONES CSS PARA REEMPLAZAR EL GRID DE BOOTSTRAP */
        /* ----------------------------------------------------------- */
        .page-row { /* Reemplaza .row */
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            /* Agrega un ligero espaciado si es necesario */
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .page-col { 
            /* Esta clase reemplaza todas las col-xx-12 */
            width: 100%;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            box-sizing: border-box;
        }

        /* Utilitarios */
        .text-success { /* Reemplaza .text-success */
            color: #198754 !important; 
        }
    </style>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="image/svg+xml" href="/icon.png" />
        <title>{{ setting('site_title') }} | {{ setting('site_name') }}</title>
        <link rel="stylesheet" href="/css/styles_expres.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="/js/jquery-3.6.4.min.js"></script>  
        @stack('styles')
        <livewire:styles />
        <livewire:scripts />
    </head> 
    <body>
        <div class="page-row"> <div class="page-col"> @if($in_cellphonecontact > 0)            
                    <div class="page-row" id="whatsapp"> <a href="https://api.whatsapp.com/send?phone=+58{{$comercio->contactcellphone}}&text={{ $comercio->msgcontact}}" target="_blank">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14 text-success" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
                        </a>
                    </div>            
                @endif
                @livewire('layouts.navbar-expres')
                <div class="wrapper">
                    @livewire('cart.cart1')
                </div>
            </div>
        </div>
        
        @livewire('layouts.footer-expres')

    </body>
        
    </html>


    <script src="/js/app.js"></script>
    <script src="/js/backend.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    @stack('js')
    @stack('before-livewire-scripts')
    <livewire:scripts />
    @stack('after-livewire-scripts')

    @stack('alpine-plugins')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </div>