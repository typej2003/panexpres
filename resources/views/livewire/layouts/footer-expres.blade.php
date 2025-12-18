<div>
    <footer class="main-footer">

        <div class="footer-row footer-row-1">
            
            <div class="footer-col footer-col-logo">
                <img src="{{ asset('img/panexpres_logo_blanco.png') }}" alt="Logo Pan Expres Blanco" class="footer-logo">
                <div class="social-links">
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon whatsapp"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="social-icon tiktok"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Acerca de</h4>
                <ul>
                    <li>
                        <form action="{{ route('nosotros') }}" method="get" id="nosotros">
                            <input type="hidden" name="contactcellphone" value="04141869016">
                            <input type="hidden" name="in_cellphonecontact" value="1">
                            <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                            <input type="hidden" name="in_marcasproductos" value="1">
                            <input type="hidden" name="words" value="">
                            <a class="menu-item" onclick="sendFormLink('nosotros')" style="cursor:pointer;">Nosotros</a>
                        </form>
                    </li>
                    <li>
                        
                            <a href="https://api.whatsapp.com/send?phone=+58{{'04141869016'}}&text={{ 'Hola, te asesoramos por  whatsapp.'}}" class="" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp whatsapp-icon"></i>
                                Contacto
                            </a>
                        
                        <!-- <form action="{{ route('contacto') }}" method="get" id="contacto">
                            <input type="hidden" name="contactcellphone" value="04141869016">
                            <input type="hidden" name="in_cellphonecontact" value="1">
                            <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                            <input type="hidden" name="in_marcasproductos" value="1">
                            <input type="hidden" name="words" value="">
                            <a class="menu-item" onclick="sendFormLink('contacto')" style="cursor:pointer;">Contactos</a>
                        </form> -->
                    </li>
                    <li>
                        <form action="{{ route('politicadeprivacidad') }}" method="get" id="politicadeprivacidad">
                            <input type="hidden" name="contactcellphone" value="04141869016">
                            <input type="hidden" name="in_cellphonecontact" value="1">
                            <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                            <input type="hidden" name="in_marcasproductos" value="1">
                            <input type="hidden" name="words" value="">
                            <a class="" onclick="sendFormLink('politicadeprivacidad')" style="cursor:pointer;">Política de Privacidad</a>
                        </form>
                    </li>
                    <li class="d-none"><a href="#">Términos y Condiciones</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Categorías</h4>
                <ul>
                    <li>
                        <form action="{{ route('aliados') }}" method="get" id="aliados">
                            @csrf
                            <input type="hidden" name="contactcellphone" value="04141869016">
                            <input type="hidden" name="in_cellphonecontact" value="1">
                            <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                            <input type="hidden" name="in_marcasproductos" value="1">
                            <input type="hidden" name="words" value="">                
                            <a class="" onclick="sendFormLink('aliados')" style="cursor:pointer;">Aliados</a>
                        </form>
                        
                    </li>
                    <li>
                        <form action="searchM" method="get" id="Pan de Jamón">
                            @csrf
                            <input type="hidden" name="words" value="Pan de Jamón">
                            <a class="" onclick="sendForm('Pan de Jamón')" style="cursor:pointer;">Pan de Jamón</a>
                        </form>
                    </li>
                    <li>
                        <form action="searchM" method="get" id="Ofertas">
                            @csrf
                            <input type="hidden" name="words" value="Ofertas">
                            <a class="" onclick="sendForm('Ofertas')" style="cursor:pointer;">Ofertas</a>
                        </form>
                    </li>
                    <li>
                        <form action="{{ route('vendedesdeaca') }}" method="get" id="vendedesdeaca">
                            <input type="hidden" name="contactcellphone" value="04141869016">
                            <input type="hidden" name="in_cellphonecontact" value="1">
                            <input type="hidden" name="msgcontact" value="msgcontact_value"> 
                            <input type="hidden" name="in_marcasproductos" value="1">
                            <input type="hidden" name="words" value="">
                            <a class="" onclick="sendFormLink('vendedesdeaca')" style="cursor:pointer;">Vende desde Acá</a>
                        </form>
                    </li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Ayuda</h4>
                <ul>
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=+58{{'04141869016'}}&text={{ 'Hola, te asesoramos por  whatsapp.'}}" class="" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp whatsapp-icon"></i>
                                Soporte en Línea
                        </a>
                    </li>
                </ul>
            </div>
            @guest
            <div class="footer-col">
                <h4 class="footer-title">Mi Cuenta</h4>
                <ul>
                    <li><a href="/register">Registrarse</a></li>
                    <li><a href="/login">Entrar</a></li>
                </ul>
            </div>
            @endguest

        </div>

        <div class="footer-row footer-row-2">
            
            <div class="footer-col-secondary footer-col-ddr">
                <img src="{{ asset('/img/logo_ddr.png') }}" alt="Logo DDR" class="footer-logo1-small">
            </div>

            <div class="footer-col-secondary footer-col-copyright">
                <span>COPYRIGHT © 2025 DDR SISTEMAS C.A. RIF: J-31512955-8 V1.0.0 PV2</span>
            </div>

            <div class="footer-col-secondary footer-col-bank">
                <img src="{{ asset('/img/bancos_01.png') }}" alt="Logo Banco" class="footer-logo2-small">
            </div>

        </div>
        
    </footer>
</div>
