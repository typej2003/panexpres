<div>
    <div class="wrapper-center">

        <div class="show-recommended content-row mx-auto my-2 p-2">
            <h2 class="text-primary-custom mb-4">Detalles del producto</h2>

            <div class="row g-4">
                <div class="col-12 col-lg-7">
                    <div class="product-gallery">
                        <div class="main-image-container mb-3 shadow-sm rounded">
                            <img id="main-view" src="imagen1.jpg" alt="Producto" class="img-fluid rounded">
                        </div>
                        
                        <div class="thumbnail-bar d-flex gap-2">
                            <img src="imagen1.jpg" class="img-thumbnail active-thumb" onclick="changeImage(this)">
                            <img src="imagen2.jpg" class="img-thumbnail" onclick="changeImage(this)">
                            <img src="imagen3.jpg" class="img-thumbnail" onclick="changeImage(this)">
                            <img src="imagen4.jpg" class="img-thumbnail" onclick="changeImage(this)">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="product-info-card p-3 shadow-sm rounded bg-white">
                        <h3 class="fw-bold mb-1">Nombre del Producto</h3>
                        <a href="#" class="text-muted small d-block mb-3">Ver más productos del comercio</a>
                        
                        <h2 class="text-success fw-bold mb-4">$150.00</h2>

                        <div class="purchase-actions mb-4">
                            <label class="form-label small fw-bold">Cantidad</label>
                            <div class="input-group mb-3" style="max-width: 140px;">
                                <button class="btn btn-outline-secondary" type="button">-</button>
                                <input type="number" class="form-control text-center" value="1">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                            
                            <button class="btn btn-success btn-lg w-100 py-3 fw-bold shadow">
                                COMPRAR AHORA <i class="fa fa-shopping-cart ms-2"></i>
                            </button>
                        </div>

                        <div class="service-badges d-flex gap-3 border-top pt-3">
                            <div class="text-center">
                                <i class="fa fa-truck text-primary fs-4"></i>
                                <p class="small mb-0">Delivery</p>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-store text-warning fs-4"></i>
                                <p class="small mb-0">Pickup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="accordion accordion-flush shadow-sm rounded" id="productAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#info">
                                    Información del producto
                                </button>
                            </h2>
                            <div id="info" class="accordion-collapse collapse show" data-bs-parent="#productAccordion">
                                <div class="accordion-body text-muted">Aquí va la descripción larga del producto...</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#specs">
                                    Especificaciones del producto
                                </button>
                            </h2>
                            <div id="specs" class="accordion-collapse collapse" data-bs-parent="#productAccordion">
                                <div class="accordion-body">Tabla de pesos, medidas, materiales...</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#store">
                                    Información de tienda
                                </button>
                            </h2>
                            <div id="store" class="accordion-collapse collapse" data-bs-parent="#productAccordion">
                                <div class="accordion-body">Ubicación, políticas de devolución y horarios...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-recommended content-row mx-auto my-2"> 
            <div class="col-full"> 
                @livewire('components.show-recommended-expres', [
                            'comercioId' => 1, 
                            'parametro' => $words='',
                            ] )
            </div>
        </div>
    </div>
</div>