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
        /* ESTILO BASE (POR DEFECTO = MÓVIL) */
        /* ----------------------------------------------------------- */
        .container-promociones {
            width: 100%; 
            height: 60vh; 
            display: flex;
            flex-direction: column; 
            gap: 0; 
            background-color: #f0f0f0; 
        }

        /* ----------------------------------------------------------- */
        /* COLUMNAS BASE (MÓVIL) */
        /* ----------------------------------------------------------- */
        .col-promociones {
            height: 100%; 
            width: 100%; 
        }
        
        /* ❗ MÓVIL: COLUMNA 1 (CARRUSEL) OCUPA TODO EL ESPACIO */
        .col-promociones.col1 {
            flex-basis: 100%; 
            flex-grow: 1; 
            background-color: #ADD8E6; 
            padding: 0; 
        }

        /* ❗ MÓVIL: COLUMNA 2 (PROMOCIONES LATERALES) SE OCULTA */
        .col-promociones.col2 {
            display: none; 
        }
        
        /* ----------------------------------------------------------- */
        /* ✅ CARRUSEL PROMO (Nomenclatura Actualizada) */
        /* ----------------------------------------------------------- */
        .container-carouselpromo-full {
            width: 100%; 
            height: 100%; 
            overflow: hidden; 
            position: relative;
            padding: 0; 
            background-color: transparent; 
        }

        .carouselpromo-inner {
            height: 100%;
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 500%; 
            flex-shrink: 0; 
        }

        .carouselpromo-item {
            width: 20%; 
            flex-shrink: 0; 
            height: 100%;
            position: relative;
            padding: 0px; 
        }
        
        .carouselpromo-item img {
            height: 100%; 
            width: 100%; 
            /* La imagen se estira para llenar 100% sin object-fit. */
        }

        /* Estilos de Controles y Indicadores (Nomenclatura Actualizada) */
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
        /* FILAS INTERNAS DE COLUMNA 2 (2 FILAS AL 50/50) */
        /* ----------------------------------------------------------- */
        .fila-promo {
            flex-grow: 1; 
            padding: 0; 
            overflow: hidden; 
            text-indent: 0; 
            height: 50%; 
        }
        
        .fila-promo img {
            height: 100%;
            width: 100%;
            object-fit: cover; 
            display: block;
        }

        .fila-promo.superior {
            background-color: #ADD8E6;
        }
        .fila-promo.inferior {
            background-color: blueviolet;   
        }
        
        /* ----------------------------------------------------------- */
        /* ✅ MEDIA QUERY PARA ESCRITORIO (a partir de 768px) */
        /* ----------------------------------------------------------- */
        @media (min-width: 768px) {
            
            .container-promociones {
                flex-direction: row; 
                gap: 5px; 
            }
            
            .col-promociones.col1 {
                flex-basis: 60%; 
            }
            
            .col-promociones.col2 {
                display: flex; 
                flex-direction: column; 
                flex-basis: 40%; 
            }
        }
        
    </style>
    
    <section class="container-promociones">

        <div class="col-promociones col1">
            
            <div class="container-carouselpromo-full" id="mainCarouselpromoContainer">
                
                <div class="carouselpromo-inner" id="carouselpromoInner">
                    
                    <div class="carouselpromo-item is-clone" data-index="{{ $lastPromocion->id }}"><img src="{{ $lastPromocion->avatar_url }}" alt="{{ $lastPromocion->name }} Clon"></div>

                    @foreach($promociones as $clave => $promocion)
                    
                        <div class="carouselpromo-item" data-index="{{ $promocion->id }}"><img src="{{ $promocion->avatar_url }}" alt="{{ $promocion->name }}"></div>

                    @endforeach
                    
                    <div class="carouselpromo-item is-clone" data-index="{{ $firstPromocion->id }}"><img src="{{ $firstPromocion->avatar_url }}" alt="{{ $firstPromocion->name }} Clon"></div>
                    

                </div>

                <button class="carouselpromo-control carouselpromo-control-prev" type="button" data-direction="-1">&lt;</button>
                <button class="carouselpromo-control carouselpromo-control-next" type="button" data-direction="1">&gt;</button>
                
                <div class="carouselpromo-indicators" id="carouselpromoIndicators">
                    <button data-index="{{ $firstPromocion->id }}" class="active"></button>
                    @foreach($promociones as $clave => $promocion)
                         @if($firstPromocion->id !== $clave)
                            <button data-index="{{ $promocion->id }}"></button>
                        @endif
                    @endforeach
                </div>
                
            </div>
            
        </div>

        <div class="col-promociones col2">
            
            <div class="fila-promo superior">
                <img src="img/banner_empresa.jpg" alt="Banner Empresa">    
            </div>
            
            <div class="fila-promo inferior">
                <img src="img/banner_residencial1.jpg" alt="Banner Residencial">
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
            
            const realItemsCount = 3; 
            const totalItems = items.length;
            
            let currentIndex = 1; 
            
            let autoplayInterval;
            const AUTOPLAY_DELAY = 4000;

            if (totalItems <= 1) return;

            updateCarousel(false); 

            function updateCarousel(useTransition = true) {
                
                inner.style.transition = useTransition ? 'transform 0.5s ease-in-out' : 'none';

                const offset = currentIndex * (100 / totalItems);
                inner.style.transform = `translateX(-${offset}%)`;
                
                let realIndex = currentIndex - 1;
                if (currentIndex === 0) {
                    realIndex = realItemsCount - 1; 
                } else if (currentIndex === totalItems - 1) {
                    realIndex = 0; 
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
                    
                    // Se usa querySelectorAll para encontrar los nuevos controles
                    const direction = parseInt(control.getAttribute('data-direction'));
                    currentIndex += direction;
                    updateCarousel(true);

                    startAutoplay(); 
                });
            });

            indicatorsContainer.querySelectorAll('button').forEach(indicator => {
                indicator.addEventListener('click', () => {
                    stopAutoplay();

                    currentIndex = parseInt(indicator.getAttribute('data-index')) + 1; 
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