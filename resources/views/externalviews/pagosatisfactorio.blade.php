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
                                <h1>PanExpres.com</h1>
                                <br>
                                <h4>Compra nro: {{$nropedido}}</h4>
                                <h4>Operación procesada con éxito</h4>
                                <p>
                                    Su pago esta siendo validado por nuestro equipo de venta.
                                </p>
                                <h3>¿Qué desea hacer ahora?</h3>
                                <p>
                                    <a target="_parent" class="h5 text-titulo" href="/">Seguir comprando</a>
                                </p>
                                <p >
                                    <a target="_parent" class="h5 text-titulo" href="/listPedidosCliente">Ir a Mis Pedidos</a>
                                </p>
                                <p>
                                    Ponte en contacto con nuestro equipo
                                    <a href="https://api.whatsapp.com/send?phone=+58{{$comercio->contactcellphone}}&text={{ $comercio->msgcontact}}" target="_blank">{{$comercio->contactcellphone}}</a> 
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button class="d-none" onclick="enviarDatoAlPadre()">Enviar Variable al Padre</button>
                                <script>
                                    function enviarDatoAlPadre() {
                                        alert('durante')
                                        const miObjeto = {
                                            'status': true,
                                            'message': 'Proceso Finalizado',
                                        };
                                        // Usa window.parent para referirte al padre y postMessage para enviar datos
                                        // El primer argumento es los datos y el segundo es el origen del padre
                                        window.parent.postMessage(miObjeto, '*'); // Enviar a cualquier origen por simplicidad, pero se recomienda especificar el origen del padre para seguridad.
                                    }
                                    var contador = 5
                                    function cuentaRegresiva(contador){                                    
                                        const idIntervalo = setInterval(() => {
                                            console.log(contador); // Muestra el valor actual del contador
                                            document.getElementById('contador').textContent = contador

                                            if (contador === 0) {
                                                clearInterval(idIntervalo); // Detiene el intervalo cuando llega a 0
                                                console.log("¡Cuenta regresiva terminada!");
                                            } else {
                                                contador--; // Disminuye el contador en 1
                                            }
                                        }, 1000); // 1000 milisegundos = 1 segundo                                
                                    }

                                    const timeoutId = setTimeout(() => {
                                        alert('ante')
                                        enviarDatoAlPadre()
                                        clearTimeout(timeoutId)
                                    }, 5000)

                                    
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <!-- Modal -->

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