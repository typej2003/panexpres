<style>
    /* ✅ Ajustes de Estructura */
    .container-promociones {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .col-promociones { width: 100%; }
    .col-promociones.col2 { display: none; }

    /* ✅ Carrusel Proporción 16:9 */
    .container-carouselpromo-full {
        width: 100%;
        height: 0;
        padding-bottom: 56.25%; /* 16:9 */
        overflow: hidden;
        position: relative;
        background-color: transparent;
    }

    .carouselpromo-inner {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-wrap: nowrap !important;
        align-items: stretch;
        will-change: transform;
    }

    .carouselpromo-item {
        flex: 0 0 100%; /* Cada item ocupa el 100% exacto */
        width: 100%;
        height: 100%;
        position: relative;
    }

    .carouselpromo-item img {
        min-height: 210px;
        width: 100%;
        object-fit: cover; /* Asegura que la imagen llene el espacio */
    }

    /* ✅ Div Flotante (Overlay) - Se mantiene tu estilo */
    .promo-overlay {
        position: absolute;
        top: 20px;
        right: 20px;
        padding: 10px 15px;
        background-color: #ff572f;
        color: #fff;
        font-size: 1.2rem;
        font-weight: bold;
        border-radius: 50px;
        z-index: 5;
    }

    del { font-size: 12px !important; }

    /* ✅ Controles e Indicadores */
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

    /* ✅ Media Query Escritorio */
    @media (min-width: 768px) {
        .container-promociones { flex-direction: row; gap: 5px; height: 50vh; }
        .col-promociones.col1 { flex-basis: 60%; height: 100%; }
        .col-promociones.col2 { display: flex; flex-direction: column; flex-basis: 40%; height: 100%; }
        .container-carouselpromo-full { height: 100%; padding-bottom: 0; }
        .fila-promo { flex-grow: 1; height: 50vh; position: relative; overflow: hidden; }
        .fila-promo img { height: 100%; width: 100%; object-fit: cover; }

        .carouselpromo-item img {
            height: 100%;
            width: 100%;
            object-fit: cover; /* Asegura que la imagen llene el espacio */
        }
    }
</style>

<section class="container-promociones">
    <div class="col-promociones col1">
        <div class="container-carouselpromo-full" id="mainCarouselpromoContainer">
            <div class="carouselpromo-inner" id="carouselpromoInner">
                @forelse($promociones as $promocion)
                    <div class="carouselpromo-item">
                        @if($promocion->product_id)
                            <a href="/routedetails/{{ $promocion->comercio_id }}/{{ $promocion->product_id }}">
                                <img src="{{ $promocion->avatar_url }}" alt="{{ $promocion->name }}">
                            </a>
                            <div class="promo-overlay">
                                @if($promocion->product->in_offer == '1')
                                    <!-- @if($promocion->product->nroproductdelivery >= 3)
                                        <span> +3 panes delivery gratis</span>
                                    @else -->
                                        {{$currencyValue}}. {{ $promocion->product->price_offer }} <span class="tachado">antes {{ $promocion->product->price1 }}</span>
                                    <!-- @endif -->
                                @else
                                    {{$currencyValue}}. {{ $promocion->product->price1 }}
                                @endif 
                            </div>
                        @else
                            <img src="{{ $promocion->avatar_url }}" alt="{{ $promocion->name }}">
                        @endif
                    </div>
                @empty
                    <div class="carouselpromo-item">
                        <h4 class="p-4">No existen promociones disponibles</h4>
                    </div>
                @endforelse
            </div>

            <button class="carouselpromo-control carouselpromo-control-prev" data-direction="-1" type="button">&lt;</button>
            <button class="carouselpromo-control carouselpromo-control-next" data-direction="1" type="button">&gt;</button>
            
            <div class="carouselpromo-indicators" id="carouselpromoIndicators">
                @foreach($promociones as $index => $promocion)
                    <button class="{{ $loop->first ? 'active' : '' }}" data-index="{{ $index }}"></button>
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
    document.addEventListener('DOMContentLoaded', function() {
        const inner = document.getElementById('carouselpromoInner');
        const container = document.getElementById('mainCarouselpromoContainer');
        
        if (!inner || !container) {
            console.error("Error: No se encontraron los elementos del carrusel.");
            return;
        }

        // 1. Obtener items y clonar
        let items = Array.from(inner.getElementsByClassName('carouselpromo-item'));
        if (items.length < 2) return;

        const firstClone = items[0].cloneNode(true);
        const lastClone = items[items.length - 1].cloneNode(true);
        
        inner.appendChild(firstClone);
        inner.insertBefore(lastClone, items[0]);

        // 2. Variables de estado
        let index = 1;
        let isPaused = false;
        const totalItems = items.length; // Cantidad original

        // 3. Función de Movimiento
        function mover(n, animar = true) {
            index = n;
            inner.style.transition = animar ? "transform 0.5s ease-in-out" : "none";
            inner.style.transform = "translateX(" + (-index * 100) + "%)";
            actualizarPuntos();
        }

        function actualizarPuntos() {
            const dots = document.querySelectorAll('.carouselpromo-indicators button');
            let realIdx = index - 1;
            if (index === 0) realIdx = totalItems - 1;
            if (index === totalItems + 1) realIdx = 0;
            
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === realIdx);
            });
        }

        // 4. Salto Infinito
        inner.addEventListener('transitionend', function() {
            if (index <= 0) {
                mover(totalItems, false);
            }
            if (index >= totalItems + 1) {
                mover(1, false);
            }
        });

        // 5. Botones (Selectores directos)
        const btnPrev = document.querySelector('.carouselpromo-control-prev');
        const btnNext = document.querySelector('.carouselpromo-control-next');

        if (btnPrev) {
            btnPrev.onclick = function() {
                mover(index - 1);
            };
        }
        if (btnNext) {
            btnNext.onclick = function() {
                mover(index + 1);
            };
        }

        // 6. Autoplay Robusto
        setInterval(function() {
            if (!isPaused) {
                mover(index + 1);
            }
        }, 4000);

        // Pausa al mouse
        container.onmouseenter = function() { isPaused = true; };
        container.onmouseleave = function() { isPaused = false; };

        // Arreglo para pestaña en blanco
        document.addEventListener('visibilitychange', function() {
            if (document.visibilityState === 'visible') {
                mover(index, false);
            }
        });

        // Inicio
        mover(1, false);
        console.log("Carrusel PanExpres cargado correctamente.");
    });
    </script>