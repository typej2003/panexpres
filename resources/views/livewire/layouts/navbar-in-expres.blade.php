<div>

<style>    
    .navbar-nav {
        /* 1. Habilitar Flexbox */
        display: flex; 

        /* 2. ¡CLAVE! Centra el grupo completo de elementos dentro del UL */
        justify-content: center;

        /* 3. Asegura que los elementos estén centrados verticalmente */
        align-items: center;

        /* 4. Espacio horizontal entre cada elemento LI */
        gap: 25px; /* Ajusta este valor (e.g., 20px, 30px) para el espacio deseado */
    }

    /* --- Color General para el Contenido del Navbar --- */

    /* 1. Perfil (Ícono y Texto) */
    .profile-dropdown .dropdown-trigger,
    .profile-dropdown .dropdown-trigger i,
    .profile-dropdown .dropdown-content a {
        color: #fc5e27;
        font-size: 1.4rem;
    }

    /* 2. Carrito de Compras (Ícono y Contador) */
    .cart-dropdown .dropdown-trigger,
    .cart-dropdown .dropdown-trigger i,
    .cart-dropdown {
        color: #fc5e27;
        font-size: 1.4rem;
        /* Si el contador de carrito es un fondo, usa background-color */
        /* background-color: #fc5e27; */
    }

    /* Color para los textos dentro del resumen del carrito */
    .cart-dropdown .dropdown-content p,
    .cart-dropdown .dropdown-content a {
        color: #fc5e27;
    }

    /* El botón de checkout suele llevar fondo, no solo texto. */
    .cart-dropdown .dropdown-content .btn-checkout {
        background-color: #fc5e27; /* Fondo del botón */
        color: #ffffff;             /* Texto blanco para contraste */
        border-color: #fc5e27;      /* Borde del botón */
    }

    /* 3. Selector de Moneda (Botón y Lista Desplegable) */
    .currency-dropdown .dropdown-button,
    .currency-dropdown .dropdown-button i {
        color: #fc5e27; /* Texto del botón y flecha */
        font-size: 1.4rem;
    }

    .currency-dropdown .dropdown-content a {
        color: #fc5e27; /* Enlaces dentro del desplegable */
        font-size: 0.8rem;
    }
    
    .cart-count {
        position: absolute;
        top: -5px;
        right: -10px;
        background-color: #ff0000;
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
        color: #333;
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
        color: #555;
        font-size: 0.9rem;
    }

    .cart-total {
        font-weight: bold;
        color: #000;
        margin: 10px 0 15px 0 !important;
        padding-top: 5px;
        border-top: 1px solid #eee;
    }

    /* 6. ESTILOS DEL BOTÓN DESPLEGABLE DE MONEDA (RECTANGULAR BLANCO) */
    .currency-dropdown {
        /* position: absolute;
        right: 20px; 
        top: 50%;  */
        margin-top: -5px;
        /* transform: translateY(-50%);  */
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

    /* 8.1. Escritorio y Tablet (min-width: 481px) */
    @media (min-width: 481px) {
        .currency-dropdown:hover .dropdown-content {
        display: block;
    }


/* 8.2. Tablet y Móvil (max-width: 768px) */
@media (max-width: 768px) {

    .mobile-currency-top .dropdown-button {
        color: #fc5e27;
    }
}

/* 8.3. Teléfono Móvil (max-width: 480px) */
@media (max-width: 480px) {
    
    /* Asegura que el color del enlace en la divisa móvil sea oscuro si el botón es oscuro */
    .mobile-currency-top a {
        color: #333333; /* Color oscuro para los enlaces del desplegable de moneda */
    }

}

</style>
<!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top "> -->
<nav class="main-header navbar navbar-expand navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">    
            <div class="action-dropdown profile-dropdown">
                <a href="#" class="action-item profile dropdown-trigger">
                    <i class="fas fa-user-circle avatar-icon"></i>
                    <span class="profile-text">Perfil</span>
                </a>
                <div class="dropdown-content profile-menu">
                    <a href="#">Acceso</a>
                    <a href="#">Registro</a>
                </div>
            </div>
        </li>
    
        <li class="nav-item">
            <div class="action-dropdown cart-dropdown">
                <a href="#" class="action-item cart dropdown-trigger elem-color">
                    <i class="fas fa-shopping-cart cart-icon"></i>
                    <span class="cart-count">4</span>
                </a>
                <div class="dropdown-content cart-summary">
                    <p class="cart-item">4 x Pan de Jamón Clásico</p>
                    <p class="cart-total">Total: $40.00 USD</p>
                    <a href="#" class="btn-checkout">Ver Carrito</a>
                </div>
            </div>
        </li>

        <li class="nav-item"> 
            <div class="currency-dropdown desktop-currency-right">
                <button class="dropdown-button elem-color">
                    $ USD <i class="fas fa-angle-down elem-color"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">USD</a>
                    <a href="#">EUR</a>
                    <a href="#">MXN</a>
                </div>            
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

            trigger.addEventListener('click', function(event) {
                event.preventDefault(); 
                event.stopPropagation(); 
                
                closeAllDropdowns(content);
                
                // Usamos toggle para alternar la clase 'show'
                content.classList.toggle('show');
            });
        });

        // Cerrar todos los menús al hacer clic en cualquier parte del documento
        document.addEventListener('click', function() {
            closeAllDropdowns();
        });
        
    });
</script>
</div>