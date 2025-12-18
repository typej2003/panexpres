<div>
    <style>
        /* ----------------------------------------------------------- */
        /* BASE Y AJUSTES GENERALES */
        /* ----------------------------------------------------------- */
        * {
            box-sizing: border-box;
        }

        .container-main {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 10px;
        }

        .flex-row {
            display: flex;
            flex-wrap: wrap;
        }
        
        /* Estilo principal del cuadro de producto */
        .cuadro {
            width: 100%; 
            height: auto;
            box-shadow: 5px 5px 15px gray;
            margin-bottom: 10px;
            padding: 15px;
            border: 1px solid #ccc;
        }
        
        /* Contenedor interno del producto (usa flex para layout interno) */
        .producto-inner {
            display: flex;
            flex-direction: column; /* Columna por defecto en móvil */
            gap: 15px;
            padding: 15px;
            border: 1px solid #ccc;
        }
        
        .producto-parte {
            width: 100%; /* Por defecto en móvil, ocupa todo el ancho */
        }
        
        /* ⭐ APLICACIÓN DE PADDING LATERAL A COLUMNA DE CONTROL ⭐ */
        .producto-parte.col-ctrl {
            /* Padding base para separar el contenido de los bordes laterales en móvil/escritorio */
            padding: 0 15px;
        }

        /* ----------------------------------------------------------- */
        /* ELEMENTOS VISUALES */
        /* ----------------------------------------------------------- */
        /* MEJORA APLICADA A LA IMAGEN DEL PRODUCTO */
        .imgProduct {
            width: 250px; 
            height: 200px; 
            object-fit: cover; 
            border-radius: 8px; 
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15); 
            transition: transform 0.3s ease; 
        }
        .imgProduct:hover {
             transform: scale(1.02); 
        }

        .negrita {
            font-weight: bold;
        }
        
        .centrar {
            text-align: center;
            margin-bottom: 10px;
        }
        
        .description {
            height: auto;
            text-align: justify;
        }
        
        /* CENTRADO DE LA COLUMNA DE DESCRIPCIÓN */
        .producto-parte.col-desc {
            display: flex; 
            flex-direction: column;
            /* justify-content: center;  */
            /* align-items: center;  */
            padding: 15px;
        }
        .producto-parte.col-desc p, .producto-parte.col-desc div {
            text-align: start;
            width: 100%;
            margin-right: 5px;
        }
        .producto-parte.col-desc .centrar:last-child {
            margin-bottom: 0;
        }

        .christmas-text1 {
            font-family: 'Great Vibes', cursive; /* Fuente elegante */
            font-size: 1.8rem !important;
            color: #910101ff; /* Color principal rojo */
            text-shadow: 
                0 0 10px #01380dff,   /* Brillo rojo suave */
                0 0 20px #0e521dff,
                0 0 30px #3d9c52ff,   /* Brillo verde */
                0 0 40px #6baa79ff,
                0 0 50px #ffffffff,   /* Brillo dorado/amarillo */
                0 0 60px #ffffffff !important;
            /*text-shadow: -2px 2px 0px #ffff;*/
            font-weight: bold !important;
            /*animation: pulse 2s infinite alternate; /* Animación simple para dar vida */
        }

        /* Animación opcional para un efecto de "parpadeo" o "brillo pulsante" */
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.7;
            }
            100% {
                transform: scale(1.05);
                opacity: 1;
            }
        }
        
        /* Estilos de Botones */
        .btn-view, .btn-sale {
            display: inline-block;
            padding: 8px 15px;
            border: 1px solid transparent; 
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 5px;
            transition: all 0.3s ease; 
            font-weight: bold;
        }
        
        /* BOTÓN VER */
        .btn-view {
            background-color: #f8f9fa;
            color: #495057;
            border-color: #495057;
        }
        .btn-view:hover {
            background-color: #495057;
            color: #fff;
        }
        .btn-view::before {
            content: "\1F441"; 
            margin-right: 5px;
            font-size: 1.1em;
            vertical-align: middle;
        }
        
        /* BOTÓN COMPRAR AHORA */
        .btn-sale {
            background-color: #dd751a; 
            color: white; 
            border-color: #dd751a;
        }
        .btn-sale:hover {
            background-color: white; 
            color: #dd751a; 
            border-color: #dd751a;
        }

        .bg {
            background-color: #f8f9fa; 
            padding: 10px 0;
            margin-bottom: 15px;
        }
        
        /* ESTILO DEL INPUT NUMBER (Contador de cantidad) */
        .input-number-group {
            display: flex;
            justify-content: center;
            align-items: stretch; 
            width: 140px; 
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden; 
        }
        .input-number {
            flex-grow: 1; 
            text-align: center;
            padding: 8px 5px;
            border: none; 
            outline: none;
            font-size: 1em;
        }
        .input-group-button {
            display: flex;
        }
        .input-group-button span {
            display: block;
            padding: 8px 10px;
            background-color: #f8f8f8;
            color: #555;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.2s, color 0.2s;
            font-weight: bold;
        }
        .input-group-button span:hover {
            background-color: #e0e0e0;
            color: #000;
        }
        .input-group-button span:active {
            background-color: #ccc;
        }
        .input-number-decrement {
            border-right: 1px solid #ccc; 
        }
        .input-number-increment {
            border-left: 1px solid #ccc;
        }
        .justify-content-between {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        
        .logo-responsive {
            width: 95px;
            margin-top: 10px;
        }

        /* ----------------------------------------------------------- */
        /* MEDIA QUERY: ESCRITORIO (>= 769px) */
        /* ----------------------------------------------------------- */
        @media screen and (min-width: 769px) {
            .producto-inner {
                flex-direction: row; 
                align-items: stretch; 
            }
            .producto-parte {
                &.col-img {
                    width: 25%; 
                }
                &.col-desc {
                    width: 40%; 
                    height: 100%; 
                }
                &.col-ctrl {
                    width: 35%; 
                }
            }
            
            .imgProduct1 {
                width: 250px; 
                height: auto; 
                box-shadow: 
                0 0 10px #01380dff,   /* Brillo verde oscuro (base) */
                0 0 20px #0e521dff,
                0 0 30px #3d9c52ff,   /* Brillo verde medio */
                0 0 40px #6baa79ff,
                0 0 50px #ffffffff,   /* Brillo blanco suave (luz) */
                0 0 60px #ffffffff;  /* Brillo blanco extenso (aura) */
            }
            
            .cuadro {
                height: auto;
            }
        }
    </style>
    
    <div class="container-main">
        <div class="flex-row">
            <div style="width: 100%;">
                
                <div class="flex-row bg">
                    <div style="width: 100%;">
                        <span class="h4 mx-4" style="margin: 0 15px;">Resultado de: {{ $parametro }} </span>  
                    </div>
                </div>

                @if($parametro)
                    @forelse ($products as $index => $product)
                    <div class="cuadro m-3 h-auto" wire:key="product-{{ $product->id }}">
                        <div class="producto-inner">
                            
                            <div class="producto-parte col-img centrar">
                                <img class = "imgProduct" src="{{ $product->image1_url }}" alt="{{ $product->name }}">
                            </div>
                            
                            <div class="producto-parte col-desc mx-2 text-subtitle">
                                <p class="christmas-text negrita">{{ $product->name }}</p>
                                <p class="description">{{ $product->description }}</p>
                                <div class="p-0 my-0">
                                    <a class="btn btn-view" href="/routedetails/{{ $product->comercio_id }}/{{ $product->id }}">Ver</a>
                                </div>
                            </div>
                            
                            <div class="producto-parte col-ctrl">
                                <div class="centrar text-subtitle">Precio: {{ $currencyValue }} {{ $product->getPrice1() }}</div>
                                
                                <div class="centrar">
                                    <div class="justify-content-between">
                                        <div class="input-group input-number-group">
                                            <div class="input-group-button">
                                                <span class="input-number-decrement" data-product-id="{{ $product->id }}">-</span>
                                            </div>
                                            <input name="quantity_{{ $product->id }}" class="input-number " type="number" value="1" min="1" max="1000">
                                            <div class="input-group-button">
                                                <span class="input-number-increment" data-product-id="{{ $product->id }}">+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="centrar">
                                    <button wire:click.prevent="sendCard({{ $product->id }}, 1)" class="btn btn-sale text-center">Comprar ahora</button>
                                </div>
                                
                                <div class="centrar">
                                    <img class ="logo-responsive" src="{{ $product->comercio->avatar_url }}" alt="Logo {{ $product->comercio->name }}">
                                </div>

                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="cuadro m-3 h-auto" style="height: 50vh; display: flex; align-items: center; justify-content: center;">
                        <span> No tiene resultado</span>
                    </div>
                    @endforelse
                @endif
            </div>
        </div>
    </div>
    
    <script>
        
        document.addEventListener('DOMContentLoaded', () => {
            const increments = document.querySelectorAll('.input-number-increment');
            const decrements = document.querySelectorAll('.input-number-decrement');
            
            const getInputAndLimits = (button) => {
                const input = button.closest('.input-number-group').querySelector('.input-number');
                const min = parseInt(input.getAttribute('min'), 10) || 1;
                const max = parseInt(input.getAttribute('max'), 10) || 1000;
                return { input, min, max };
            };

            increments.forEach(button => {
                button.addEventListener('click', () => {
                    const { input, max } = getInputAndLimits(button);
                    let val = parseInt(input.value, 10);
                    
                    if (val < max) {
                        input.value = val + 1;
                    }
                });
            });

            decrements.forEach(button => {
                button.addEventListener('click', () => {
                    const { input, min } = getInputAndLimits(button);
                    let val = parseInt(input.value, 10);
                    
                    if (val > min) { 
                        input.value = val - 1;
                    }
                });
            });

            document.querySelectorAll('.input-number').forEach(input => {
                input.addEventListener('change', () => {
                    const min = parseInt(input.getAttribute('min'), 10) || 1;
                    const max = parseInt(input.getAttribute('max'), 10) || 1000;
                    let val = parseInt(input.value, 10);

                    if (isNaN(val) || val < min) {
                        input.value = min;
                    } else if (val > max) {
                        input.value = max;
                    }
                });
            });
        });
        
    </script>
</div>