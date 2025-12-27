<div>
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-5 text-primary fw-bold">Nuestros Aliados Comerciales</h2>
        <p class="lead text-muted mx-auto" style="max-width: 800px;">
            En <strong>PanExpres</strong>, creemos en el crecimiento conjunto. Te presentamos a las 
            panaderías y establecimientos que forman parte de nuestra familia, comprometidos con 
            la frescura y el servicio excepcional.
        </p>
    </div>

    <div class="row g-4">
        @forelse($aliados as $aliado)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 hover-lift transition">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3 d-flex justify-content-center">
                            @if($aliado->avatar_url)                                
                                <img src="{{ $aliado->avatar_url }}" 
                                     alt="Logo {{ $aliado->name }}" 
                                     class="rounded-circle border p-1 shadow-sm object-fit-cover"
                                     style="width: 100px; height: 100px;">
                            @else
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center border" 
                                     style="width: 100px; height: 100px;">
                                    <span class="fs-2 fw-bold text-primary">{{ strtoupper(substr($aliado->name, 0, 1)) }}</span>
                                </div>
                            @endif
                        </div>

                        <h5 class="fw-bold mb-1">{{ $aliado->name }}</h5>
                        <p class="text-muted small mb-3">
                            <i class="fas fa-map-marker-alt me-1 text-danger"></i> {{ $aliado->address }}
                        </p>

                        <div class="pt-3 border-top d-none">
                            <a href="https://wa.me/{{ preg_replace('/\D/', '', $aliado->contactcellphone) }}" 
                               target="_blank" 
                               class="btn btn-outline-success w-100 rounded-pill">
                                <i class="fab fa-whatsapp me-2"></i> {{ $aliado->contactcellphone }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <div class="p-5 bg-light rounded-3">
                    <h3 class="text-muted">Próximamente nuevos aliados</h3>
                    <p>Estamos procesando nuevas solicitudes para nuestra red.</p>
                </div>
            </div>
        @endforelse
    </div>

    <div class="mt-5 d-flex justify-content-center">
        {{ $aliados->links() }}
    </div>
</div>

<style>
    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 2rem rgba(0,0,0,.08) !important;
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
    .object-fit-cover {
        object-fit: cover;
    }
    .card {
        width: 250px !important;
    }
</style>
</div>