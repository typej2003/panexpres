<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">


<div class="container-fluid">
    <div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="width: 100% !important;">
                            <div class="card-body text-center">
                                <h1>Mikrotik {{$datos}} </h1>

                                <input type="text" id="url" name="url" value="{{ $url }}">
                                

                                <h1>Operación procesada con éxito</h1>
                                <p>
                                    Su pago esta siendo validado por nuestro equipo de venta
                                </p>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button onclick="enviarDatoAlPadre()">Enviar Variable al Padre</button>
                                <script>
                                function enviarDatoAlPadre() {
                                    const miVariable = "¡Hola desde el iframe!";
                                    // Usa window.parent para referirte al padre y postMessage para enviar datos
                                    // El primer argumento es los datos y el segundo es el origen del padre
                                    window.parent.postMessage(miVariable, '*'); // Enviar a cualquier origen por simplicidad, pero se recomienda especificar el origen del padre para seguridad.
                                }
                            </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

    </div>
</div>

<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>

<!-- <script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.6.4.min.js"></script> -->
@stack('js')
@stack('before-livewire-scripts')
<livewire:scripts />
@stack('after-livewire-scripts')


@stack('alpine-plugins')
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@push('js')

@endpush

<SCRIPT LANGUAGE="JavaScript">
// history.forward()
</SCRIPT>