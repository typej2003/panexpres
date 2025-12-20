<div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="text-center mb-5">
                    <img src="/img/logopanexpres_color.png" 
                        alt="Logo PanExpres" 
                        class="img-fluid" 
                        style="max-width: 250px;">
                    
                    <h2 class="mt-4 text-primary">Agendamiento de Cita</h2>
                    <p class="lead">Por favor, completa tus datos para coordinar una reunión.</p>
                </div>

                <div class="card shadow">
                    <div class="card-body p-4 p-md-5">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="/cita-guardar" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono de Contacto</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="(Ej: 584121234567)" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="negocio" class="form-label">Tipo de Aliado/Negocio</label>
                                <select class="form-select" id="negocio" name="tipo_negocio" required>
                                    <option value="" disabled selected>Selecciona una opción</option>
                                    <option value="Fabricante">Fabricante/Marca</option>
                                    <option value="aliado">Vendedor</option>
                                    <option value="promotor">Promotor</option>
                                    <option value="delivery">Delivery</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label for="fecha" class="form-label">Fecha y Hora Preferida (Opcional)</label>
                                <input type="datetime-local" class="form-control" id="fecha" name="fecha_preferida">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Enviar Solicitud de Cita</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
