<div>
    <style>
        .container-show-products {
            height: auto !important;
        }
    </style>
    <style>
        /* ------------------------------------------------------------------- */
        /* ⚙️ VARIABLES DE CONFIGURACIÓN */
        /* ------------------------------------------------------------------- */
        :root {
            --items-desktop: 4; 
            --items-tablet: 2; 
            --items-mobile: 1; 
        }

        /* Estilos base del carrusel */
        
        .carousel-container-pure {
            width: 100%; margin: 0; overflow: hidden; position: relative;
        }
        .carousel-inner-pure {
            display: flex; transition: transform 0.3s ease-out;
        }
        .carousel-inner-pure.dragging { cursor: grabbing; }
        .carousel-control-pure {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5); color: white; border: none;
            padding: 10px; cursor: pointer; z-index: 10; width: 8%;
            font-size: 2rem; user-select: none; height: 50px;
            display: flex; align-items: center; justify-content: center;
        }
        .carousel-control-pure.prev { left: 0; width: 40px;}
        .carousel-control-pure.next { right: 0; }
        .sr-only { display: none; }
        .carousel-item-pure {
            flex: 0 0 calc(100% / var(--items-desktop));
            min-width: calc(100% / var(--items-desktop));
            height: 450px; padding: 10px; box-sizing: border-box;
            position: relative;
        }
        .card-content {
            height: 100%; background: transparent; box-shadow: none;
            height: auto; background: blue; box-shadow: none;
            overflow: hidden; 
            display: flex; /* Mantener flex */
            flex-direction: column; /* Mantener columna */
            position: relative; 
            border: 2px solid #ccc; border-radius: 8px;
        }
        .card-single-body { 
            /* ✅ MODIFICADO: Asegura que el body de la imagen crezca para ocupar el espacio */
            flex-grow: 1; 
            height: 100%; 
            width: 100%; 
            overflow: hidden;
            /* ✅ NUEVO: Centrar la imagen dentro del div si usa contain */
            display: flex;
            align-items: center; 
            justify-content: center;
        }
        .card-single-body img { 
            /* ✅ MODIFICADO: Usar max-width/max-height en lugar de width/height absolutos */
            max-width: 100%; 
            max-height: 100%; 
            width: auto; 
            height: auto; 
            object-fit: contain; 
            pointer-events: none; 
        }
        
        /* ------------------------------------------------------------------- */
        /* 💡 ESTILO DEL DIV FLOTANTE (OVERLAY) - CENTRADO VERTICAL */
        /* ------------------------------------------------------------------- */
        .card-overlay-text {
            position: absolute; 
            top: 100px; 
            transform: translateY(-50%); 
            left: 25px; 
            z-index: 5;
            width: 100%; padding: 10px 15px; color: white;
            background: rgba(255, 255, 255, 0); border-radius: 5px;
            font-size: 0.9rem; text-align: left;
            
        }

        .card-overlay-text h4 { margin: 0 0 5px 0; font-size: 1.1rem; }

        .christmas-text {
            font-family: 'Great Vibes', cursive; /* Fuente elegante */
            font-size: 1.8rem !important;
            color: #ffffffff; /* Color principal rojo */
            text-shadow: 
                0 0 10px #000000ff,   /* Brillo rojo suave */
                0 0 20px #3a3a3aff,
                0 0 30px #838383ff,   /* Brillo verde */
                0 0 40px #d8d8d8ff,
                0 0 50px #ffffffff,   /* Brillo dorado/amarillo */
                0 0 60px #ffffffff !important;
            text-shadow: -2px 2px 0px #ffff;
            font-weight: bold !important;
            animation: pulse 2s infinite alternate; /* Animación simple para dar vida */
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

        .subtitle {
            color: #dd751a;
            font-size: 1.2rem !important;
            font-weight: bold !important;
            text-shadow: -1px 1px 0px #757575ff;
            margin-top: 25px;
        }

        .bg-subtitle {
            background-color: #ffffffff !important;
            padding: 5px;
            border: 2px solid #757575ff;
            border-radius: 15px;
        }
        /* ------------------------------------------------------------------- */
        /* ✨ MODIFICADO: IMAGEN DE INSIGNIA (BADGE) TIPO PRENDEDOR GRANDE */
        /* ------------------------------------------------------------------- */
        .card-badge-pure {
            position: absolute;
            bottom: -20px; /* Ajuste para darle un poco más de margen */
            right: -10px; /* Ajuste para darle un poco más de margen */
            z-index: 16; 
            width: 180px; /* Aumentar el tamaño */
            height: 180px; /* Aumentar el tamaño */
            border-radius: 0; /* Remover borde circular */
            overflow: visible; /* Permitir que la sombra o partes sobresalgan (si aplica) */
            background-color: transparent; /* Fondo transparente */
            box-shadow: none; /* Remover sombra para efecto de "prendedor" */
        }

        .card-badge-pure img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Asegura que la imagen completa se vea si tiene transparencia, sin recortar */
        }
        
        /* ------------------------------------------------------------------- */
        /* ✅ BOTÓN FLOTANTE "COMPRAR" (POSICIÓN SUBIDA) */
        /* ------------------------------------------------------------------- */
        .buy-button-pure {
            position: absolute;
            bottom: 25px; 
            left: 50%; 
            transform: translateX(-50%); 
            z-index: 100;
            padding: 10px 15px;
            background-color: #dd751a; 
            color: white;
            border: none;
            border-radius: 50px; 
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
            transition: background-color 0.2s ease;
            white-space: nowrap; 
            text-decoration: none; 
            display: inline-block;
        }
        
        .buy-button-pure:hover {
            background-color: #ffff; 
            color: #dd751a;
        }

        /* ------------------------------------------------------------------- */
        /* 📱 MEDIA QUERY: Responsive (Ajustes para móvil) */
        /* ------------------------------------------------------------------- */
        @media (max-width: 1024px) {
            .carousel-item-pure {
                flex: 0 0 calc(100% / var(--items-tablet)); 
                min-width: calc(100% / var(--items-tablet)); 
                height: auto; 
            }
        }
        @media (max-width: 768px) {
            .carousel-item-pure {
                flex: 0 0 calc(100% / var(--items-mobile)); min-width: calc(100% / var(--items-mobile)); height: 100%; padding: 0px; 
            }
            .carousel-control-pure { width: 12%; }
            .card-overlay-text {
                top: 10%; 
                bottom: 10px; 
                left: 10px; right: 10px;
                width: auto; padding: 8px 10px; font-size: 0.8rem; text-align: left;
                transform: none; 
            }

            .christmas-text {
                font-size: 1.5rem !important;
            }
            .subtitle {
                font-size: 1.2rem !important;
                margin-top: 15px;
            }

            .buy-button-pure {
                bottom: 15px; 
                left: 50%; 
            }

            .container-show-products {
                
            }

            .card-badge-pure {
                bottom: -10px; /* Ajuste para darle un poco más de margen */
                right: -15px; /* Ajuste para darle un poco más de margen */
                width: 100px; /* Aumentar el tamaño */
                height: 100px; /* Aumentar el tamaño */
            }

        }
    </style>
    <div class="container-show-recommended">
        <h4>También te recomendamos</h4>
        <div class="carousel-container-pure" id="carouselContainer">
            <div class="carousel-inner-pure" id="carouselInner">
                
                <div class="carousel-item-pure">
                    <div class="card-content">
                        <div class="card-single-body">
                            <img src="{{ $lastProduct->image1_url }}" alt="{{ $lastProduct->name }} Clon">
                        </div>
                        <div class="card-overlay-text">
                            <h4 class="christmas-text">{{ $lastProduct->name }}</h4>
                            <p class="subtitle"><span class="bg-subtitle">{{$currencyValue}}. {{ $lastProduct->price1 }}</span></p>
                        </div>
                        <div class="card-badge-pure">
                            <img src="img/campanas.png" alt="Icono de Campanas">
                        </div>
                    </div>
                    <a href="" wire:click.prevent="sendCard({{ $lastProduct->id }}, 1)" class="buy-button-pure">Comprar</a>
                </div> 

                @forelse ($productsRecommended as $index => $recommended)
                    <div class="carousel-item-pure">
                        <div class="card-content">
                            <div class="card-single-body">
                                <img src="{{ $recommended->image1_url }}" alt="Imagen 1">
                            </div>
                            <div class="card-overlay-text">
                                <h4 class="christmas-text">{{ $recommended->name }}</h4>
                                <p class="subtitle"><span class="bg-subtitle">{{$currencyValue}}. {{ $recommended->price1 }}</span></p>
                            </div>
                            <div class="card-badge-pure">
                                <img src="img/campanas.png" alt="Icono de Campanas">
                            </div>
                        </div>
                        <a href="" wire:click.prevent="sendCard({{ $recommended->id }}, 1)" class="buy-button-pure">Comprar</a>
                    </div>
                @empty
                    <div class="carousel-item-pure">
                        <div class="card-content">
                            <div class="card-single-body">
                                <img src="img/banner_empresa.jpg" alt="Imagen 1">
                            </div>
                            <div class="card-overlay-text">
                                <h4>No existe elementos</h4>
                                <p>¡No encontro elementos!</p>
                            </div>
                            <div class="card-badge-pure">
                                <img src="img/campanas.png" alt="Icono de Campanas">
                            </div>
                        </div>
                    </div>
                @endforelse
                
                <div class="carousel-item-pure">
                    <div class="card-content">
                        <div class="card-single-body">
                            <img src="{{ $firstProduct->image1_url }}" alt="{{ $firstProduct->name }} Clon">
                        </div>
                        <div class="card-overlay-text">
                            <h4 class="christmas-text">{{$firstProduct->name}}</h4>
                            <p class="subtitle"><span class="bg-subtitle">{{$currencyValue}}. {{ $firstProduct->price1 }}</span></p>
                        </div>
                        <div class="card-badge-pure">
                            <img src="img/campanas.png" alt="Icono de Campanas">
                        </div>
                    </div>
                    <a href="" wire:click.prevent="sendCard({{ $firstProduct->id }}, 1)" class="buy-button-pure">Comprar</a>
                </div>

            </div>

            <button class="carousel-control-pure prev" type="button" onclick="moveCarousel(-1)">
                &lt; <span class="sr-only">Anterior</span> 
            </button>
            <button class="carousel-control-pure next" type="button" onclick="moveCarousel(1)">
                &gt; <span class="sr-only">Siguiente</span>
            </button>
        </div>

        <script>
            // 1. VARIABLES GLOBALES
            const carouselInner = document.getElementById('carouselInner');
            const carouselContainer = document.getElementById('carouselContainer');
            
            // ❗️ NUEVAS VARIABLES PARA LOS BOTONES
            const controlPrev = document.querySelector('.carousel-control-pure.prev');
            const controlNext = document.querySelector('.carousel-control-pure.next');
            
            let items = []; 
            let totalItems = 0;

            let currentIndex = 1; 
            let isDragging = false;
            let startPos = 0;
            let currentTranslate = 0;
            let prevTranslate = 0;

            let autoplayInterval;
            const AUTOPLAY_DELAY = 3000; // 3 segundos

            // 2. FUNCIONES AUXILIARES Y AUTOPLAY

            function getItemWidth() {
                if (items.length === 0) return 0;
                return items[0].clientWidth;
            }

            function setTransform(translate) {
                carouselInner.style.transform = `translateX(${translate}px)`;
            }

            function setPositionByIndex() {
                currentTranslate = currentIndex * -getItemWidth();
                setTransform(currentTranslate);
            }

            function moveCarousel(direction) {
                if (isDragging) return; 
                
                carouselInner.style.transition = 'transform 0.3s ease-out';
                currentIndex += direction; 
                setPositionByIndex();
            }

            function startAutoplay() {
                if (autoplayInterval) return; 
                
                autoplayInterval = setInterval(() => {
                    moveCarousel(1);
                }, AUTOPLAY_DELAY);
            }

            function stopAutoplay() {
                clearInterval(autoplayInterval);
                autoplayInterval = null;
            }
            
            // FUNCIÓN: Añade eventos de pausa/reinicio a las tarjetas
            function addCardHoverListeners() {
                items.forEach(item => {
                    item.addEventListener('mouseenter', stopAutoplay);
                    item.addEventListener('mouseleave', startAutoplay);
                });
            }
            
            // FUNCIÓN: Añade eventos de pausa/reinicio a los botones de control
            function addControlListeners() {
                if (controlPrev && controlNext) {
                    // Botón Anterior
                    controlPrev.addEventListener('mouseenter', stopAutoplay);
                    controlPrev.addEventListener('mouseleave', startAutoplay);
                    
                    // Botón Siguiente
                    controlNext.addEventListener('mouseenter', stopAutoplay);
                    controlNext.addEventListener('mouseleave', startAutoplay);
                }
            }


            // 3. LISTENERS PRINCIPALES
            
            carouselInner.addEventListener('transitionend', () => {
                if (totalItems <= 1) return; 

                if (currentIndex >= totalItems - 1) { 
                    carouselInner.style.transition = 'none';
                    currentIndex = 1; 
                    setPositionByIndex();
                } 
                else if (currentIndex <= 0) {
                    carouselInner.style.transition = 'none';
                    currentIndex = totalItems - 2; 
                    setPositionByIndex();
                }
            });

            // --- Lógica de Arrastre (Mantiene stop/start Autoplay) ---
            
            carouselInner.addEventListener('mousedown', (event) => {
                isDragging = true;
                startPos = event.clientX;
                prevTranslate = currentTranslate;
                carouselInner.classList.add('dragging');
                carouselInner.style.transition = 'none';
                event.preventDefault(); 
                stopAutoplay();
            });

            window.addEventListener('mousemove', (event) => {
                if (!isDragging) return;
                const currentPosition = event.clientX;
                const dragDistance = currentPosition - startPos;
                currentTranslate = prevTranslate + dragDistance;
                setTransform(currentTranslate);
            });

            window.addEventListener('mouseup', () => {
                if (!isDragging) return;
                isDragging = false;
                carouselInner.classList.remove('dragging');

                const movedBy = currentTranslate - prevTranslate;
                const threshold = getItemWidth() * 0.25; 

                if (movedBy < -threshold) { 
                    currentIndex++;
                } else if (movedBy > threshold) { 
                    currentIndex--;
                }

                moveCarousel(0); 
                startAutoplay(); 
            });

            window.addEventListener('resize', () => {
                setPositionByIndex();
            });


            // 4. INICIALIZACIÓN ROBUSTA
            document.addEventListener('DOMContentLoaded', () => {
                // Inicialización de variables DOM después de que Blade ha renderizado
                items = carouselInner.querySelectorAll('.carousel-item-pure');
                totalItems = items.length; 

                if (totalItems > 1) {
                    // 1. Posicionar el carrusel en el primer elemento real
                    setPositionByIndex(); 
                    
                    // 2. Iniciar el Autoplay
                    startAutoplay(); 
                    
                    // 3. Asignar listeners de pausa/reinicio
                    
                    // Mantenemos este listener, aunque los botones tienen prioridad
                    carouselContainer.addEventListener('mouseenter', stopAutoplay);
                    carouselContainer.addEventListener('mouseleave', startAutoplay);
                    
                    addCardHoverListeners(); 
                    
                    // ❗️ APLICAR LISTENERS DIRECTAMENTE A LOS BOTONES
                    addControlListeners();
                }
            });
        </script>
    </div>
    
</div>