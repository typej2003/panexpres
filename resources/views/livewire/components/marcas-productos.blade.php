<div>
    <style>
        /* ----------------------------------------------------------- */
        /* Estilos Base y Layout */
        /* ----------------------------------------------------------- */
        :root {
            /* Definición de colores de luz */
            --color-rojo: #e74c3c; 
            --color-verde: #2ecc71; 
            --color-azul: #3498db; 
        }

        .marcas-productos-container {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1; 
            background-color: #fff; 
            border: 1px solid #ddd; 
        }
        
        .marcas-productos-flex {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 10px; 
            position: relative;
            z-index: 2; 
        }

        .marcas-productos-flex form {
            margin: 0 5px; 
        }

        .marcas-productos-flex button {
            background: none;
            padding: 0;
            cursor: pointer;
            border: none !important;
            transition: transform 0.2s, box-shadow 0.3s ease-out;
            position: relative; 
            border-radius: 50%; 
            
            /* ⭐ MEJORA: Sombra muy tenue y color base para iluminar el botón ⭐ */
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1), 0 0 0px transparent; /* Sombra base sutil */
        }

        .marcas-productos-flex button:hover {
            transform: scale(1.05);
        }

        .marcas-productos-flex img {
            width: 100%;
            max-width: 80px; 
            height: auto;
            display: block;
            border-radius: 50%; 
        }

        /* ----------------------------------------------------------- */
        /* ASIGNACIÓN DE COLOR BASE Y EFECTO DE LUZ */
        /* ----------------------------------------------------------- */

        /* 1. Asignación de Color Base usando data-luz (El borde lo ilumina con el color) */
        [data-luz="1"] {
            /* Rojo */
            border: 3px solid var(--color-rojo); /* Borde un poco más grueso */
        }
        [data-luz="2"] { 
            /* Verde */
            border: 3px solid var(--color-verde); 
        }
        [data-luz="3"] { 
            /* Azul */
            border: 3px solid var(--color-azul); 
        }

        /* 2. Clase para ENCENDER la luz (Aplicada por JavaScript) */
        [data-luz].is-lit {
            /* Usa el color definido en JS para el glow */
            box-shadow: 
                0 0 5px var(--glow-color), /* Sombra sutil de latencia */
                0 0 15px var(--glow-color), 
                0 0 30px var(--glow-color); 
        }

    </style>

    <div class="marcas-productos-container">
        <div class="marcas-productos-flex">
            @foreach($manufacturers as $manufacturer )
                <?php
                    // Cálculo de la propiedad data-luz (1, 2, 3, 1, 2, 3...)
                    $luzValue = ($loop->index % 3) + 1;
                ?>
                <form action="/searchM" method="get">
                    @csrf
                    <button type="submit" data-luz="{{ $luzValue }}">
                        <img src="{{ $manufacturer->avatar_url }}" alt="Logo {{ $manufacturer->name }}">
                    </button>
                    <input type="hidden" name="words" value="{{ $manufacturer->name }}">
                </form>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const BUTTONS = document.querySelectorAll('.marcas-productos-flex button');
            const LIGHT_DURATION_MS = 2000; // 2 segundos de encendido por grupo
            
            // Mapeo de valores de data-luz a colores CSS
            const LIGHT_COLORS = {
                '1': 'var(--color-rojo)',
                '2': 'var(--color-verde)',
                '3': 'var(--color-azul)'
            };

            /**
             * Enciende un grupo de botones basado en su valor data-luz.
             */
            function turnOnGroup(lightValue) {
                const color = LIGHT_COLORS[lightValue];
                BUTTONS.forEach(button => {
                    if (button.getAttribute('data-luz') === lightValue) {
                        // Asigna el color dinámicamente
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
                
                function cycle() {
                    const nextLight = (currentLight % totalLights) + 1; // 1 -> 2 -> 3 -> 1...
                    const prevLight = (currentLight === 1) ? totalLights : currentLight - 1; 

                    // 1. Apagar el grupo anterior
                    turnOffGroup(String(prevLight));

                    // 2. Encender el grupo actual
                    turnOnGroup(String(currentLight));

                    // 3. Preparar para la siguiente fase
                    currentLight = nextLight;

                    // El ciclo se repite cada LIGHT_DURATION_MS (2000ms)
                    setTimeout(cycle, LIGHT_DURATION_MS);
                }

                // Iniciar el ciclo con el primer grupo de luces
                cycle();
            }

            // Asegurar que el ciclo comience solo si hay botones
            if (BUTTONS.length > 0) {
                startLightCycle();
            }
        });
    </script>
</div>