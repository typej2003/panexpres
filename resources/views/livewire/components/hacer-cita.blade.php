<div>
    <style>
        .logo-form {
                width: 24rem !important;
            }
    </style>
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="text-center mb-5">
                    <img src="/img/logopanexpres_color.png" 
                        alt="Logo PanExpres" 
                        class="img-fluid logo-form">
                    
                    <h2 class="mt-4 text-primary">Agendamiento de Cita</h2>
                    <p class="lead">Por favor, completa tus datos para coordinar una reunión.</p>
                </div>

                <div class="card shadow">
                    <div class="card-body p-4 p-md-5">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle me-2"></i>
                                    <div>
                                        {{ session('success') }}
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger shadow-sm">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="store">
                            @csrf                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre" wire:model.defer="nombre" >
                                @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" wire:model.defer="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono de Contacto</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="(Ej: 584121234567)" required  wire:model.defer="telefono">
                                @error('telefono') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="negocio" class="form-label">Tipo de Aliado/Negocio</label>
                                <select class="form-select" id="negocio" name="tipo_negocio" required  wire:model.defer="tipo_negocio">
                                    <option value="" disabled selected>Selecciona una opción</option>
                                    <option value="Fabricante">Fabricante/Marca</option>
                                    <option value="aliado">Vendedor</option>
                                    <option value="promotor">Promotor</option>
                                    <option value="delivery">Delivery</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label for="fecha" class="form-label">Fecha y Hora Preferida (Opcional)</label>
                                <input type="datetime-local" class="form-control" id="fecha" name="fecha_preferida"  wire:model.defer="fecha_preferida">
                                @error('fecha') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <span wire:loading.remove>Enviar Solicitud de Cita</span>
                                    <span wire:loading>Enviando...</span>
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
