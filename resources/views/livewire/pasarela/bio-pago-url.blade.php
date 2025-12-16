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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // 🔑 CORRECCIÓN 1: Usar la ID correcta ('iframePasarela')
            const iframe = document.getElementById('iframePasarela');
            
            // Se elimina el bloque iframe.onload porque probablemente no funcionará 
            // y no es necesario para postMessage.
            
            // Función para manejar mensajes recibidos del iframe
            window.addEventListener('message', function(event) {
                
                // 🔑 PASO CLAVE: Validar el origen. Como el servidor es Laravel, 
                // asumimos que el protocolo es 'https://'.
                const ALLOWED_ORIGIN = 'https://panexpres.com'; 
                
                // Si la URL de pago es de otro dominio, DEBES usar ese otro dominio aquí.
                // Ejemplo: if (event.origin !== 'https://otrodominiopago.com') return;
                
                // Opcional: Si los dominios son diferentes, verifica el origen del iframe.
                // if (event.origin !== ALLOWED_ORIGIN && event.origin !== window.location.origin) {
                //     console.warn("Mensaje ignorado: Origen no permitido:", event.origin);
                //     return; 
                // }


                // El mensaje llegó si esta alerta se dispara
                alert('¡Mensaje RECIBIDO en el Padre!'); 
                
                const miObjeto = event.data; // Los datos enviados por el iframe

                if (miObjeto && miObjeto.status === true) {
                    console.log('Pago finalizado exitosamente. Redireccionando...');
                    // Livewire.emit('clearCartJs');
                    
                    // Ejemplo de lo que harías con el dato
                    // window.location.href = '/procesadoC'; 
                }
            });

        });
    </script>
</div>