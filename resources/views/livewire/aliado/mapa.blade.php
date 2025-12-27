<div>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa BarcoExpres - Test Local</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" />
    
    <style>
        body { margin: 0; padding: 20px; background-color: #f0f2f5; font-family: sans-serif; }
        .card { background: white; padding: 20px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        
        /* El contenedor DEBE tener altura fija */
        #map { 
            height: 500px; 
            width: 100%; 
            border-radius: 10px;
            background: #e0e0e0; /* Color gris de fondo */
        }
        .error-msg { color: red; font-weight: bold; margin-bottom: 10px; display: none; }
    </style>
</head>
<body>

    <div class="card">
        <h3>Prueba de Mapa - Caracas</h3>
        <div id="error" class="error-msg">⚠️ La librería no cargó. Revisa tu conexión.</div>
        <div id="map"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>

    <script>
    // --- CONFIGURACIÓN CONFIGURABLE ---
    // 10000 ms = 10 segundos. Cambia este valor según necesites.
    var intervaloRastreo = 10000; 
    // ----------------------------------

    var map;
    var markers = {};
    var rastreoTimer; // Variable para controlar el temporizador

    document.addEventListener("DOMContentLoaded", function() {
        // Inicializar Mapa
        map = L.map('map').setView([10.4806, -66.9036], 12);

        L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; OpenStreetMap &copy; CARTO'
        }).addTo(map);

        setTimeout(() => { map.invalidateSize(); }, 500);

        // Iniciar el rastreo inicial
        actualizarMapa();

        // Configurar la repetición usando nuestra variable
        iniciarTemporizador();
    });

    function iniciarTemporizador() {
        // Limpiamos cualquier intervalo previo por seguridad
        if (rastreoTimer) clearInterval(rastreoTimer);
        
        // Iniciamos el nuevo intervalo
        rastreoTimer = setInterval(actualizarMapa, intervaloRastreo);
        console.log("Rastreo configurado cada: " + (intervaloRastreo / 1000) + " segundos.");
    }

    function actualizarMapa() {
        fetch('/api/admin/repartidores-ultima-posicion')
            .then(res => res.json())
            .then(data => {
                data.forEach(rep => {
                    const popupContent = `
                        <div style="text-align: center; min-width: 120px;">
                            <b>${rep.name}</b><br>
                            Vel: ${rep.speed || 0} km/h<br>
                            <small>ID: ${rep.user_id}</small><br>
                            <button onclick="enviarAlerta(${rep.user_id}, '${rep.name}')" 
                                    class="btn btn-sm btn-warning mt-2" 
                                    style="font-size: 10px; cursor: pointer; padding: 2px 5px; border-radius: 4px; border: 1px solid #d39e00; background-color: #ffc107;">
                                Enviar Alerta
                            </button>
                        </div>
                    `;

                    if (markers[rep.user_id]) {
                        // Actualizar posición suavemente
                        markers[rep.user_id].setLatLng([rep.lat, rep.lng]);
                        markers[rep.user_id].getPopup().setContent(popupContent);
                    } else {
                        // Crear nuevo marcador
                        markers[rep.user_id] = L.marker([rep.lat, rep.lng])
                            .addTo(map)
                            .bindPopup(popupContent);
                    }
                });
            })
            .catch(err => console.error("Error al obtener posiciones:", err));
    }

    // Función de alerta (se mantiene igual)
    function enviarAlerta(userId, userName) {
        const msg = prompt(`Mensaje para ${userName}:`);
        if (msg) {
            fetch(`/api/admin/enviar-alerta/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ mensaje: msg })
            }).then(res => {
                if(res.ok) alert("Alerta enviada a " + userName);
            });
        }
    }
</script>
</body>
</html>
</div>