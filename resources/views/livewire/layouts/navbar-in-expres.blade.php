<div>
<style>
    /* Nuevo estilo para la lista de menú del lado derecho */
    .navbar-nav-right-spaced {
        display: flex; /* Habilita Flexbox */
        align-items: center; /* Centra verticalmente los elementos */
        gap: 25px; /* Espaciado de 25px entre cada elemento <li> */
        list-style-type: none; /* Opcional: remover los puntos de la lista */
        padding: 0; /* Asegura que no haya padding extra */
        margin: 0;  /* Asegura que no haya margen extra */
    }

    /* ================================================= */
    /* === APLICACIÓN DEL COLOR NARANJA (#fc5e27) === */
    /* ================================================= */

    /* 1. Perfil (Ícono y Texto) */
    .profile-dropdown .dropdown-trigger,
    .profile-dropdown .dropdown-trigger i,
    .profile-dropdown .profile-text {
        color: #fc5e27;
        font-size: 1.4rem; /* Mantener tamaño para ícono */
    }
    .profile-dropdown .dropdown-content a {
        color: #fc5e27; /* Enlaces dentro del desplegable */
    }

    /* 2. Carrito de Compras (Ícono y Contador) */
    .cart-dropdown .dropdown-trigger,
    .cart-dropdown .dropdown-trigger i {
        color: #fc5e27;
        font-size: 1.4rem;
    }
    /* Color para los textos dentro del resumen del carrito */
    .cart-dropdown .dropdown-content p,
    .cart-dropdown .dropdown-content a:not(.btn-checkout) {
        color: #fc5e27;
    }

    /* El botón de checkout lleva fondo, por lo que el texto debe ser blanco para contraste */
    .cart-dropdown .dropdown-content .btn-checkout {
        background-color: #fc5e27; /* Fondo del botón Naranja */
        color: #ffffff;             /* Texto Blanco */
        border-color: #fc5e27;      /* Borde Naranja */
    }

    /* 3. Selector de Moneda (Botón y Lista Desplegable) */
    .currency-dropdown .dropdown-button,
    .currency-dropdown .dropdown-button i {
        color: #fc5e27; /* Texto del botón y flecha Naranja */
        font-size: 1.4rem;
    }

    .currency-dropdown .dropdown-content a {
        color: #fc5e27; /* Enlaces dentro del desplegable Naranja */
        font-size: 0.8rem;
    }

    /* 4. Ícono de Menú (Toggle) */
    .navbar-nav .nav-link i {
        color: #fc5e27; /* Ícono de hamburguesa Naranja */
    }

    /* Estilo del contador de carrito (mantener el color de error rojo) */
    .cart-count {
        position: absolute;
        top: -5px;
        right: -10px;
        background-color: #ff0000; /* Rojo para el contador */
        color: white;
        font-size: 0.75rem;
        font-weight: bold;
        border-radius: 50%;
        padding: 2px 6px;
        line-height: 1;
        min-width: 10px;
        text-align: center;
    }

    /* --- ESTILOS DE LOS MENÚS DESPLEGABLES (Perfil y Carrito) --- */
    .action-dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none; /* Oculto por defecto */
        position: absolute;
        right: 0;
        top: 70%;
        background-color: #ffffff;
        min-width: 180px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1050;
        border-radius: 5px;
        padding: 10px 0;
        width: 180px;
    }

    /* CLASE VITAL para mostrar el desplegable con JS */
    .dropdown-content.show {
        display: block;
    }

    .dropdown-content a {
        padding: 10px 15px;
        text-decoration: none;
        display: block;
        font-size: 0.95rem;
    }

    .dropdown-content a:hover {
        background-color: #f4f4f4;
    }

    /* Carrito - Estilos Específicos */
    .cart-summary {
        padding: 15px;
        text-align: right;
    }

    .cart-summary p {
        margin: 5px 0;
        font-size: 0.9rem;
    }

    .cart-total {
        font-weight: bold;
        margin: 10px 0 15px 0 !important;
        padding-top: 5px;
        border-top: 1px solid #eee;
    }

    .currency-dropdown {
        margin-top: -5px;
        display: inline-block;
        z-index: 1100;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 80px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        border-radius: 5px;
    }

    .dropdown-content a {
        padding: 10px 14px;
        text-decoration: none;
        display: block;
        font-size: 0.9rem;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .desktop-currency-right .dropdown-content {
        right: 0;
    }

    /* 8.1. Escritorio y Tablet (min-width: 481px) */
    @media (min-width: 481px) {
            .currency-dropdown:hover .dropdown-content {
            display: block;
        }
    }

    /* 6. ESTILOS DEL BOTÓN DESPLEGABLE DE MONEDA (RECTANGULAR BLANCO) */
    .currency-dropdown {
        display: inline-block;
        z-index: 1100;
    }

    .dropdown-button {
        background-color: transparent; 
        color: #ffffff; 
        padding: 8px 12px;
        font-size: 0.95rem; 
        font-weight: bold;
        border: none;
        cursor: pointer;
        
        border-radius: 4px; 
        height: auto;
        width: auto; 
        line-height: normal; 
        text-align: left;
        margin-right: 5px; 
    }

    .dropdown-content { 
        display: none; 
        position: absolute;
        background-color: #f9f9f9;
        min-width: 80px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        border-radius: 5px;
    }

    .dropdown-content a {
        color: #333;
        padding: 10px 14px;
        text-decoration: none;
        display: block;
        font-size: 0.9rem;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .desktop-currency-right .dropdown-content {
        right: 0;
    }


</style>

<nav class="main-header navbar navbar-expand navbar-white">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto navbar-nav-right-spaced">
        <li class="nav-item">
            <div class="action-dropdown profile-dropdown">
                @auth

                    <a href="#" class="action-item profile dropdown-trigger">
                        <img src="{{ auth()->user()->avatar_url }}" id="profileImage" class="img-circle elevation-1" alt="User Image" style="height: 45px; width: 45px;">
                        <span class="profile-text">{{ auth()->user()->name }}</span>
                    </a>
                    @if(auth()->user()->role == 'admin')
                        <div class="dropdown-content profile-menu">
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}" x-ref="profileLink">Mi Cuenta</a>
                            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="profileLink">Perfil</a>
                            <a class="dropdown-item d-none" href="{{ route('admin.profile.edit') }}" x-ref="profileLink">Mis Listas de Deseos</a>
                            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="changePasswordLink">Cambiar Contraseña</a>
                            <a class="dropdown-item" href="{{ route('admin.settings') }}">Configuración</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesión</a>
                            </form>
                        </div>
                    @endif
                    @if(auth()->user()->role == 'cliente')
                        <div class="dropdown-content profile-menu">                            
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}" x-ref="profileLink">Mi Cuenta</a>
                            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="profileLink">Perfil</a>
                            <a class="dropdown-item d-none" href="{{ route('admin.profile.edit') }}" x-ref="profileLink">Mis Listas de Deseos</a>
                            <a class="dropdown-item" href="{{ route('listPedidosCliente') }}" x-ref="profileLink">Mis Pedidos</a>
                            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="changePasswordLink">Cambiar Contraseña</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesión</a>
                            </form>
                        </div>
                    @endif
                @else
                    <a href="#" class="action-item profile dropdown-trigger">
                        <i class="fas fa-user-circle avatar-icon"></i>
                        <span class="profile-text">Perfil</span>
                    </a>
                    <div class="dropdown-content profile-menu">
                        <a href="/login">Acceso</a>
                        <a href="/register">Registro</a>
                    </div>
                @endauth
            </div>

        </li>
        
        <li class="nav-item">
            <div class="action-dropdown cart-dropdown">
                @livewire('carrito.cart-drop-expres')
            </div>
        </li>
        
        <li class="nav-item">
            <div class="currency-dropdown desktop-currency-right" wire:ignore>
                @livewire('components.currency-expres')
            </div>
        </li>
        

    </ul>


