<div class="container">
    <style>
        .overlay-content {
            min-height: 80vh !important;
        }
        .wrapperRedes {
            margin-top: auto !important;
        }
    </style>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <div class="overlay-header">
                        <img class="logo-responsive" src="<?php echo e($comercio->avatar_url); ?>" alt="">
                        <div class="currency-responsive">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.currency')->html();
} elseif ($_instance->childHasBeenRendered('l271160491-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l271160491-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l271160491-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l271160491-0');
} else {
    $response = \Livewire\Livewire::mount('components.currency');
    $html = $response->html();
    $_instance->logRenderedChild('l271160491-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                    </div>

                    <div class="nav-overlay">

                        <div class="accordion-container">
                            <?php if(auth()->guard()->guest()): ?>
                                <div class="set">
                                    <a href="#" style="font-weight: bold; font-size: 1.5rem;">
                                    Cuenta
                                    </a>
                                    <div class="content">
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="dropdown-item" href="/register" style="cursor:pointer;">
                                                <img src="/img/icon_registrarse.png" style="width: 18px; height: 25px;"><span class="mx-3">Registrarse</span>
                                            </a>
                                        </div>
                                        <div class="">                                    
                                            <a class="dropdown-item mx-3" href="/login" style="cursor: pointer;">
                                                <img src="/img/icon_entrar.png" style="width: 18px; height: 25px;"><span class="mx-3">Entrar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>
                                <div class="set">
                                    <a href="#" style="font-weight: bold; font-size: 1.5rem;">
                                        <img src="<?php echo e(auth()->user()->avatar_url); ?>" id="profileImage" class="img-circle elevation-1" alt="User Image" style="height: 30px; width: 30px;">
                                        Hola, <?php echo e(auth()->user()->name); ?>

                                    </a>
                                    <div class="content">
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="profileLink">Perfil</a>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>" x-ref="profileLink">Escritorio</a>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="dropdown-item" href="<?php echo e(route('listPedidosCliente')); ?>" x-ref="profileLink">Mis Pedidos</a>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="changePasswordLink">Cambiar Contraseña</a>
                                        </div>
                                        <?php if(auth()->user()->role == 'admin'): ?>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="dropdown-item" href="<?php echo e(route('admin.settings')); ?>">Configuración</a>
                                        </div>
                                        <?php endif; ?>
                                        <div class="dropdown-divider"></div>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <form method="post" action="<?php echo e(route('logout')); ?>">
                                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                            
                    </div>

                    <hr>

                    <div class="nav-overlay">
                        <div class="accordion-container">
                            <h4>Categorías</h4>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($category->subcategories->count() == 0): ?>
                                        <div class="set">
                                            <a class="mx-4" style="cursor:pointer;" href="<?php echo e(route('cat', [
                                                'categ' => $category->name,
                                                'manufacturer_id' => $state['manufacturer_id'],
                                                'modelo_id' => $state['modelo_id'],
                                                'motor_id' => $state['motor_id'],
                                                ])); ?>" style="font-weight: bold; ">
                                                <?php echo e($category->name); ?>

                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <div class="set" style="font-weight: bold; ">
                                            <a href="#">
                                                <i class="fa fa-plus mr-3"></i>
                                                <?php echo e($category->name); ?>                                                
                                            </a>
                                    
                                            <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="content">
                                                    <div class="d-flex justify-content-between mx-5">
                                                        <a class="" href="<?php echo e(route('cat', [
                                                                                    'categ' => $subcategory->name,
                                                                                    'manufacturer_id' => $state['manufacturer_id'],
                                                                                    'modelo_id' => $state['modelo_id'],
                                                                                    'motor_id' => $state['motor_id'],
                                                                                    ])); ?>">
                                                            <?php echo e($subcategory->name); ?>

                                                        </a>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </div>
                                    <?php endif; ?>                                
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>        
                    </div>
                    <div class="nav-overlay">
                        <div class="accordion-container">
                            <div class="set" style="font-weight: bold; ">
                                <a href="#">
                                    <i class="fa fa-plus mr-3"></i>
                                    Menu
                                </a>

                                <div class="content">
                                    <div class="d-flex justify-content-between mx-5">
                                        <form action="searchM" method="get" id="Pan de Jamón">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="words" value="Pan de Jamón">
                                            <input type="hidden" name="manufacturer_id" value="0">
                                            <input type="hidden" name="modelo_id" value="0">
                                            <input type="hidden" name="motor_id" value="0">
                                            <a class="mx-4" onclick="sendForm('Pan de Jamón')" style="cursor:pointer;">Pan de Jamón</a>
                                        </form>
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="d-flex justify-content-between mx-5">
                                        <form action="searchM" method="get" id="Ofertas">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="words" value="Ofertas">
                                            <input type="hidden" name="manufacturer_id" value="0">
                                            <input type="hidden" name="modelo_id" value="0">
                                            <input type="hidden" name="motor_id" value="0">
                                            <a class="mx-4" onclick="sendForm('Ofertas')" style="cursor:pointer;">Ofertas</a>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>        
                    </div>
                    <script>
                        <script>
                            function sendForm(form)
                            {
                                let formulario = document.getElementById(form)
                                formulario.submit();
                            }
                        </script>
                    </script>

                    <!-- Social Media Buttons HTML -->
                    <div class="wrapperRedes d-flex justify-content-start navigationMap">
                        <a href="<?php echo e($comercio->instagram); ?>" class="icon instagram">
                            <div class="tooltip">Instagram</div>
                            <span><i class="fab fa-instagram"></i></span>
                        </a>
                    </div>
                    <!-- End Social Media Buttons HTML -->

                    <div style="height: 20%;"></div>
                    
                </div>
            </div>
            <div class="header-main fixed-top ">
                <div class="header">
                    <div class="logo">
                        <a href="/"><img class="main-sidebar-img" src="<?php echo e($comercio->avatar_url); ?>" alt=""></a>
                    </div>
                    <!-- The form -->
                    <div class="search">
                        <form class="d-flex justify-content-center" action="<?php echo e(route('search')); ?>" method="GET" wire:ignore>
                            <input wire:model.defer="state.manufacturer_id" type="hidden" class ="manufacturerS_id" name = "manufacturerS_id">
                            <input wire:model.defer="state.modelo_id" type="hidden" class ="modeloS_id" name = "modeloS_id">
                            <input wire:model.defer="state.motor_id" type="hidden" class ="motorS_id" name = "motorS_id">
                            <input class="form-control" name="words" type="text" placeholder="Buscar">
                            <button type="submit" class="fa fa-search"></button>
                        </form>
                    </div>
                    <!-- Menu horizontal -->
                    <ul class="menu-horizontal d-flex justify-content-end" style="z-index: 10!important;">
                        <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item p-3 py-md-1">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="<?php echo e(auth()->user()->avatar_url); ?>" id="profileImage" class="img-circle elevation-1" alt="User Image" style="height: 30px; width: 30px;">
                                            <span class="ml-1" x-ref="username">Hola, <?php echo e(auth()->user()->name); ?></span>
                                        </a>
                                        <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>" x-ref="profileLink">Escritorio</a>
                                            <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="profileLink">Perfil</a>
                                            <a class="dropdown-item" href="<?php echo e(route('listPedidosCliente')); ?>" x-ref="profileLink">Mis Pedidos</a>
                                            <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="changePasswordLink">Cambiar Contraseña</a>
                                            <?php if(auth()->user()->role =='admin'): ?>
                                            <a class="dropdown-item" href="<?php echo e(route('admin.settings')); ?>">Configuración</a>
                                            <?php endif; ?>
                                            <div class="dropdown-divider"></div>
                                            <form method="post" action="<?php echo e(route('logout')); ?>">
                                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                            
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="">                                
                                <a class="dropdown-toggle botonera" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                
                                    <img style="height:45px" src="/img/icon_miperfil.png" id="profileImage" alt="User Image">Perfil
                                </a>                            
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                    <div class="d-flex justify-content-between mb-2 ml-3">
                                        <a class="dropdown-item" href="/register" style="cursor:pointer;">
                                            <img src="/img/icon_registrarse.png" style="width: 18px; height: 25px;"><span class="mx-3">Registrarse</span>
                                        </a>
                                    </div>

                                    <div class="">                                    
                                        <a class="dropdown-item" href="/login" style="cursor: pointer;">
                                            <img src="/img/icon_entrar.png" style="width: 18px; height: 25px;"><span class="mx-3">Entrar</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </li> 
                        <?php endif; ?>
                        <li class="d-none">
                            <a class="botonera" href="">
                                <img style="height:45px" src="/img/icon_heart.png" alt="">
                            </a>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-12 mx-2">
                                    <div class="dropdown-cart-drop">
                                        <a class="btn-cart-drop d-flex justify-content-between botonera" href="/goCart">
                                            <img src="/img/icon_carrito.png" style="height:45px cursor:pointer;">
                                            <span class="text-dark">(<?php echo e($totalQuantityCart); ?>)</span>
                                            <!-- <span class="text-dark">(<?php echo e(\Cart::getTotalQuantity()); ?>)</span> -->
                                        </a>
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('carrito.cart-drop')->html();
} elseif ($_instance->childHasBeenRendered('l271160491-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l271160491-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l271160491-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l271160491-1');
} else {
    $response = \Livewire\Livewire::mount('carrito.cart-drop');
    $html = $response->html();
    $_instance->logRenderedChild('l271160491-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>                    
                </div>

                <div class="menu" style="z-index: 6!important">
                    <div class="menu-left" onclick="openNav()">&#9776; <span class="wordMenu">MENÚ</span></div> 
                    <div class="menu-center w-full ">
                        <div class="d-flex justify-content-around ">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.menu-component',[
                            'comercioId' => 1,
                            'manufacturer_id' => $manufacturer_id,
                            'modelo_id' => $modelo_id,
                            'motor_id' => $motor_id,
                        ])->html();
} elseif ($_instance->childHasBeenRendered('l271160491-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l271160491-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l271160491-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l271160491-2');
} else {
    $response = \Livewire\Livewire::mount('components.menu-component',[
                            'comercioId' => 1,
                            'manufacturer_id' => $manufacturer_id,
                            'modelo_id' => $modelo_id,
                            'motor_id' => $motor_id,
                        ]);
    $html = $response->html();
    $_instance->logRenderedChild('l271160491-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                        
                    </div>
                    <div class="button-search w-full" style="display: none; cursor: pointer;"><img src="/img/icon_buscar.png" alt=""></div>
                    <span class="fw-bold w-full">Divisa:</span>
                    <div class="menu-right w-full d-flex justify-content-between">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.currency')->html();
} elseif ($_instance->childHasBeenRendered('l271160491-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l271160491-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l271160491-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l271160491-3');
} else {
    $response = \Livewire\Livewire::mount('components.currency');
    $html = $response->html();
    $_instance->logRenderedChild('l271160491-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                    <div class="menu-responsive">
                        <div class="menu-responsive">
                            <!-- Menu horizontal -->
                            <a href="/"><img class="logo-movil" src="<?php echo e($comercio->avatar_url); ?>" alt=""></a>
                            <div class="button-search"><img class="icon-movil" src="/img/icon_buscar.png" alt=""></div>
                            <?php if(auth()->guard()->check()): ?>
                                <div><a href="">
                                        <img class="icon-movil img-circle elevation-1"  src="<?php echo e(auth()->user()->avatar_url); ?>" id="profileImage" alt="User Image" style="height: 30px; width: 30px;">
                                    </a>
                                </div>
                                
                            <?php else: ?>
                                <div><a href=""><img class="icon-movil" src="/img/icon_miperfil.png" alt=""></a></div>
                            <?php endif; ?>
                            <div class="d-none"><a href=""><img class="icon" src="/img/icon_heart.png" alt=""></a></div>
                            
                            <div>
                                <a class="d-flex justify-content-between" href="/goCart">
                                    <img class="icon-movil" src="/img/icon_carrito.png" style="cursor:pointer;">
                                    <span class="fs-5 my-2 text-dark">(<?php echo e($totalQuantityCart); ?>)</span>
                                    <!-- <span class="text-dark">(<?php echo e(\Cart::getTotalQuantity()); ?>)</span> -->
                                </a>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('carrito.cart-drop')->html();
} elseif ($_instance->childHasBeenRendered('l271160491-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l271160491-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l271160491-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l271160491-4');
} else {
    $response = \Livewire\Livewire::mount('carrito.cart-drop');
    $html = $response->html();
    $_instance->logRenderedChild('l271160491-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                        </div>                                
                        
                        <div class="div-search d-none w-100">
                            <form action="<?php echo e(route('search')); ?>" method="GET" >
                                <input wire:model.defer="state.manufacturer_id" type="hidden" class ="manufacturerS_id" name = "manufacturerS_id">
                                <input wire:model.defer="state.modelo_id" type="hidden" class ="modeloS_id" name = "modeloS_id">
                                <input wire:model.defer="state.motor_id" type="hidden" class ="motorS_id" name = "motorS_id">
                                <input class="form-control search-input" name="words" type="text" placeholder="Buscar" style="height: 40px;">
                                <button type="submit" class="form-control fa fa-search"></button>
                            </form>
                        </div>      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var altura_del_header_main = $('.header-main').outerHeight(true);

        // posicionarMenu();

        $(window).scroll(function() {    
            // closeNav()
            // posicionarMenu();
        });

        function posicionarMenu()
        {
            
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            if(window.innerWidth > 1070) {
                if ($(window).scrollTop() >= altura_del_header_main){
                    $('.header-main').addClass('fixed');
                    // $('.menu').addClass('fixed');
                    $('.wrapper').css('margin-top', (altura_del_header_main-15) + 'px');
                    $('.button-search').css('display', 'block');
                    $('.div-search').css('display', 'none');
                } 
                else {
                    $('.header-main').removeClass('fixed');
                    // $('.menu').removeClass('fixed');
                    $('.wrapper').css('margin-top', altura_del_header_main-15);
                    $('.button-search').css('display', 'none');
                    $('.div-search').css('display', 'none');
                }
            }else{
                $('.header-main').addClass('fixed');
                //  $('.menu').addClass('fixed');
                 $('.wrapper').css('margin-top', (parseFloat(altura_del_menu)-15) + 'px');
                 $('.div-search').css('display', 'none');
            }
        }

        $('.button-search').on('click', function(){
            if($('.menu').css('height') !== '100px'){
                $('.menu').css('height', '100px');
                $('.div-search').css('display', 'block', 'important');
                $('.div-search').removeClass('d-none')
                $('.search-input').css('width', window.innerWidth, 'important');
            }else{
                $('.menu').css('height', '45px');
                $('.div-search').css('display', 'none', 'important');
                $('.div-search').addClass('d-none')
            }
            
            
            $('.menu').css('align-items', 'start');
            $('.input-search').focus();

        })
        
        // $(".input-search").blur(function(){
        //     $('.menu').css('height', '45px');
        //     $('.div-search').css('display', 'none');
        //     $('.menu').css('align-items', 'center');
        // });
    </script>

    <script>
        function openNav() {
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            var ancho = window.innerWidth;
            var alto = window.innerHeight;
            if(ancho > 1070){
                document.getElementById("myNav").style.width = "30%";
                
                if ($(window).scrollTop() >= 100){
                    document.getElementById("myNav").style.marginTop = 0;
                }
                else{
                    document.getElementById("myNav").style.marginTop = 100;
                }

                document.getElementById("myNav").style.marginTop = altura_del_header;

            }else{
                document.getElementById("myNav").style.marginTop =  "2px";
                document.getElementById("myNav").style.width = "95%";
            }
        
        }
        
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

    <script>
        window.onload = function(e){ 
            $(".set > a").on("click", function() {
                if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this)
                    .siblings(".content")
                    .slideUp(200);
                $(".set > a i")
                    .removeClass("fa-minus")
                    .addClass("fa-plus");
                } else {
                $(".set > a i")
                    .removeClass("fa-minus")
                    .addClass("fa-plus");
                $(this)
                    .find("i")
                    .removeClass("fa-plus")
                    .addClass("fa-minus");
                $(".set > a").removeClass("active");
                $(this).addClass("active");
                $(".content").slideUp(200);
                $(this)
                    .siblings(".content")
                    .slideDown(200);
                }
            });
        };

    </script>
    
</div>


<!-- <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($category->subcategories->count() == 0): ?>
        <a class="dropdown-item" style="cursor:pointer;" href="<?php echo e(route('cat', [
            'categ' => $category->name,
            'manufacturer_id' => $state['manufacturer_id'],
            'modelo_id' => $state['modelo_id'],
            'motor_id' => $state['motor_id'],
            ])); ?>">
            <?php echo e($category->name); ?>

        </a>
    <?php else: ?>
        <div class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo e($category->name); ?>

            </a>
            
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item" href="<?php echo e(route('cat', [
                                                    'categ' => $subcategory->name,
                                                    'manufacturer_id' => $state['manufacturer_id'],
                                                    'modelo_id' => $state['modelo_id'],
                                                    'motor_id' => $state['motor_id'],
                                                    ])); ?>">
                            <?php echo e($subcategory->name); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> --><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/layouts/navbar-nuevo.blade.php ENDPATH**/ ?>