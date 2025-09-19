<div>
    <style>
        .secundary-card {
            background-color: grey !important;
            width: 200px !important;
            height: 200px !important;
            color: white !important;
        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Router: {{ $router->identity }}</h1>
                    <h4 class="m-0 text-dark">Ip: {{ $router->ip }}</h4>
                    <h4 class="m-0 text-dark">Dirección Mac: {{ $router->macAddress }}</h4>
                    <h4 class="m-0 text-dark">Localización: {{ $router->location }}</h4>
                    <h1 class="m-0 text-dark">Tiempo de sesión</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="/configureRouter/{{$router->id}}">Configurar</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row my-3">
                <div class="col-md-12 col-12">
                    Dominio: {{ $dominio }} Ip del dominio: {{ $ip_del_dominio }}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        <h1>Integración del Router: {{ $identity}}</h1>
                        <button wire:click.prevent="procesar()" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Obtener</button>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h1>Hola</h1>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                       
                        </div>
                    </div>
                </div>
            </div>vv
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
