<div>
    <nav class="mobile-menu-vertical" id="mobileMenu">
        
        <div class="currency-dropdown mobile-currency-top">
            @livewire('components.currency-expres')
        </div>
        
        <div class="mobile-menu-section">
            <h4 class="menu-title main-title">CATEGORÍAS</h4>
            <hr class="menu-divider">
            <form action="{{ route('search') }}" method="get" id="Pan de Jamón">
                @csrf
                <input type="hidden" name="words" value="Pan de Jamón">
                <a class="menu-item sub-title" onclick="sendForm('Pan de Jamón')" style="cursor:pointer;">PAN DE JAMÓN</a>
            </form>
            <form action="{{ route('search') }}" method="get" id="Ofertas">
                @csrf
                <input type="hidden" name="words" value="Ofertas">
                <a class="menu-item sub-title" onclick="sendForm('Ofertas')" style="cursor:pointer;">OFERTAS</a>
            </form>
            
            <form action="{{ route('aliados') }}" method="get" id="aliados">
                {{-- @csrf se elimina aquí ya que no es necesario para GET --}}
                
                <input type="hidden" name="contactcellphone" value="04141869016">
                <input type="hidden" name="in_cellphonecontact" value="1">
                
                {{-- Dejar solo una instancia de cada campo --}}
                <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                <input type="hidden" name="in_marcasproductos" value="1">
                <input type="hidden" name="words" value="">
                
                {{-- El valor 'msgcontact' que tenías fuera de un campo de input no es enviado --}}
                
                <a class="menu-item" onclick="sendFormLink('aliados')" style="cursor:pointer;">ALIADOS</a>
            </form>
        </div>

        <div class="mobile-menu-section">
            <h4 class="menu-title">SOBRE NOSOTROS</h4>
            <hr class="menu-divider">
            <form action="{{ route('nosotros') }}" method="get" id="nosotros">
                <input type="hidden" name="contactcellphone" value="04141869016">
                <input type="hidden" name="in_cellphonecontact" value="1">
                <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                <input type="hidden" name="in_marcasproductos" value="1">
                <input type="hidden" name="words" value="">
                <a class="menu-item" onclick="sendFormLink('nosotros')" style="cursor:pointer;">NOSOTROS</a>
            </form>
            <form action="{{ route('contacto') }}" method="get" id="contacto">
                <input type="hidden" name="contactcellphone" value="04141869016">
                <input type="hidden" name="in_cellphonecontact" value="1">
                <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                <input type="hidden" name="in_marcasproductos" value="1">
                <input type="hidden" name="words" value="">
                <a class="menu-item" onclick="sendFormLink('contacto')" style="cursor:pointer;">CONTÁCTO</a>
            </form>

            <a href="#" class="menu-item">SOPORTE EN LÍNEA</a>
        </div>
        
        <div class="mobile-menu-section">
            @auth            
            @else
                <h4 class="menu-title">MI CUENTA</h4>
                <hr class="menu-divider">
                <a href="/register" class="menu-item">REGISTRARSE</a>
                <a href="/login" class="menu-item">ENTRAR</a>
            @endauth
        </div>
        </nav>
    
    <nav class="navbar">
        <i class="fas fa-bars hamburger-icon" id="hamburgerIcon"></i>

        <div class="navbar-logo">
            <a href="/"><img  src="{{ asset('img/panexpres_logo.png') }}" alt="Logo Pan Expres" class="logo-img"></a>
        </div>

        <div class="navbar-search">
            <form class="navbar-search" action="{{ route('search') }}" method="GET" wire:ignore>
                <div class="search-input-group">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text"  name="words" placeholder="Buscar productos...">
                </div>
            </form>
        </div>

        <script>
            function sendForm(form)
            {
                let formulario = document.getElementById(form)
                formulario.submit();
            }
        </script>

        <script>
            function sendFormLink(formLink)
            {
                let formularioLink = document.getElementById(formLink)
                formularioLink.submit(); // Esto envía los datos como: /aliados?contactcellphone=...&in_cellphonecontact=...
            }
        </script>

        <div class="navbar-actions">

            <div class="action-dropdown profile-dropdown">
                @auth

                    <a href="#" class="action-item profile dropdown-trigger">
                        <img src="{{ auth()->user()->avatar_url }}" id="profileImage" class="img-circle elevation-1" alt="User Image" style="height: 45px; width: 45px;">
                        <span class="profile-text">{{ auth()->user()->name }}</span>
                    </a>
                    @if(auth()->user()->role == 'admin' || auth()->user()->role == 'root')
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
                        <a href="/proximamente">Registro</a>
                    </div>
                @endauth
            </div>

            <div class="action-dropdown cart-dropdown">
                @livewire('carrito.cart-drop-expres')
            </div>
            
        </div>
    </nav>
    
    <nav class="main-menu-desktop">
        <a href="#" class="hamburger-desktop-link" id="hamburgerDesktopIcon">
            <i class="fas fa-bars"></i>
            <span>MENÚ</span>
        </a>
        <div class="menu-options-wrapper">
            <form action="{{ route('search') }}" method="get" id="Pan de Jamón">
                @csrf
                <input type="hidden" name="words" value="Pan de Jamón">
                <a class="menu-options-wrapper" onclick="sendForm('Pan de Jamón')" style="cursor:pointer;">PAN DE JAMÓN</a>
            </form>
            <form action="searchM" method="get" id="Ofertas">
                @csrf
                <input type="hidden" name="words" value="Ofertas">
                <a class="menu-options-wrapper" onclick="sendForm('Ofertas')" style="cursor:pointer;">OFERTAS</a>
            </form>

            <form action="{{ route('vendedesdeaca') }}" method="get" id="vendedesdeaca">
                <input type="hidden" name="contactcellphone" value="04141869016">
                <input type="hidden" name="in_cellphonecontact" value="1">
                <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                <input type="hidden" name="in_marcasproductos" value="1">
                <input type="hidden" name="words" value="">
                <a class="menu-options-wrapper" onclick="sendFormLink('vendedesdeaca')" style="cursor:pointer;">VENDE DESDE ACÁ</a>
            </form>

            <form action="{{ route('aliados') }}" method="get" id="aliados">
                @csrf
                <input type="hidden" name="contactcellphone" value="04141869016">
                <input type="hidden" name="in_cellphonecontact" value="1">
                <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                <input type="hidden" name="in_marcasproductos" value="1">
                <input type="hidden" name="words" value="">                
                <a class="menu-options-wrapper" onclick="sendFormLink('aliados')" style="cursor:pointer;">ALIADOS</a>
            </form>
            
        </div>

        <div class="currency-dropdown desktop-currency-right" wire:ignore>
            @livewire('components.currency-expres')
        </div>

    </nav>

    <nav class="main-menu-mobile">
        <form class="navbar-search-mobile" action="{{ route('search') }}" method="GET" wire:ignore>
            <div class="search-input-group-mobile">
                <i class="fas fa-search search-icon"></i>
                <input type="text"  name="words" placeholder="Buscar productos...">
            </div>
        </form>
    </nav>
</div>
