<div>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f8f9fa;">
        <div class="card shadow-lg border-0" style="width: 100%; max-width: 600px; border-radius: 15px;">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <div class="display-1 text-success mb-2">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2 class="fw-bold">¡Gracias por tu compra!</h2>
                    <p class="text-muted">Hemos recibido tu pedido correctamente.</p>
                </div>

                <hr class="text-muted opacity-25">

                <div class="row mb-4 mt-4">
                    <div class="col-6">
                        <span class="text-muted d-block small text-uppercase fw-bold">Nro de Pedido:</span>
                        <span class="fw-bold text-dark">#{{ $pedido->id ?? '000123' }}</span>
                    </div>
                    <div class="col-6 text-end">
                        <span class="text-muted d-block small text-uppercase fw-bold">Estado del Pedido:</span>
                        <span class="badge bg-warning text-dark px-3 shadow-sm">Procesando</span>
                    </div>
                </div>

                <h6 class="fw-bold mb-3 mt-4"><i class="fas fa-shopping-basket me-2"></i>Detalle del pedido:</h6>
                
                <div class="table-responsive">
                    <table class="table table-borderless align-middle">
                        <thead class="bg-light">
                            <tr class="small text-muted text-uppercase">
                                <th class="py-3">Producto</th>
                                <th class="text-center py-3">Cant</th>
                                <th class="text-end py-3">P. Unitario</th>
                                <th class="text-end py-3">SubTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Ejemplo de fila --}}
                            <tr>
                                <td class="py-3 fw-bold">Pan Campesino</td>
                                <td class="text-center">2</td>
                                <td class="text-end">$2.50</td>
                                <td class="text-end">$5.00</td>
                            </tr>
                        </tbody>
                        <tfoot class="border-top">
                            <tr>
                                <td colspan="3" class="text-end py-2 text-muted">Precio del Delivery:</td>
                                <td class="text-end py-2 fw-bold">$1.50</td>
                            </tr>
                            <tr class="h5">
                                <td colspan="3" class="text-end py-3 fw-bold">Total:</td>
                                <td class="text-end py-3 fw-bold text-primary">$6.50</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="d-grid mt-4">
                    <a href="/home" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                        Volver a la tienda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
