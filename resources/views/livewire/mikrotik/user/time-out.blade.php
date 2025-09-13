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
                    <h1 class="m-0 text-dark">Planes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="/configureRouter/{{$router->id}}">Configurar</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between mb-2">
                <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Nuevo Plan</button>
                <div></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($profilesUser as $key => $array) 
                                    <div class="col-md-3 col-4">
                                        <div class="card w-100 shadow">
                                            <div class="card-body">
                                                @foreach ($array as $clave => $element)                         
                                                    <strong><span class="fw-bold">{{ $clave }}:</span></strong>  {{ $element }} <br>
                                                @endforeach
                                            </div>
                                            <div class="card-footer d-flex justify-content-between">
                                                <!-- <button wire:click.prevent="addNewUserHotspot('{{ $array['name'] }}')" class="btn btn-primary"><i class="fa fa-users"></i> Nuevo ()</button>
                                                <button class="btn btn-success">Activos</button> -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
