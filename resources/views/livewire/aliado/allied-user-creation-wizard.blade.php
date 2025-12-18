<div>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <div class="container py-4">
        
        @if(Auth::check() && $currentStep > 1)
        <div class="row mb-4 justify-content-center">
            <div class="col-md-8">
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-success" style="width: {{ ($currentStep/5)*100 }}%"></div>
                </div>
                <div class="d-flex justify-content-between mt-2 small fw-bold text-muted">
                    <span>Identidad</span><span>Contacto</span><span>Empresa</span><span>¡Listo!</span>
                </div>
            </div>
        </div>
        @endif

        <div class="d-flex justify-content-center">

            {{-- PASO 1: REGISTRO INICIAL --}}
            @if($currentStep == 1)
            <div class="card mx-auto shadow-lg border-0" style="width: 36rem !important;">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <a href="/"><img src="{{ asset('/img/panexpres_banner.png') }}" style="max-width: 280px;"></a>
                        <p class="textoreg mt-3">¿Ya tienes una cuenta? <span><a href="/login" class="text-primary fw-bold">click aquí</a></span></p>
                        <p class="h2 fw-bold">Registro de Aliado</p>
                    </div>

                    <form wire:submit.prevent="saveStep1">
                        <div class="mb-3">
                            <label class="fw-bold small">Tipo de usuario</label>
                            <select wire:model.defer="state.role" class="form-control">
                                <option value="cliente">CLIENTE</option>
                                <option value="aliado">ALIADO</option>
                            </select>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-4">
                                <label class="small fw-bold">Tipo <span class="text-danger">*</span></label>
                                <select wire:model.defer="state.identificationNac" class="form-select">
                                    <option value="V">V-</option><option value="J">J-</option>
                                    <option value="E">E-</option><option value="G">G-</option>
                                </select>
                            </div>
                            <div class="col-8">
                                <label class="small fw-bold">Documento <span class="text-danger">*</span></label>
                                <input wire:model.defer="state.identificationNumber" type="text" class="form-control @error('state.identificationNumber') is-invalid @enderror">
                                @error('state.identificationNumber') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small fw-bold">Usuario <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" wire:model.defer="state.name" class="form-control">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            @error('state.name') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="small fw-bold">Email <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="email" wire:model.defer="state.email" class="form-control">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            @error('state.email') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="small fw-bold">Contraseña</label>
                                <input type="password" wire:model.defer="state.password" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="small fw-bold">Confirmar</label>
                                <input type="password" wire:model.defer="state.password_confirmation" class="form-control">
                            </div>
                            @error('state.password') <span class="text-danger small col-12">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-success fw-bold py-2 shadow-sm"><i class="fas fa-user-plus me-2"></i> Únete</button>
                        </div>
                    </form>
                </div>
            </div>
            @endif

            {{-- PASO 2: IDENTIDAD --}}
            @if($currentStep == 2)
            <div class="card shadow p-4 border-0" style="width: 36rem;">
                <h4 class="fw-bold mb-4 text-primary border-bottom pb-2">Datos de Identidad</h4>
                <div class="row g-3">
                    <div class="col-md-6"><label class="small fw-bold">Nombres</label><input type="text" wire:model.defer="state.names" class="form-control"></div>
                    <div class="col-md-6"><label class="small fw-bold">Apellidos</label><input type="text" wire:model.defer="state.surnames" class="form-control"></div>
                </div>
                <button wire:click="saveStep2" class="btn btn-primary w-100 mt-4">Siguiente Paso</button>
            </div>
            @endif

            {{-- PASO 3: CONTACTO --}}
            @if($currentStep == 3)
            <div class="card shadow p-4 border-0" style="width: 36rem;">
                <h4 class="fw-bold mb-4 text-primary border-bottom pb-2">Información de Contacto</h4>
                <div class="row g-2 mb-3">
                    <div class="col-4">
                        <label class="small fw-bold">Código</label>
                        <select wire:model.defer="state.cellphonecode" class="form-select">
                            <option value="0412">0412</option><option value="0414">0414</option><option value="0424">0424</option>
                        </select>
                    </div>
                    <div class="col-8"><label class="small fw-bold">Celular</label><input type="text" wire:model.defer="state.cellphone" class="form-control"></div>
                </div>
                <div class="mb-3"><label class="small fw-bold">Dirección de Residencia</label><textarea wire:model.defer="state.address" class="form-control" rows="3"></textarea></div>
                <button wire:click="saveStep3" class="btn btn-primary w-100 mt-2">Siguiente Paso</button>
            </div>
            @endif

            {{-- PASO 4: COMERCIO Y LOGO --}}
            @if($currentStep == 4)
            <div class="card shadow p-4 border-0" style="width: 36rem;">
                <h4 class="fw-bold mb-4 text-primary border-bottom pb-2">Datos del Comercio</h4>
                <div class="d-flex align-items-center mb-4 p-3 bg-light rounded border">
                    <div class="me-3 text-center">
                        @if ($logo)
                            <img src="{{ $logo->temporaryUrl() }}" class="rounded-circle border" style="width: 90px; height: 90px; object-fit: cover;">
                        @else
                            <div class="rounded-circle bg-white border d-flex align-items-center justify-content-center text-muted" style="width: 90px; height: 90px;"><i class="fas fa-store fa-2x"></i></div>
                        @endif
                    </div>
                    <div class="flex-grow-1">
                        <label class="small fw-bold">Subir Logo</label>
                        <input type="file" wire:model="logo" class="form-control form-control-sm">
                        <div wire:loading wire:target="logo" class="small text-primary"><i class="fas fa-spinner fa-spin"></i> Cargando...</div>
                    </div>
                </div>
                <div class="mb-3"><label class="small fw-bold">Nombre del Comercio</label><input type="text" wire:model.defer="state.nameC" class="form-control"></div>
                <div class="row g-2 mb-3">
                    <div class="col-4"><label class="small fw-bold">RIF</label><select wire:model.defer="state.rifLetter" class="form-select"><option value="J">J</option><option value="G">G</option></select></div>
                    <div class="col-8"><label>&nbsp;</label><input type="number" wire:model.defer="state.rifNumber" class="form-control"></div>
                </div>
                <div class="mb-3"><label class="small fw-bold">Email Comercial</label><input type="email" wire:model.defer="state.comercio_email" class="form-control"></div>
                <button wire:click="saveStep4" class="btn btn-success w-100 py-2 shadow fw-bold">Finalizar Registro</button>
            </div>
            @endif

            {{-- PASO 5: ÉXITO --}}
            @if($currentStep == 5)
            <div class="card shadow p-5 border-0 text-center" style="width: 36rem;">
                <i class="fas fa-check-circle text-success fa-5x mb-4"></i>
                <h2 class="fw-bold mb-3">¡Registro Completo!</h2>
                <p class="text-muted mb-4">Ya puedes empezar a gestionar tu panadería en la plataforma.</p>
                <a href="/dashboard" class="btn btn-primary btn-lg rounded-pill px-5 shadow">Ir al Panel de Control</a>
            </div>
            @endif

        </div>
    </div>
</div>