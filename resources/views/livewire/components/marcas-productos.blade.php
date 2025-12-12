<div>
    <link rel="stylesheet" href="{{ asset('css/luces.css') }}">
    
    <style>
        /* ----------------------------------------------------------- */
        /* Estilos Base y Layout (MANTENEMOS SOLO LOS ESTILOS DE LAYOUT) */
        /* ----------------------------------------------------------- */

        /* Puedes mover esta definición de colores a luces.css si solo los usas ahí */
        :root {
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

    <script src="{{ asset('js/luces.js') }}"></script>

</div>