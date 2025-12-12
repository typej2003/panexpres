<div>
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
            top: 20px; 
            right: 20px; 
            padding: 10px 15px;
            background-color: rgba(0, 0, 0, 0.7); 
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
                    
                    <div class="carouselpromo-item is-clone" data-index="{{ $lastPromocion->id }}">
                        <img src="{{ $lastPromocion->avatar_url }}" alt="{{ $lastPromocion->name }} Clon">
                        <div class="promo-overlay">
                            {{$currencyValue}}. {{ $lastPromocion->product->price1 ?? 'N/D' }}
                        </div>
                    </div>

                    @foreach($promociones as $clave => $promocion)
                    
                        <div class="carouselpromo-item" data-index="{{ $promocion->id }}">
                            <img src="{{ $promocion->avatar_url }}" alt="{{ $promocion->name }}">
                            <div class="promo-overlay">
                                {{$currencyValue}}. {{ $promocion->product->price1 ?? '¡OFERTA!' }}
                            </div>
                        </div>

                    @endforeach
                    
                    <div class="carouselpromo-item is-clone" data-index="{{ $firstPromocion->id }}">
                        <img src="{{ $firstPromocion->avatar_url }}" alt="{{ $firstPromocion->name }} Clon">
                        <div class="promo-overlay">
                            {{$currencyValue}}. {{ $firstPromocion->product->price1 ?? 'N/D' }}
                        </div>
                    </div>
                    

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
                <img src="img/promociones/panaderia_expreso_derecha1.jpg" alt="Banner Empresa">    
            </div>
            
            <div class="fila-promo inferior">
                <img src="img/promociones/panaderia_expreso_derecha2.jpg" alt="Banner Residencial">
            </div>
            
        </div>
        
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inner = document.getElementById('carouselpromoInner');
            const indicatorsContainer = document.getElementById('carouselpromoIndicators');
            const items = inner.querySelectorAll('.carouselpromo-item');
            const controls = document.querySelectorAll('.carouselpromo-control');
            const carouselContainer = document.getElementById('mainCarouselpromoContainer');

            const totalItems = items.length; 
            const realItemsCount = totalItems - 2; 
            
            let currentIndex = 1; 
            
            let autoplayInterval;
            const AUTOPLAY_DELAY = 4000;

            if (totalItems <= 3) return; 

            inner.style.width = `${totalItems * 100}%`; 
            
            const itemWidth = 100 / totalItems; 
            items.forEach(item => {
                item.style.width = `${itemWidth}%`;
            });
            
            updateCarousel(false); 

            function updateCarousel(useTransition = true) {
                
                inner.style.transition = useTransition ? 'transform 0.5s ease-in-out' : 'none';

                const offset = currentIndex * itemWidth; 
                inner.style.transform = `translateX(-${offset}%)`;
                
                let realIndex = currentIndex - 1;
                
                if (currentIndex === 0) {
                    realIndex = realItemsCount - 1; 
                } 
                else if (currentIndex === totalItems - 1) {
                    realIndex = 0; 
                } 
                else {
                    realIndex = currentIndex - 1;
                }
                
                indicatorsContainer.querySelectorAll('button').forEach((btn, index) => {
                    btn.classList.toggle('active', index === realIndex);
                });
            }
            
            inner.addEventListener('transitionend', () => {
                if (currentIndex === 0) {
                    currentIndex = totalItems - 2; 
                    updateCarousel(false);
                } 
                else if (currentIndex === totalItems - 1) {
                    currentIndex = 1; 
                    updateCarousel(false);
                }
            });

            function moveNext() {
                currentIndex++;
                updateCarousel(true);
            }

            function startAutoplay() {
                stopAutoplay(); 
                autoplayInterval = setInterval(moveNext, AUTOPLAY_DELAY);
            }
            function stopAutoplay() {
                clearInterval(autoplayInterval);
            }

            controls.forEach(control => {
                control.addEventListener('click', (e) => {
                    e.preventDefault();
                    stopAutoplay();
                    
                    const direction = parseInt(control.getAttribute('data-direction'));
                    currentIndex += direction;
                    updateCarousel(true);

                    startAutoplay(); 
                });
            });

            indicatorsContainer.querySelectorAll('button').forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    stopAutoplay();
                    
                    const targetIndex = index + 1;
                    currentIndex = targetIndex;
                    updateCarousel(true);

                    startAutoplay(); 
                });
            });

            carouselContainer.addEventListener('mouseenter', stopAutoplay);
            carouselContainer.addEventListener('mouseleave', startAutoplay);
            
            startAutoplay(); 
        });
    </script>
</div>