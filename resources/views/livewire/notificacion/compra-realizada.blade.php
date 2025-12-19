<div>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f8f9fa;">
        <div class="card shadow-lg border-0" style="width: 100%; max-width: 600px; border-radius: 15px;">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('img/logopanexpres_color.png') }}" alt="Logo Pan Express" width="200" style="display: block; margin: 0 auto; max-width: 220px; height: auto; border: 0;">
                    </div>
                </div>
                <div class="text-center mb-4">
                    <div class="display-4 text-success mb-2">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2 class="fw-bold">¡Gracias por tu compra!</h2>
                    <p class="text-muted">Hemos recibido tu pedido correctamente.</p>
                </div>

                <hr class="text-muted opacity-25">

                <div class="row mb-4 mt-1">
                    <div class="col-6">
                        <div class="">Nro de Pedido:</div>
                        <span class="fw-bold text-dark">#{{ $pedido->nropedido }}</span>
                    </div>
                    <div class="col-6 text-end">
                        <div class="">Estado del Pago:</div>
                        <span class="badge bg-success text-dark px-3 shadow-sm">{{ $pedido->getConfirmed() }} </span>
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
                            @forelse ($pedidoDetalles as $index => $detalle)
                            <tr>
                                <td class="py-3 fw-bold">{{ $detalle->product->name }}</td>
                                <td class="text-center">{{ $detalle->quantity }}</td>
                                <td class="text-end">{{ $detalle->price1 }}</td>
                                <td class="text-end">{{ $detalle->subtotal() }} {{ $pedido->getMonedaAttribute()}}</td>
                            </tr>
                            @empty
                            <tr class="text-center">
                                <td colspan="5">
                                    <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/v2/assets/empty.svg" alt="No results found">
                                    <p class="mt-2">No se encontro resultados</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot class="border-top">
                            <tr>
                                <td colspan="3" class="text-end py-2 text-muted">Precio del Delivery:</td>
                                <td class="text-end py-2 fw-bold">{{ $pedido->costeenvio }} {{ $pedido->getMonedaAttribute()}}</td>
                            </tr>
                            <tr class="h5">
                                <td colspan="3" class="text-end py-3 fw-bold">Total:</td>
                                <td class="text-end py-3 fw-bold">{{ $pedido->coste }} {{ $pedido->getMonedaAttribute()}}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="d-flex justify-content-between mt-4">
                        <a class="btn btn-success" href="/detallespedido/{{ $pedido->nropedido }}">
                            Sigue tu pedido
                        </a>
                    
                        <a href="/" class="btn btn-success">
                            Volver a la tienda
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
