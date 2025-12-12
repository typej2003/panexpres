<div class="">    
    <style>
        .img-responsive {
            width:100%; height: 250px;
        }
        /* Definiciones de Grid puro para reemplazar Bootstrap */
        .content-row { /* Reemplaza .row */
            display: flex;
            flex-wrap: wrap;
            margin-left: -0.5rem; /* Simulación de padding/gutter de Bootstrap */
            margin-right: -0.5rem;
        }
        .content-row > [class*="col-"] {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            box-sizing: border-box;
        }
        .col-full { /* Reemplaza .col-md-12 */
            width: 100%;
        }
        .col-two-thirds { /* Reemplaza .col-md-8 */
            width: 66.6666%;
        }
        .col-one-third { /* Reemplaza .col-md-4 */
            width: 33.3333%;
        }
        .col-half { /* Reemplaza .col-sm-6 / .col-md-6 */
            width: 50%;
        }
        .col-quarter { /* Reemplaza .col-md-3 */
            width: 25%;
        }
        /* Utilitarios */
        .d-flex { /* Reemplaza .d-flex */
            display: flex;
        }
        .justify-content-between { /* Reemplaza .justify-content-between */
            justify-content: space-between;
        }
        .justify-content-start { /* Reemplaza .justify-content-start */
            justify-content: flex-start;
        }
        .align-right { /* Reemplaza .float-sm-right */
            text-align: right;
        }
        .mx-auto { /* Reemplaza .mx-auto */
            margin-left: auto !important;
            margin-right: auto !important;
        }
        .my-3 { /* Reemplaza .my-3 */
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }
        .my-2 { /* Reemplaza .my-2 */
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }
        .mb-2 { /* Reemplaza .mb-2 */
            margin-bottom: 0.5rem !important;
        }
        .mx-1 { /* Reemplaza .mx-1 */
            margin-left: 0.25rem !important;
            margin-right: 0.25rem !important;
        }
        .d-none { /* Reemplaza .d-none */
            display: none !important;
        }

        /* Componentes */
        .custom-card { /* Reemplaza .card.shadow */
            border: 1px solid rgba(0,0,0,.125);
            border-radius: 0.25rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15); /* Reemplaza .shadow */
            background-color: #fff;
            padding: 1rem;
        }
        .btn-sale { /* Reemplaza .btn.btn-sale */
            background-color: #0d6efd; 
            color: white;
            padding: 0.5rem 1rem;
            border: 1px solid #0d6efd;
            border-radius: 0.25rem;
            cursor: pointer;
            text-align: center;
        }
        .btn { /* Reemplaza .btn */
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .border-secondary { /* Reemplaza .border.border-secondary */
            border-color: #6c757d !important;
        }
        .h-75 { /* Reemplaza .h-75 */
            height: 75% !important;
        }
        .text-white { /* Reemplaza .text-white */
            color: #fff !important;
        }
        .text-success { /* Reemplaza .text-success */
            color: #198754 !important; 
        }

        /* Acordeón (Solo apariencia, la interactividad la maneja el JS de Bootstrap) */
        .custom-accordion { /* Reemplaza .accordion */
            --bs-accordion-border-width: 1px;
            --bs-accordion-border-color: #dee2e6;
            --bs-accordion-border-radius: 0.25rem;
            border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
            border-radius: var(--bs-accordion-border-radius);
        }
        .accordion-item { /* Reemplaza .accordion-item */
            border: 1px solid var(--bs-accordion-border-color);
        }
        .accordion-header { /* Reemplaza .accordion-header */
            margin-bottom: 0;
        }
        .accordion-button { /* Reemplaza .accordion-button */
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            background-color: #fff;
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease;
        }
        .accordion-body { /* Reemplaza .accordion-body */
            padding: 1rem 1.25rem;
        }
        .collapse:not(.show) { /* Reemplaza .collapse:not(.show) */
            display: none;
        }

        /* Breadcrumb (Solo apariencia, la estructura se mantiene) */
        .breadcrumb { /* Reemplaza .breadcrumb */
            display: flex;
            flex-wrap: wrap;
            padding: 0;
            margin-bottom: 1rem;
            list-style: none;
        }
        .breadcrumb-item { /* Reemplaza .breadcrumb-item */
            padding: 0 0.5rem;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            padding-right: 0.5rem;
            color: #6c757d;
            content: var(--bs-breadcrumb-divider, "/");
        }
        .breadcrumb-item.active { /* Reemplaza .breadcrumb-item.active */
            color: #6c757d;
        }

        /* Media Queries para Responsive */
        @media only screen and (max-width: 1070px) {
            .img-responsive {
                
            }   
        }
        @media (max-width: 768px) {
            .col-half, .col-two-thirds, .col-one-third { /* Forzar full width en móvil para columnas */
                width: 100%;
            }
        }
    </style>
    <head>
        @if(auth()->user())
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <link rel="icon" type="image/svg+xml" href="/icon.png" />
            <title>{{ setting('site_title') }} | {{ setting('site_name') }}</title>
            <link rel="stylesheet" href="/css/navigationMap.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <script src="/js/jquery-3.6.4.min.js"></script>  
            <script src="/js/slick.min.js"></script>

            <link rel="stylesheet" href="/css/slick-theme.min.css">
            <link rel="stylesheet" href="/css/slick.min.css">
            <link rel="stylesheet" href="/css/carouselOffer.css">
            <link rel="stylesheet" href="/css/showProducts.css">
            <link rel="stylesheet" href="/css/star.css">
            @stack('styles')
            <livewire:styles />
            @endif          
        </head>
        @if($in_cellphonecontact > 0)            
            <div class="content-row" id="whatsapp"> <a href="https://api.whatsapp.com/send?phone=+58{{$comercio->contactcellphone}}&text={{ $comercio->msgcontact}}" target="_blank">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14 text-success" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
                </a>
            </div>            
        @endif
    
        <div class="content-row"> <div class="col-full"> 
                @if (config('app.url').'/nobanner.png' !== $comercio->banner_url )
                    
                    <img style="width:100%; height: 150px; 
                    @if(auth()->user())
                        margin-top: 60px;
                    @endif
                    " src="{{ asset($comercio->banner_url) }}" alt="">
                @else
                    
                    <img style="width:100%; height: 150px; 
                    @if(auth()->user())
                        margin-top: 60px;
                    @endif
                    " src="{{ asset('/img/panexpres_banner.png') }}" alt="">
                @endif
            </div>
        </div>
        <div class="custom-card mx-auto my-3" style="width: 80%" > <div class="content-row mb-2"> <div class="col-half"> </div><div class="col-half align-right"> <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">{{ $comercio->name }}</li>
                    </ol>
                </div></div><div class="content-row mb-2"> <div class="col-one-third"> <div style="width:100%; height: 80%;">
                        <img class="img-responsive" src="{{ $product->image1_url }}" alt="">
                    </div>
                    
                </div><div class="col-two-thirds"> <div class="content-row"> <div class="col-full"> {{ $product->name}}
                        </div>
                    </div>
                    <div class="content-row d-flex justify-content-between"> <div class="col-full"> <div>Ver mas productos de<span class="mx-1"><a href="">{{ $product->comercio->name}}</a></span></div>
                        </div>
                    </div>
                    <div class="content-row"> <div class="col-full"> <span>{{ $currencyValue }} {{ $product->getPrice1() }}</span>
                        </div>
                    </div>
                    <div class="content-row"> <form class="col-full d-flex justify-content-between" action="/add" method="post"> @csrf
                            <input name="product_id" type="hidden" value="{{ $product->id }}">
                            <input name="name" type="hidden" value="{{ $product->name }}">
                            <input name="price1" type="hidden" value="{{ $product->price1 }}">
                            <div class="col-half"> <div class="input-group input-number-group" style="margin-left: 0px !important; padding:0 !important;">
                                    <div class="input-group-button">
                                        <span class="input-number-decrement">-</span>
                                    </div>
                                    <input name="quantity" class="input-number" type="number" value="1" min="0" max="1000">
                                    <div class="input-group-button">
                                        <span class="input-number-increment">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-half d-flex justify-content-start"> <button class="btn btn-sale"><i class="text-white fa fa-shopping-cart" aria-hidden="true"></i> Comprar</button>
                            </div>
                            <div class="col-quarter d-none"> <button class="btn h-75 border border-secondary"><i class="fa fa-solid fa-heart"></i></button>                        
                            </div>
                        </form>
                    </div>
                    
                    <div class="content-row d-flex justify-content-start"> @if($product->in_envio_nacional)
                        <div style="width: auto;"><img style="width:60px" src="{{ asset('/img/envio_auto.png') }}" alt=""><span>Envío nacional</span></div>
                        @endif
                        @if($product->in_delivery)
                        <div style="width: auto;"><img style="width:60px" src="{{ asset('/img/envio_moto.png') }}" alt=""><span>Delivery</span></div>
                        @endif
                        @if($product->in_pickup)
                        <div style="width: auto;"><img style="width:60px" src="{{ asset('/img/envio_pickup.png') }}" alt=""><span>Pickup</span></div>
                        @endif
                    </div>
                    <div class="content-row"> <div class="col-full custom-accordion" id="accordionExample"> <div class="accordion-item">
                                <h4 class="accordion-header" id="headingOne">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Información del producto
                                    </a>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{$product->description}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingTwo">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Especificaciones del producto
                                    </a>
                                </h4>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Peso: </strong>{{ $product->tx_peso }}
                                        <br>
                                        <strong>Tamaño: </strong>{{ $product->tx_tamanio }}
                                        <br>
                                        <strong>Pedido: </strong>{{ $product->getPedido() }}
                                        <br>
                                        <strong>Envio Gratis: </strong>{{ $product->getEnvioGratis() }}
                                        <br>
                                        <strong>Frágil: </strong>{{ $product->getFragil() }}
                                        <br>
                                        <strong>Oferta: </strong>{{ $product->getOferta() }}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingThree">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Información de tienda
                                    </a>
                                </h4>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Dirección: {{$product->comercio->address}}</p>
                                        <p>
                                            <a href="https://api.whatsapp.com/send?phone=+58{{$comercio->contactcellphone}}&text={{ $comercio->msgcontact}}" target="_blank">{{$product->comercio->cellphonecontact}}</a> 
                                            {{$product->comercio->phonecontact}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div></div>
    
        <div class="content-row my-2"> <div class="col-full"> @livewire('components.show-recommended', [
                        'comercioId' => 1, 
                        'parametro' => $words='',
                        'manufacturer_id' => $manufacturer_id='',
                        'modelo_id' => $modelo_id='',
                        'motor_id' => $motor_id='',
                        ] )
            </div>
        </div>

        <script>
            $('.input-number-increment').click(function() {
            var $input = $(this).parents('.input-number-group').find('.input-number');
            var val = parseInt($input.val(), 10);
            $input.val(val + 1);
            });

            $('.input-number-decrement').click(function() {
            var $input = $(this).parents('.input-number-group').find('.input-number');
            var val = parseInt($input.val(), 10);
            if(val > 0)
                $input.val(val - 1);
            })

        </script>
@if(auth()->user())
    <script src="/js/bootstrap.bundle.min.js"></script> @stack('js')
    @stack('before-livewire-scripts')
    <livewire:scripts />
    @stack('after-livewire-scripts')

    @stack('alpine-plugins')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @endif


</div>