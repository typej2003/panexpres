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
                                    <a target="_parent" class="h5 text-titulo" href="/enviarLogin">Ir a login</a>
                                </p>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button class="btn btn-success" id="conectarse">Conectarse</button>
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
                let url = document.getElementById('url').value
                alert(url);
                localStorage.setItem('username', '04165800403')
                localStorage.setItem('password', '52479051')
                window.parent.location.href= 'http://typej.ddns.net/login';
            })

            window.onload=function() {
                
                //window.parent.location.href= "/procesadoC";
                function miFuncion() {
                    console.log("¡5 segundos han pasado!"); // Tu código aquí
                    //window.parent.location.href= "https://panexpres.com";
                }

                setTimeout(miFuncion, 5000); // Ejecuta miFuncion después de 5000 milisegundos
                
            }

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