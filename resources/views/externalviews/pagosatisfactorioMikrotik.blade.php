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
                                <p>
                                    <div class="h2" id="contador">5</div>
                                </p>
                                <p>
                                    <a target="_parent" class="h5 text-titulo" href="/enviarValores">Enviar Data</a>
                                </p>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <a target="_parent" class="btn btn-success h5 text-titulo" href="/enviarValores">Enviar Data</a>
                                <!-- <button class="btn btn-success" id="conectarseGet">No Conectarse con Get</button>
                                <button class="btn btn-danger mx-1" id="conectarse">No Conectarse con localStorage</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <!-- Modal -->
        
        <script>
            let boton = document.getElementById('conectarse')
            boton.addEventListener('click', function(){
                localStorage.setItem('username', '04165800403')
                localStorage.setItem('password', '52479051')
                window.parent.location.href= 'http://typej.ddns.net/login';
            })

            let conectarseGet = document.getElementById('conectarseGet')
            conectarseGet.addEventListener('click', function(){
                window.parent.location.href= 'http://typej.ddns.net/login?username=04165800403&password=52479051';
            })

            let contador = 5; // Valor inicial del contador

            const intervalo = setInterval(() => {
            console.log(contador); // Muestra el valor actual del contador
            document.getElementById('contador').innerHTML = contador;

            if (contador === 0) {
                clearInterval(intervalo); // Detiene el intervalo cuando el contador llega a 0
                console.log("¡Contador finalizado!");
                //window.parent.location.href= "https://panexpres.com";
                window.top.location.href = 'https://panexpres.com';
            } else {
                contador--; // Decrementa el contador en 1
            }
            }, 1000); // Ejecuta la función cada 1000 milisegundos (1 segundo)

        </script>

        <h2>Contenido del Iframe</h2>
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