<div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="text-center mb-5">
                    <img src="/img/logopanexpres_color.png" 
                        alt="Logo PanExpres" 
                        class="img-fluid" 
                        style="max-width: 250px;">
                    
                    <h2 class="mt-4 text-primary">Envio de Información</h2>
                    <p class="lead"></p>
                </div>

                <div class="card shadow">
                    <div class="card-body p-4 p-md-5">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 col-12 d-flex">
                                <p class="mx-auto">
                                    <h4>Gracias por su interés, Pronto nos comunicaremos con Usted.</h4>
                                </p>
                                <p class="mx-auto">
                                    <button class="btn btn-success">Volver</button>
                                </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
