<div>    
    <style>
        /* ... Estilos CSS ... */
        .iframePasarela {
            width: 100%;
            height: 90vh; 
            border: 0;
            flex: 1 1 auto;
            overflow: hidden;
            z-index: 0;
        }
        .biopago-url {
            height: auto !important;
            z-index: 0;
        }
    </style>
    <h4></h4>

    <div class="container biopago-url">
        <br>
        <iframe src="{{$urlPayment}}" id="iframePasarela" class="iframePasarela" frameborder="0"></iframe>
    </div>
    
    @stack('before-livewire-scripts')
    <livewire:scripts />     
    @stack('after-livewire-scripts')

    <script>
        let paymentStatusReceived = false;

        document.addEventListener('DOMContentLoaded', function() {
            
            // 🔑 CORRECCIÓN 1: Usar la ID correcta ('iframePasarela')
            const iframe = document.getElementById('iframePasarela');
            
            // Se elimina el bloque iframe.onload porque probablemente no funcionará 
            // y no es necesario para postMessage.
            
            // Función para manejar mensajes recibidos del iframe
            window.addEventListener('message', function(event) {
                // ... (Validación de origen) ...
                
                if (event.data && event.data.status === true) {
                    console.log('Mensaje de pago recibido.');
                    paymentStatusReceived = true; // Establecer bandera

                    let nropedido = event.data.nropedido

                    // window.location.href = '/redireccionar/comprarealizada';
                    window.location.href = '/redireccionar/comprarealizada?nropedido=' + nropedido;
                    
                    // Intentar emitir inmediatamente, y si falla, el hook lo intentará después
                    if (typeof Livewire !== 'undefined') {
                        Livewire.emit('clearCartJs');
                    }
                }
            });

            // 3. 🔑 Hook de Livewire: Garantiza que la emisión se ejecute *después* de la carga de Livewire
            window.addEventListener('livewire:load', function() {
                console.log('Evento livewire:load disparado. Livewire listo.');
                
                // Si ya recibimos los datos de pago ANTES de que Livewire cargara:
                if (paymentDataForLivewire !== null) {
                    console.log('Emitiendo evento pendiente a Livewire.');
                    Livewire.emit('clearCartJs', paymentDataForLivewire.orderId, paymentDataForLivewire.status);
                    paymentDataForLivewire = null; // Limpiar la bandera para evitar repeticiones
                }
            });

        });
    </script>
</div>