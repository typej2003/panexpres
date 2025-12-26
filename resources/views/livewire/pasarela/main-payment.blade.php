<div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                
                @if($step == 'selector')
                    <div class="card shadow rounded-4 border-0">
                        <div class="card-body p-4 text-center">
                            <h4 class="mb-4 fw-bold text-dark">¿Cómo desea pagar?</h4>
                            
                            <div wire:click="selectMethod('biopago')" class="card mb-3 method-card border shadow-sm">
                                <div class="card-body d-flex align-items-center p-3">
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <span class="h5 mb-0 fw-bold text-secondary">BioPago</span>
                                    </div>
                                    
                                    <i class="fas fa-chevron-right text-muted"></i>
                                </div>
                            </div>

                            <div wire:click="selectMethod('zelle')" class="card mb-3 method-card border shadow-sm">
                                <div class="card-body d-flex align-items-center p-3">
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <span class="h5 mb-0 fw-bold text-secondary">Zelle</span>
                                    </div>
                                    
                                    <i class="fas fa-chevron-right text-muted"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <img src="/img/bdv_zelle.png" alt="biopago" style="width: 80%;" class="me-3 mx-2">
                        </div>
                    </div>

                @elseif($step == 'biopago')
                    @livewire('pasarela.bio-pago', ['nropedido' => $nropedido, 'comercio_id' => 1])

                @elseif($step == 'zelle')
                    @livewire('pasarela.zelle-report', ['nropedido' => $nropedido, 'comercio_id' => 1])
                @endif

            </div>
        </div>
    </div>

    <style>
        .method-card {
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }
        .method-card:hover {
            background-color: #fcfcfc;
            border-color: #0d6efd !important;
            transform: scale(1.02);
        }
    </style>
</div>
