<!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top "> -->
<nav class="main-header navbar navbar-expand navbar-white navbar-orange">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown my-2">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php echo e(auth()->user()->avatar_url); ?>" id="profileImage" class="img-circle elevation-1" alt="User Image" style="height: 30px; width: 30px;">
                <span class="ml-1 w-full" x-ref="username">Hola, <?php echo e(auth()->user()->name); ?></span>
            </a>
            <div class="dropdown-menu my-5" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="profileLink">Perfil</a>
                <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="profileLink">Mi Cuenta</a>
                <a class="dropdown-item d-none" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="profileLink">Mis Listas de Deseos</a>
                <a class="dropdown-item" href="<?php echo e(route('listPedidosCliente')); ?>" x-ref="profileLink">Mis Pedidos</a>
                <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="changePasswordLink">Cambiar Contraseña</a>
                <a class="dropdown-item" href="<?php echo e(route('admin.settings')); ?>">Configuración</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesión</a>
                </form>
            </div>
        </li>
        <li class="nav-item">
            <div class="row">
                <div class="col-md-12 mx-2">
                    <div class="dropdown-cart-drop">
                        <a class="btn-cart-drop d-flex justify-content-between botonera">
                            <img  src="/img/icon_carrito.png" style="height:25px !important; cursor:pointer !important;">
                            <span class="text-dark">(<?php echo e($totalQuantityCart); ?> )</span>
                            <!-- <span class="text-dark">(<?php echo e(\Cart::getTotalQuantity()); ?>)</span> -->
                        </a>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('carrito.cart-drop', ['currencyValue' => $currencyValue ])->html();
} elseif ($_instance->childHasBeenRendered('l3697213750-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3697213750-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3697213750-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3697213750-0');
} else {
    $response = \Livewire\Livewire::mount('carrito.cart-drop', ['currencyValue' => $currencyValue ]);
    $html = $response->html();
    $_instance->logRenderedChild('l3697213750-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="row">
                <div class="col-md-12 my-2">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.currency')->html();
} elseif ($_instance->childHasBeenRendered('l3697213750-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3697213750-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3697213750-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3697213750-1');
} else {
    $response = \Livewire\Livewire::mount('components.currency');
    $html = $response->html();
    $_instance->logRenderedChild('l3697213750-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/layouts/navbar-in.blade.php ENDPATH**/ ?>