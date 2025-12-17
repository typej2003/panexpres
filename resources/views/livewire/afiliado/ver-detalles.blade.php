<div>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        .text-primary-custom { color: #893e08 !important; }
        
        /* Indicadores Numéricos */
        .img-number {
            width: 32px; height: 32px;
            border-radius: 50%;
            background: #fff;
            border: 1px solid #ddd;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; font-weight: bold; font-size: 0.85rem;
            transition: 0.2s; color: #555;
        }
        .img-number.active {
            background: #893e08; color: white; border-color: #893e08;
        }

        /* Estilo del selector de cantidad */
        .input-qty::-webkit-inner-spin-button, .input-qty::-webkit-outer-spin-button {
            -webkit-appearance: none; margin: 0;
        }

        @media (max-width: 991px) {
            .main-image-container { height: 320px !important; }
            .sticky-md-top { position: relative !important; top: 0 !important; }
        }
    </style>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <div class="wrapper-center" wire:ignore>

        <div class="wrapper-center">
            <div class="show-recommended content-row mx-auto my-4 p-2" style="max-width: 1200px;">
                
                <h2 class="text-primary-custom mb-4 fw-bold">Detalles del producto</h2>

                <div class="row g-4">
                    <div class="col-12 col-lg-5">
                        <div class="product-gallery sticky-md-top" style="top: 20px; z-index: 10">
                            
                            <div class="image-counters d-flex gap-2 mb-3 justify-content-center">
                                <div class="img-number active" onclick="changeImageNum(this, 'imagen1.jpg')">1</div>
                                <div class="img-number" onclick="changeImageNum(this, '/img/campanas.png')">2</div>
                                <div class="img-number" onclick="changeImageNum(this, 'imagen3.jpg')">3</div>
                                <div class="img-number" onclick="changeImageNum(this, '/img/campanas.png')">4</div>
                            </div>

                            <div class="main-image-container shadow-sm rounded bg-white d-flex align-items-center justify-content-center overflow-hidden" style="height: 400px; border: 1px solid #f0f0f0;">
                                <img id="main-view" src="/img/campanas.png" alt="Producto" class="img-fluid h-100" style="object-fit: contain; transition: opacity 0.3s ease;">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <div class="product-info-card p-4 shadow-sm rounded bg-white border">
                            <h3 class="fw-bold mb-1">Nombre del Producto</h3>
                            <a href="#" class="text-muted small d-block mb-3 text-decoration-none">Ver más de este comercio</a>
                            
                            <h2 class="text-success fw-bold mb-4" id="product-price">$150.00</h2>

                            <div class="row align-items-end mb-4">
                                <div class="col-sm-5 col-md-4 mb-3 mb-sm-0">
                                    <label class="form-label small fw-bold">Cantidad</label>
                                    <div class="input-group input-number-group">
                                        <button class="btn btn-outline-secondary btn-decrement shadow-none" type="button">-</button>
                                        <input type="number" class="form-control text-center input-qty bg-white" value="1" min="1" max="10" readonly>
                                        <button class="btn btn-outline-secondary btn-increment shadow-none" type="button">+</button>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-8">
                                    <button class="btn btn-success btn-lg w-100 py-3 fw-bold shadow-sm">
                                        COMPRAR AHORA <i class="fa fa-shopping-cart ms-2"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="service-badges d-flex gap-4 border-top pt-3 mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa fa-truck text-primary-custom fs-5"></i>
                                    <span class="small fw-bold">Delivery</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 border-start ps-4">
                                    <i class="fa fa-store text-warning fs-5"></i>
                                    <span class="small fw-bold">Pickup</span>
                                </div>
                            </div>

                            <div class="accordion accordion-flush" id="productDetailAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed px-0 fw-bold bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#desc">
                                            Información del producto
                                        </button>
                                    </h2>
                                    <div id="desc" class="accordion-collapse collapse" data-bs-parent="#productDetailAccordion">
                                        <div class="accordion-body px-0 text-muted small">
                                            Descripción detallada del artículo.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-bottom">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed px-0 fw-bold bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#specs">
                                            Especificaciones
                                        </button>
                                    </h2>
                                    <div id="specs" class="accordion-collapse collapse" data-bs-parent="#productDetailAccordion">
                                        <div class="accordion-body px-0 small text-muted">
                                            Detalles técnicos y materiales.
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            // Visor de Imágenes
            function changeImageNum(element, src) {
                const mainView = document.getElementById('main-view');
                mainView.style.opacity = '0.3';
                setTimeout(() => {
                    mainView.src = src;
                    mainView.style.opacity = '1';
                }, 150);
                $('.img-number').removeClass('active');
                $(element).addClass('active');
            }

            // LÓGICA DE CANTIDAD CORREGIDA (Delegación de eventos para máxima compatibilidad)
            $(document).ready(function() {
                // Incrementar
                $(document).on('click', '.btn-increment', function() {
                    let $input = $(this).parent().find('.input-qty');
                    let val = parseInt($input.val());
                    let max = parseInt($input.attr('max')) || 10;
                    if (val < max) {
                        $input.val(val + 1).trigger('change');
                    }
                });

                // Decrementar
                $(document).on('click', '.btn-decrement', function() {
                    let $input = $(this).parent().find('.input-qty');
                    let val = parseInt($input.val());
                    let min = parseInt($input.attr('min')) || 1;
                    if (val > min) {
                        $input.val(val - 1).trigger('change');
                    }
                });
            });
        </script>
    </div>
   
</div>