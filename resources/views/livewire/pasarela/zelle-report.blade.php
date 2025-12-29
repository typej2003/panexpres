<div>
    <div class="wrapper-center">
        <div class="card-form p-4 bg-white rounded shadow col-12">
            <div class="card-body p-4 p-md-5">
                
                <div class="text-center mb-4">
                    <img src="/img/zelle_logo.png" alt="Zelle" class="img-fluid mb-2" style="max-width: 120px;">
                    <h3 class="fw-bold text-dark">Reportar Pago</h3>
                    <p class="text-muted">Siga los pasos a continuación para completar su orden</p>
                </div>

                <div class="alert alert-info border-0 shadow-sm mb-4 p-3" style="background-color: #f0f7ff; border-radius: 12px;">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-university text-primary me-2 mx-3"></i>
                        <span class="fw-bold text-dark">Datos para realizar el pago:</span>
                    </div>
                    <div class="ps-4">
                        <div class="mb-1">
                            <small class="text-dark">Correo Zelle:</small>
                            <span class="fw-bold text-primary" style="font-size: 1rem;">ddrsistemas@gmail.com</span>
                        </div>
                        <div>
                            <small class="text-dark">Titular:</small>
                            <span class="fw-bold text-dark">Alejandro Valoz</span>
                        </div>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="badge bg-warning text-dark p-2 w-100 shadow-sm" style="white-space: normal; font-size: 0.85rem;">
                        <i class="fas fa-robot me-1"></i> <strong>Confirmación automática:</strong> Reporte a los 2 minutos de realizar el pago.
                    </p>
                </div>

                <form wire:submit.prevent="submitZelle">
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Monto a pagar ($)</label>
                        <div class="input-group shadow-sm">
                            <span class="input-group-text bg-white fw-bold">$</span>
                            <input type="text" wire:model.defer="state.amount" 
                                class="form-control form-control-lg bg-light text-center fw-bold" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Nombre del Titular (Origen)</label>
                        <input type="text" wire:model.defer="state.zelle_holder" 
                            class="form-control @error('zelle_holder') is-invalid @enderror shadow-sm" 
                            placeholder="Nombre de la cuenta desde donde envió">
                        @error('zelle_holder') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-secondary">Correo Electrónico</label>
                        <input type="email" wire:model.defer="state.email" 
                            class="form-control @error('email') is-invalid @enderror shadow-sm" 
                            placeholder="nombre@ejemplo.com">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold text-secondary">Número de Referencia</label>
                        <input type="text" wire:model.defer="state.reference" 
                            class="form-control fw-bold @error('reference') is-invalid @enderror shadow-sm" 
                            placeholder="Ingrese el código de confirmación" style="letter-spacing: 1px;">
                        @error('reference') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm" wire:loading.attr="disabled">
                            <span wire:loading.remove>Confirmar Reporte</span>
                            <span wire:loading>Procesando...</span>
                        </button>
                    </div>

                </form>
                <div class="text-center mt-4 text-muted small">
                    <i class="fas fa-lock me-1"></i> Transacción segura protegida por PanExpres
                </div>
            </div>

            <div class="text-center pb-4">
                <button id="volver-formapago" class="btn btn-outline-secondary btn-sm px-4" 
                        wire:click.prevent="goBack">
                    <i class="fas fa-arrow-left me-1"></i> Volver
                </button>
            </div>
        </div>
    </div>
</div>