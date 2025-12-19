<div>
    <style>
    .carouselpromo-inner {
        display: flex !important; /* Fuerza el flujo horizontal */
        flex-wrap: nowrap !important;
        align-items: stretch;
    }

    .carouselpromo-item {
        flex: 0 0 auto; /* Evita que los items se encojan */
        width: 100%; 
    }
</style>
    <style>
        /* ----------------------------------------------------------- */
        /* ✅ AJUSTE GLOBAL DE ROBUSTEZ */
        /* ----------------------------------------------------------- */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* ----------------------------------------------------------- */
        /* ✅ SECCIÓN 2: CONTENEDOR PROMOCIONES */
        /* ----------------------------------------------------------- */
        .container-promociones {
            width: 100%; 
            /* ALTURA ELIMINADA para que sea determinada por el contenido */
            display: flex;
            flex-direction: column; 
            gap: 0;
        }

        /* ----------------------------------------------------------- */
        /* COLUMNAS BASE (MÓVIL) */
        /* ----------------------------------------------------------- */
        .col-promociones {
            /* ALTURA ELIMINADA O AUTOMÁTICA */
            width: 100%; 
        }
        
        .col-promociones.col1 {
            flex-basis: 100%; 
            flex-grow: 1; 
            padding: 0; 
        }

        .col-promociones.col2 {
            display: none; 
        }
        
        /* ----------------------------------------------------------- */
        /* ✅ CARRUSEL PROMO - Nueva técnica de Aspect Ratio (16:9) */
        /* ----------------------------------------------------------- */
        .container-carouselpromo-full {
            width: 100%; 
            /* Altura 0 y padding para mantener proporción 16:9 (o el que desees) */
            height: 0;
            padding-bottom: 56.25%; /* (9 / 16 * 100%) = Proporción 16:9 */
            
            overflow: hidden; 
            position: relative;
            background-color: transparent; 
        }

        .carouselpromo-inner {
            /* Ocupa el 100% de la altura y ancho definido por el padding */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            
            display: flex;
            transition: transform 0.5s ease-in-out;
            flex-shrink: 0; 
        }

        .carouselpromo-item {
            flex-shrink: 0; 
            height: 100%;
            position: relative; 
            padding: 0px; 
        }
        
        .carouselpromo-item img {
            height: 100%; 
            width: 100%; 
            /* ⭐ CORRECCIÓN CLAVE: Asegura que la imagen se vea COMPLETA (sin recorte) y proporcional ⭐ */
            
        }
        
        /* ----------------------------------------------------------- */
        /* ⭐ DIV FLOTANTE PARA PRECIO/TEXTO ⭐ */
        /* Se mantiene position: absolute; para flotar dentro del item */
        /* ----------------------------------------------------------- */
        .promo-overlay {
            position: absolute;
            /* top: 20px;  */
            bottom: 20px;
            /* right: 20px;  */
            left: 20px;
            padding: 10px 15px;
            background-color: rgba(146, 138, 138, 0.7); 
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 5px;
            z-index: 5; 
        }
        /* ----------------------------------------------------------- */

        /* [ ... Estilos de Controles e Indicadores se mantienen ... ] */
        .carouselpromo-control {
            position: absolute; top: 0; bottom: 0; z-index: 10; display: flex;
            align-items: center; justify-content: center; width: 8%; color: #fff;
            opacity: 0.6; background: none; border: none; cursor: pointer;
            font-size: 2rem;
        }
        .carouselpromo-control:hover { opacity: 1; }
        .carouselpromo-control-prev { left: 0; }
        .carouselpromo-control-next { right: 0; }
        
        .carouselpromo-indicators {
            position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); z-index: 15;
            display: flex; padding: 0; list-style: none;
        }
        .carouselpromo-indicators button {
            width: 10px; height: 10px; margin: 0 5px; background-color: #fff;
            border: 1px solid #fff; border-radius: 50%; cursor: pointer;
            opacity: 0.5; transition: opacity 0.6s ease;
        }
        .carouselpromo-indicators button.active { opacity: 1; }

        /* ----------------------------------------------------------- */
        /* FILAS INTERNAS DE COLUMNA 2 */
        /* La columna 2 ahora debe definir su altura por media query */
        /* ----------------------------------------------------------- */
        .fila-promo {
            flex-grow: 1; 
            padding: 0; 
            overflow: hidden; 
            text-indent: 0; 
            height: 50vh; /* Mantener la altura vh aquí para escritorio, pero en móvil no se usa */
            position: relative; 
        }
        
        .fila-promo img {
            height: 100%;
            width: 100%;
        }
        
        /* ----------------------------------------------------------- */
        /* ✅ MEDIA QUERY PARA ESCRITORIO (a partir de 768px) */
        /* ----------------------------------------------------------- */
        @media (min-width: 768px) {
            
            .container-promociones {
                flex-direction: row; 
                gap: 5px; 
                height: 50vh; 

            }
            
            .col-promociones.col1 {
                flex-basis: 60%; 
                height: 100%;
            }
            
            /* Restablecer el carrusel a altura normal en escritorio (60vh) */
            .container-carouselpromo-full {
                height: 100%;
                padding-bottom: 0;
            }
            
            .carouselpromo-inner {
                position: relative; /* Restablecer para que fluya normalmente */
            }
            
            .col-promociones.col2 {
                display: flex; 
                flex-direction: column; 
                flex-basis: 40%; 
                height: 100%;
            }
            
            /* En escritorio, se estira la imagen si es necesario */
            .carouselpromo-item img {
                width: 100%;
                height: 100%;
            }

            @media (max-width: 768px) {
                
            }

        }
        
    </style>
    
    <section class="container-promociones">

        <div class="col-promociones col1">
            
            <div class="container-carouselpromo-full" id="mainCarouselpromoContainer">
                
                <div class="carouselpromo-inner" id="carouselpromoInner">
                    @forelse($promociones as $promocion)
                        <div class="carouselpromo-item" data-id="{{ $promocion->id }}">
                            @if($promocion->product_id)
                                <a href="/routedetails/{{ $promocion->comercio_id }}/{{ $promocion->product_id }}">
                                    <img src="{{ $promocion->avatar_url }}" alt="{{ $promocion->name }}">
                                </a>
                            @else
                                <img src="{{ $promocion->avatar_url }}" alt="{{ $promocion->name }}">
                            @endif
                            <div class="promo-overlay">
                                {{$currencyValue}}. {{ $promocion->product->price1 ?? '' }}
                            </div>
                        </div>
                    @empty
                        <div class="carouselpromo-item">
                            <h4>No existen promociones disponibles</h4>
                        </div>
                    @endforelse
                </div>

                <button class="carouselpromo-control carouselpromo-control-prev" type="button" data-direction="-1">&lt;</button>
                <button class="carouselpromo-control carouselpromo-control-next" type="button" data-direction="1">&gt;</button>
                
                <div class="carouselpromo-indicators" id="carouselpromoIndicators">
                    
                    @php
                        $isFirst = true;
                    @endphp
                    @foreach($promociones as $clave => $promocion)
                        <button data-index="{{ $promocion->id }}" class="{{ $isFirst ? 'active' : '' }}"></button>
                        @php $isFirst = false; @endphp
                    @endforeach
                </div>
                
            </div>
            
        </div>

        <div class="col-promociones col2">
            
            <div class="fila-promo superior">
                <img src="{{$bannerRightUp}}" alt="Banner Empresa">    
            </div>
            
            <div class="fila-promo inferior">
                <img src="{{$bannerRightDown}}" alt="Banner Residencial">
            </div>
            
        </div>
        
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const inner = document.getElementById('carouselpromoInner');
        const items = Array.from(inner.querySelectorAll('.carouselpromo-item'));
        const indicatorsContainer = document.getElementById('carouselpromoIndicators');
        
        if (items.length <= 1) return;

        // 1. CLONACIÓN AUTOMÁTICA (Para evitar errores de Blade)
        const firstClone = items[0].cloneNode(true);
        const lastClone = items[items.length - 1].cloneNode(true);
        inner.appendChild(firstClone);
        inner.insertBefore(lastClone, items[0]);

        // 2. RE-CALCULAR ITEMS CON CLONES
        const allItems = inner.querySelectorAll('.carouselpromo-item');
        const totalItems = allItems.length; // Originales + 2
        let currentIndex = 1;

        // 3. ESTILOS DE ANCHO PRECISOS
        inner.style.width = `${totalItems * 100}%`;
        allItems.forEach(item => {
            item.style.width = `${100 / totalItems}%`;
        });

        function updateCarousel(transition = true) {
            inner.style.transition = transition ? 'transform 0.5s ease-in-out' : 'none';
            const offset = -(currentIndex * (100 / totalItems));
            inner.style.transform = `translateX(${offset}%)`;

            // Actualizar indicadores
            const realIndex = (currentIndex === 0) ? items.length - 1 : (currentIndex === totalItems - 1) ? 0 : currentIndex - 1;
            const dots = indicatorsContainer.querySelectorAll('button');
            dots.forEach((dot, i) => dot.classList.toggle('active', i === realIndex));
        }

        // Posición inicial (en el primer elemento real, no el clon)
        updateCarousel(false);

        // 4. LÓGICA DE REBOTE INFINITO
        inner.addEventListener('transitionend', () => {
            if (currentIndex === 0) {
                currentIndex = totalItems - 2;
                updateCarousel(false);
            }
            if (currentIndex === totalItems - 1) {
                currentIndex = 1;
                updateCarousel(false);
            }
        });

        // 5. CONTROLES
        document.querySelectorAll('.carouselpromo-control').forEach(btn => {
            btn.addEventListener('click', () => {
                const dir = parseInt(btn.getAttribute('data-direction'));
                currentIndex += dir;
                updateCarousel(true);
            });
        });

        // Autoplay
        let interval = setInterval(() => { currentIndex++; updateCarousel(true); }, 4000);
        const container = document.getElementById('mainCarouselpromoContainer');
        container.addEventListener('mouseenter', () => clearInterval(interval));
        container.addEventListener('mouseleave', () => {
            interval = setInterval(() => { currentIndex++; updateCarousel(true); }, 4000);
        });
    });
    </script>

    <script>
        document.addEventListener('visibilitychange', function() {

            
            // Verificamos si la pestaña vuelve a estar visible
            if (document.visibilityState === 'visible') {
                // Seleccionamos el carrusel por su ID
                var myCarousel = $('#carouselExampleControls');
                
                // Reiniciamos al primer slide (índice 0)
                myCarousel.carousel(1);
                
                // Forzamos a que vuelva a iniciar el ciclo automático
                myCarousel.carousel('cycle');
            }
        });
    </script>
</div>