</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Selectores unificados para todos los menús desplegables
        const actionDropdowns = document.querySelectorAll('.action-dropdown');
        const currencyDropdowns = document.querySelectorAll('.currency-dropdown');

        // ===============================================
        // 4. LÓGICA DE CIERRE CENTRALIZADA (Definida primero para usarla en los listeners)
        // ===============================================

        /**
         * Cierra todos los menús desplegables (Acción y Moneda) quitando la clase 'show'.
         * @param {HTMLElement} [excludeContent=null] - Contenido del menú a excluir del cierre.
         */
        function closeAllDropdowns(excludeContent = null) {
            // 1. Cierra los menús de Acción (Perfil/Carrito)
            document.querySelectorAll('.action-dropdown .dropdown-content').forEach(content => {
                if (content !== excludeContent) {
                    content.classList.remove('show');
                }
            });

            // 2. Cierra los menús de Moneda
            document.querySelectorAll('.currency-dropdown .dropdown-content').forEach(content => {
                if (content !== excludeContent) {
                    content.classList.remove('show');
                }
            });
        }

        // ===============================================
        // 2. FUNCIONALIDAD PARA DESPLEGABLES (MONEDA)
        // ===============================================

        currencyDropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('.dropdown-button');
            const content = dropdown.querySelector('.dropdown-content');

            button.addEventListener('click', function(event) {
                event.stopPropagation();

                closeAllDropdowns(content);

                // Usamos toggle para alternar la clase 'show'
                content.classList.toggle('show');
            });
        });

        // ===============================================
        // 3. MANEJO DE MENÚS DESPLEGABLES (PERFIL Y CARRITO)
        // ===============================================

        actionDropdowns.forEach(dropdown => {
            const trigger = dropdown.querySelector('.dropdown-trigger');
            const content = dropdown.querySelector('.dropdown-content');

            // Solo agrega el listener si se encuentra el trigger
            if (trigger) { 
                trigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();

                    closeAllDropdowns(content);

                    // Usamos toggle para alternar la clase 'show'
                    content.classList.toggle('show');
                });
            }
        });

        // Cerrar todos los menús al hacer clic en cualquier parte del documento
        document.addEventListener('click', function() {
            closeAllDropdowns();
        });

    });
</script>
</div>