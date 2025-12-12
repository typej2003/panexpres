document.addEventListener('DOMContentLoaded', () => {
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const mobileMenu = document.getElementById('mobileMenu');
    // NUEVO: Ícono de hamburguesa en la barra de escritorio
    const hamburgerDesktopIcon = document.getElementById('hamburgerDesktopIcon'); 
    
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
    
    // Función centralizada para abrir/cerrar el menú móvil
    const toggleMobileMenu = (event) => {
        if (event) {
            event.preventDefault();
        }
        closeAllDropdowns(); 
        mobileMenu.classList.toggle('open');
    };


    // ===============================================
    // 1. FUNCIONALIDAD DEL MENÚ HAMBURGUESA
    // ===============================================
    
    // Icono de móvil (navbar superior)
    hamburgerIcon.addEventListener('click', toggleMobileMenu);

    // NUEVO: Icono de escritorio (main-menu-desktop)
    if (hamburgerDesktopIcon) {
        hamburgerDesktopIcon.addEventListener('click', toggleMobileMenu);
    }

    // Cierra el menú hamburguesa si se hace clic fuera de él
    document.addEventListener('click', (event) => {
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnIcon = hamburgerIcon.contains(event.target);
        // NUEVO: Verifica también el ícono de escritorio
        const isClickOnDesktopIcon = hamburgerDesktopIcon ? hamburgerDesktopIcon.contains(event.target) : false;

        if (!isClickInsideMenu && !isClickOnIcon && !isClickOnDesktopIcon && mobileMenu.classList.contains('open')) {
            mobileMenu.classList.remove('open');
        }
    });

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