<div>    
    <style>
        /* ... Estilos CSS ... */
        .iframePasarela {
            width: 100%;
            height: 90vh; 
            border: 0;
            flex: 1 1 auto;
            overflow: hidden;
        }
        .biopago-url {
            height: 70vh!important;
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
                    
                    // Intentar emitir inmediatamente, y si falla, el hook lo intentará después
                    if (typeof Livewire !== 'undefined') {
                        Livewire.emit('clearCartJs');
                    }
                }
            });

            // 2. Usar el hook para emitir el evento si el mensaje llegó antes de que Livewire cargara.
            // Esto asegura que la función se llama *después* de que Livewire está lista.
            if (typeof Livewire !== 'undefined') {
                Livewire.hook('element.init', () => {
                    if (paymentStatusReceived === true) {
                        console.log('Livewire listo. Emitiendo el evento pendiente.');
                        Livewire.emit('clearCartJs');
                        paymentStatusReceived = false; // Resetear
                    }
                });
            }

        });
    </script>
</div>