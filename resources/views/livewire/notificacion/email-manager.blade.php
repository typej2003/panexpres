<div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="mb-0"><i class="fas fa-envelope-open-text me-2 btn-success"></i> Centro de Notificaciones Email</h5>
                    </div>
                    <div class="card-body p-4">
                        @if (session()->has('success'))
                            <div class="alert alert-success d-flex align-items-center mb-4">
                                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger d-flex align-items-center mb-4">
                                <i class="fas fa-exclamation-triangle me-2"></i> {{ session('error') }}
                            </div>
                        @endif

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Remitente Institucional</label>
                                <select wire:model.defer="state.from_type" class="form-select shadow-sm">
                                    <option value="admin">Administrador (admin@panexpres.com)</option>
                                    <option value="soporte">Soporte Técnico (soporte@panexpres.com)</option>
                                    <option value="ventas">Dpto. Ventas (ventas@panexpres.com)</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Nombre del Destinatario</label>
                                <input type="text" wire:model.defer="state.full_name" class="form-control" placeholder="Nombre completo">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Correo Electrónico</label>
                                <input type="email" wire:model.defer="state.email" class="form-control" placeholder="ejemplo@dominio.com">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Asunto</label>
                                <input type="text" wire:model.defer="state.subject" class="form-control" placeholder="Motivo del correo">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold small">Mensaje</label>
                                <textarea wire:model.defer="state.message" class="form-control" rows="8" placeholder="Escriba el contenido aquí..."></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold small text-muted">Pie de página personalizado</label>
                                <textarea wire:model.defer="state.footer" class="form-control bg-light small" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top text-end">
                            <button wire:click="enviarEmail" wire:loading.attr="disabled" class="btn btn-primary px-5 btn-lg shadow">
                                <span wire:loading wire:target="enviarEmail" class="spinner-border spinner-border-sm me-2"></span>
                                <i class="fas fa-paper-plane me-2"></i> Enviar Ahora
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow border-0" style="max-height: 85vh;">
                    <div class="card-header bg-dark text-white">
                        <span class="small fw-bold text-uppercase">Directorio de Usuarios</span>
                    </div>
                    <div class="card-body p-0 d-flex flex-column">
                        <div class="p-3 border-bottom">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted small"></i></span>
                                <input type="text" wire:model="search" class="form-control border-start-0 ps-0" placeholder="Buscar usuario...">
                            </div>
                        </div>
                        
                        <div class="list-group list-group-flush overflow-auto">
                            @forelse($this->usuarios as $user)
                                <button wire:click="seleccionarUsuario({{ $user->id }})" 
                                        class="list-group-item list-group-item-action py-3 border-0 border-bottom">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-circle me-3 bg-soft-primary rounded-circle d-flex align-items-center justify-content-center text-primary fw-bold" style="width: 40px; height: 40px; background: #e7f1ff;">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0 text-truncate small fw-bold">{{ $user->names }} {{ $user->surnames }}</h6>
                                            <p class="mb-0 text-truncate text-muted" style="font-size: 0.75rem;">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </button>
                            @empty
                                <div class="p-4 text-center">
                                    <i class="fas fa-user-slash d-block text-muted mb-2 opacity-50"></i>
                                    <span class="text-muted small">No hay coincidencias</span>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
