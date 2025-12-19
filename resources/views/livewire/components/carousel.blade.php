<div>
    <style>
        /* 1. CONTENEDOR FLEX PRINCIPAL */
        .main-layout-wrapper {
            display: flex;
            width: 100vw; 
            height: 50vh; 
            overflow: hidden;
            margin: auto;
            background: #000;
        }

        /* 2. SECCIÓN IZQUIERDA: CARRUSEL (60vw) */
        .carousel-column {
            width: 60vw;
            position: relative;
            overflow: hidden;
            background: #000;
            border: 2px dashed #ff4444; /* Borde de control */
        }

        /* 3. SECCIÓN DERECHA: SIDE COLUMN (40vw) DIVIDIDA EN DOS */
        .side-column {
            width: 40vw;
            display: flex;
            flex-direction: column; /* División vertical */
            height: 100%;
        }

        .side-banner {
            height: 50%; /* Cada banner ocupa la mitad del alto (25vh) */
            width: 100%;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #222;
        }

        /* Bordes de control para los banners derechos */
        .banner-up { border: 2px dashed #44ff44; }
        .banner-down { border: 2px dashed #ffff44; }

        .side-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* 'cover' suele verse mejor en banners laterales pequeños */
        }

        .banner-info {
            position: absolute;
            bottom: 0;
            background: rgba(0,0,0,0.6);
            color: white;
            width: 100%;
            padding: 5px;
            text-align: center;
            font-size: 0.9rem;
        }

        /* ESTILOS INTERNOS DEL CARRUSEL (Mantenidos) */
        .carousel-track { display: flex; height: 100%; transition: transform 0.5s ease-in-out; }
        .carousel-slide { min-width: 100%; height: 100%; position: relative; display: flex; align-items: center; justify-content: center; }
        .image-container { width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; }
        .image-container img { width: 100%; height: 100%; object-fit: contain; }
        .price-badge { position: absolute; top: 20px; right: 20px; background: #dd751a; color: white; padding: 10px 15px; border-radius: 50px; font-weight: bold; z-index: 20; border: 2px solid #fff; }
        .product-info { position: absolute; bottom: 0; width: 100%; background: rgba(0,0,0,0.7); color: #fff; padding: 15px; text-align: center; z-index: 15; }
        .nav-btn { position: absolute; top: 25vh; transform: translateY(-50%); background: rgba(255,255,255,0.2); color: white; border: none; padding: 20px 10px; cursor: pointer; z-index: 25; }
        .next { right: 0; } .prev { left: 0; }

        @media (max-width: 992px) {
            .main-layout-wrapper { flex-direction: column; height: auto; }
            .carousel-column, .side-column { width: 100vw; height: 50vh; }
        }
    </style>

    <div class="main-layout-wrapper">
        
        <div class="carousel-column" id="carousel-promos">
            <div class="carousel-track" id="track-promos">
                @if($promociones->count() > 0)
                    {{-- Clon Último --}}
                    @php $lastPromo = $promociones->last(); @endphp
                    <div class="carousel-slide clone">
                        @if($lastPromo->product) <div class="price-badge">{{ $currencyValue }} {{ $lastPromo->product->price1 }}</div> @endif
                        <div class="image-container"><img src="{{ $lastPromo->avatar_url }}"></div>
                    </div>

                    {{-- Reales --}}
                    @foreach($promociones as $promocion)
                        <div class="carousel-slide">
                            @if($promocion->product) <div class="price-badge">{{ $currencyValue }} {{ $promocion->product->price1 }}</div> @endif
                            <div class="image-container"><img src="{{ $promocion->avatar_url }}"></div>
                            <div class="product-info">
                                <h4>{{ $promocion->title }}</h4>
                                <button class="btn btn-success" wire:click="sendCard({{ $promocion->product_id }}, 1)" >Comprar</button>
                            </div>
                        </div>
                    @endforeach

                    {{-- Clon Primero --}}
                    @php $firstPromo = $promociones->first(); @endphp
                    <div class="carousel-slide clone">
                        @if($firstPromo->product) <div class="price-badge">{{ $currencyValue }} {{ $firstPromo->product->price1 }}</div> @endif
                        <div class="image-container"><img src="{{ $firstPromo->avatar_url }}"></div>
                    </div>
                @endif
            </div>
            <button class="nav-btn prev" onclick="moveSlide(-1)">❮</button>
            <button class="nav-btn next" onclick="moveSlide(1)">❯</button>
        </div>

        <div class="side-column">
            
            <div class="side-banner banner-up">
                @if($bannerRightUp)
                    <img src="{{ $bannerRightUp->avatar_url }}" alt="{{ $bannerRightUp->title }}">
                    <div class="banner-info">{{ $bannerRightUp->title }}</div>
                @else
                    <p style="color:gray">Banner Superior</p>
                @endif
            </div>

            <div class="side-banner banner-down">
                @if($bannerRightDown)
                    <img src="{{ $bannerRightDown->avatar_url }}" alt="{{ $bannerRightDown->title }}">
                    <div class="banner-info">{{ $bannerRightDown->title }}</div>
                @else
                    <p style="color:gray">Banner Inferior</p>
                @endif
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.getElementById('track-promos');
            const slides = document.querySelectorAll('.carousel-slide');
            if (slides.length <= 1) return;

            let counter = 1;
            const size = 100;
            track.style.transform = `translateX(${-size * counter}%)`;

            window.moveSlide = function(step) {
                track.style.transition = "transform 0.5s ease-in-out";
                counter += step;
                track.style.transform = `translateX(${-size * counter}%)`;
            }

            track.addEventListener('transitionend', () => {
                if (slides[counter].classList.contains('clone')) {
                    track.style.transition = "none";
                    counter = (counter === 0) ? slides.length - 2 : 1;
                    track.style.transform = `translateX(${-size * counter}%)`;
                }
            });

            setInterval(() => moveSlide(1), 6000);
        });
    </script>
</div>