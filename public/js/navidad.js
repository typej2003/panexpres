document.addEventListener('DOMContentLoaded', () => {
    
    const snowContainer = document.getElementById('snowContainer');
    const santaSleigh = document.getElementById('santaSleigh');
    
    // --- Nieve: Generador de copos ---
    function createSnowflake() {
        // Solo genera nieve si el ancho es > 480px (Escritorio/Tablet)
        if (window.innerWidth <= 480) return; 

        const snowflake = document.createElement('div');
        snowflake.classList.add('snowflake');
        snowflake.innerHTML = '&#10052;'; // Símbolo de copo de nieve
        
        // Posición y tamaño aleatorios
        snowflake.style.left = `${Math.random() * 100}vw`;
        snowflake.style.fontSize = `${Math.random() * 1 + 0.8}em`;
        
        // Velocidad y duración aleatorias (5s a 15s)
        const duration = Math.random() * 10 + 5; 
        snowflake.style.animationDuration = `${duration}s`;
        
        // Delay negativo para que la nieve ya esté cayendo al cargar
        snowflake.style.animationDelay = `-${Math.random() * 5}s`;

        snowContainer.appendChild(snowflake);

        // Limpieza: Eliminar el copo después de caer
        setTimeout(() => {
            snowflake.remove();
        }, (duration + 1) * 1000);
    }

    // Generar un nuevo copo de nieve cada 200 milisegundos
    setInterval(createSnowflake, 200); 


    // --- Trineo: Control de vuelo ---
    function activateSantaSleigh() {
        // Solo activar en Escritorio/Tablet
        if (window.innerWidth <= 480) return; 
        
        // 1. Reiniciar la animación 
        santaSleigh.style.animation = 'none';
        santaSleigh.offsetHeight; // Truco para forzar el reinicio
        
        // 2. Posición vertical aleatoria (entre 50px y 200px del top)
        const randomTop = Math.floor(Math.random() * 150) + 50; 
        santaSleigh.style.top = `${randomTop}px`;
        
        // 3. Aplica la animación
        santaSleigh.style.animation = 'fly-across 20s linear forwards';
    }

    // Programa el siguiente vuelo de Santa cada 30-60 segundos
    function scheduleNextSantaFlight() {
        // Intervalo aleatorio (30,000ms a 60,000ms)
        const randomInterval = Math.random() * 30000 + 30000; 
        
        setTimeout(() => {
            activateSantaSleigh();
            scheduleNextSantaFlight(); 
        }, randomInterval);
    }

    // Iniciar el ciclo de vuelo
    scheduleNextSantaFlight();
});