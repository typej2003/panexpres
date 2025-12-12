// luces.js

document.addEventListener('DOMContentLoaded', () => {
    // Referencias a los botones y colores definidos en CSS
    const BUTTONS = document.querySelectorAll('.marcas-productos-flex button');
    const LIGHT_DURATION_MS = 2000; // 2 segundos de encendido por grupo
    
    // Mapeo de valores de data-luz a las variables CSS (deben ser accesibles desde JS)
    // Nota: Usamos getComputedStyle para obtener los valores exactos definidos en CSS.
    const style = getComputedStyle(document.documentElement);

    const LIGHT_COLORS = {
        '1': style.getPropertyValue('--color-rojo').trim() || '#e74c3c',
        '2': style.getPropertyValue('--color-verde').trim() || '#2ecc71',
        '3': style.getPropertyValue('--color-azul').trim() || '#3498db'
    };


    /**
     * Enciende un grupo de botones basado en su valor data-luz.
     */
    function turnOnGroup(lightValue) {
        const color = LIGHT_COLORS[lightValue];
        BUTTONS.forEach(button => {
            if (button.getAttribute('data-luz') === lightValue) {
                // Establece el color de la sombra en la variable CSS local
                button.style.setProperty('--glow-color', color);
                button.classList.add('is-lit');
            }
        });
    }

    /**
     * Apaga un grupo de botones.
     */
    function turnOffGroup(lightValue) {
        BUTTONS.forEach(button => {
            if (button.getAttribute('data-luz') === lightValue) {
                button.classList.remove('is-lit');
                button.style.removeProperty('--glow-color');
            }
        });
    }

    /**
     * Inicia el ciclo secuencial de luces (Rojo -> Verde -> Azul -> Repetir).
     */
    function startLightCycle() {
        let currentLight = 1;
        const totalLights = 3;
        
        // La función cycle se autollama con setTimeout
        function cycle() {
            const nextLight = (currentLight % totalLights) + 1; 
            const prevLight = (currentLight === 1) ? totalLights : currentLight - 1; 

            // 1. Apagar el grupo anterior
            turnOffGroup(String(prevLight));

            // 2. Encender el grupo actual
            turnOnGroup(String(currentLight));

            // 3. Preparar para la siguiente fase
            currentLight = nextLight;

            // Repetir el ciclo
            setTimeout(cycle, LIGHT_DURATION_MS);
        }

        // Iniciar el ciclo
        // Usamos un pequeño delay inicial para que el apagado no se ejecute en el primer ciclo
        setTimeout(cycle, 100); 
    }

    // Asegurar que el ciclo comience solo si hay botones
    if (BUTTONS.length > 0) {
        startLightCycle();
    }
});