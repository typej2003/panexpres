<link rel="stylesheet" href="/css/bootstrap.min.css">

!-- <script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.6.4.min.js"></script> -->
@stack('js')
@stack('before-livewire-scripts')
<livewire:scripts />
@stack('after-livewire-scripts')



<div class="container-fluid">
    <div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="width: 100% !important;">
                            <div class="card-body text-center">
                                <h4>PanExprés</h4>
                                <br>
                                <h2>Compra nro: {{$nropedido}}</h2>
                                <h2>Operación procesada con éxito</h2>
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
                                        // alert('durante'); // Punto de prueba 1: Se ejecuta al enviar
                                        
                                        const miObjeto = {
                                            'status': true,
                                            'message': 'Proceso Finalizado',
                                        };
                                        
                                        // Envío del mensaje. Usamos '*' solo para pruebas iniciales; 
                                        // si el padre está en panexpres.com, deberías usar 'https://panexpres.com'
                                        window.parent.postMessage(miObjeto, '*'); 
                                    }

                                    // Se elimina la función cuentaRegresiva completa.
                                    
                                    const timeoutId = setTimeout(() => {
                                        // alert('ante'); // Punto de prueba 2: Se ejecuta 5 segundos después de la carga
                                        enviarDatoAlPadre();
                                        clearTimeout(timeoutId);
                                    }, 3000)

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

<
@stack('alpine-plugins')
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@push('js')

@endpush

<SCRIPT LANGUAGE="JavaScript">
// history.forward()
</SCRIPT>