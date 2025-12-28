<div>
    <div class="wrapper-center">
        <div class="card-form p-4 bg-white rounded shadow col-12">
            <div class="card-body p-4 p-md-5">
                
                <div class="text-center mb-4">
                    <img src="/img/zelle_logo.png" alt="Zelle" class="img-fluid mb-2" style="max-width: 120px;">
                    <h3 class="fw-bold text-dark">Reportar Pago</h3>
                    <p class="text-muted">Complete los datos de su transferencia Zelle</p>
                    <p class="text-muted bg-warning p-1">Confirmación automatica: Reporte a los 2 minutos de realizar el pago</p>
                </div>

                <form wire:submit.prevent="submitZelle">
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Monto Pagado ($)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light fw-bold">$</span>
                            <input type="text" wire:model.defer="state.amount" 
                                class="form-control form-control-lg bg-light text-center fw-bold" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Nombre del Titular</label>
                        <input type="text" wire:model.defer="state.zelle_holder" 
                            class="form-control @error('zelle_holder') is-invalid @enderror" 
                            placeholder="Nombre y Apellido de la cuenta origen">
                        @error('zelle_holder') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Correo Electrónico Zelle</label>
                        <input type="email" wire:model.defer="state.email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            placeholder="nombre@ejemplo.com">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold text-secondary">Número de Referencia</label>
                        <input type="text" wire:model.defer="state.reference" 
                            class="form-control fw-bold @error('reference') is-invalid @enderror" 
                            placeholder="Ingrese el código de confirmación">
                        @error('reference') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm mx-auto" wire:loading.attr="disabled">
                            <span wire:loading.remove>Confirmar Reporte</span>
                            <span wire:loading>Procesando...</span>
                        </button>
                    </div>

                </form>
                <div class="text-center mt-3 text-muted small">
                    <i class="fas fa-lock me-1"></i> Transacción segura protegida por PanExpres
                </div>
            </div>

            <div class="text-center">
                <button id="volver-formapago" class="btn btn-outline-secondary w-75 mt-3" 
                        wire:click.prevent="goBack">
                    Volver
                </button>
            </div>
        </div>
        
    </div>
</div>
