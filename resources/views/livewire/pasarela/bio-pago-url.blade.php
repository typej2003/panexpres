<div>    
    <style>
        .iframePasarela {
            width: 100%;
            height: 90vh; /* Ocupa el 90% del alto de su contenedor */
            /* Alternativa: Forzar la altura de la ventana visible */
            /* height: 85vh; */ 
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
        // ** SOLO si $urlPayment es del MISMO dominio **
        document.addEventListener('DOMContentLoaded', function() {
            const iframe = document.getElementById('iframePayment');

            iframe.onload = function() {
                // Acceder al body del iframe para obtener la altura de su contenido
                const contentHeight = iframe.contentWindow.document.body.scrollHeight;
                
                // Asignar la altura del contenido al iframe
                iframe.style.height = contentHeight + 'px';
            };

            // Función para manejar mensajes recibidos del iframe
            window.addEventListener('message', function(event) {
                Livewire.emit('clearCartJs');
            });
        });
    </script>
</div>
