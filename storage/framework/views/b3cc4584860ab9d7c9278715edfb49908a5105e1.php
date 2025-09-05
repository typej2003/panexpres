<div class="container-fluid">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/infiniteSlider.css">

    <script src="/js/jquery-3.6.4.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <link rel="stylesheet" href="/css/star.css">

    <div class="row my-2">
        <div class="col-md-12">
            <a href="/"><h6><i class="fa fa-solid fa-arrow-left"></i> Continuar con la compra</h6></a>
        </div>
    </div>

    <?php if(\Cart::getTotalQuantity()>0): ?>

    <div class="row my-2">
        <div class="col-md-8">
            <table class="table table-responsive">
                <thead class="thead-primary">
                    <tr style="font-size: 12px">                      
                        <th scope="col"></th>
                        <th scope="col">Comercio</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $cartCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <tbody>
                    <tr style="font-size: 12px">
                        <td>
                            <img src="<?php echo e($item->attributes->image); ?>" class="img-thumbnail" width="80" height="80">                                        
                        </td>
                        <td><strong><?php echo e($this->getComercio($item->attributes->comercio_id)->name); ?></strong></td>
                        <td><strong><?php echo e($item->name); ?></strong></td>
                        <td><?php echo e($this->convertir($item->price)); ?> <?php echo e($currencyValue); ?></td>
                        <td>
                            <div class="col-md-12 d-flex justify-content-between">
                                <div class="input-group input-number-group">
                                    <div class="input-group-button">
                                        <span class="input-number-decrement" wire:click.prevent="updateQuantity(<?php echo e($item->id); ?>, <?php echo e($item->quantity); ?>, '-' )">-</span>
                                    </div>
                                    <input class="input-number" type="number" value="<?php echo e($item->quantity); ?>" min="0" max="1000">
                                    <div class="input-group-button">
                                        <span class="input-number-increment" wire:click.prevent="updateQuantity(<?php echo e($item->id); ?>, <?php echo e($item->quantity); ?>, '+' )">+</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><?php echo e($this->convertir(\Cart::get($item->id)->getPriceSum())); ?> <?php echo e($currencyValue); ?> </td>
                        <td>
                            <form action="<?php echo e(route('cart.remove')); ?>"   method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" value="<?php echo e($item->id); ?>" id="id" name="id">
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php if(\Cart::getTotalQuantity()>0): ?>
                <h6><?php echo e(\Cart::getTotalQuantity()); ?> Producto(s) en el carrito</h6><br>
            <?php else: ?>
                <h6>No Existen Productos en el Carrito de Compra</h6><br>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-6">
                <?php if(count($cartCollection)>0): ?>
                    <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <button class="btn-danger">
                        Vaciar Carrito
                    </button> 
                    </form>
                <?php endif; ?>         
                </div>
            </div>                
        </div>
        <div class="col-md-4">
            <div>Su pedido (cant: <?php echo e(count($listpedidos)); ?>)</div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Precio total artículos</th>
                        <!-- <th scope="col"><?php echo e($currencyValue); ?> <?php echo e($this->getSubTotal()); ?></th> -->
                         <th scope="col"><?php echo e($currencyValue); ?> <?php echo e($this->getTotal()); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-none">
                        <th scope="row">Impuestos</th>
                        <td><?php echo e($currencyValue); ?> <?php echo e($this->getImpuestoIVA()); ?></td>
                    </tr>
                    <?php if($currencyValue == '$'): ?>
                    <tr class="d-none">
                        <th scope="row">IGTF</th>
                        <td><?php echo e($currencyValue); ?> <?php echo e($this->amountIGTF()); ?></td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <th scope="row">Total</th>
                        <td><?php echo e($currencyValue); ?> <?php echo e($this->getTotal()); ?></td>
                    </tr>
                    <tr>
                        <th scope="row" colspan = "2">
                            <?php if(count($cartCollection)>0): ?>
                                <?php if(auth()->guard()->check()): ?>
                                <button wire:click.prevent="finalizarCompra" class="form-control btn btn-success">Compra</button>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <strong>Ya Eres Usuario</strong> 
                                        <br>Nos gustaria que Colocaras tus credenciales
                                        <p class="mb-3">
                                            <a href="/login" class="boton dropdown-item" data-bs-toggle="modal" data-bs-target="#loginModal" style="cursor: pointer;">Entrar al Sistema</a>
                                        </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <strong>Aun no tienes cuenta?</strong> 
                                            <a href="/register" class="boton dropdown-item" data-bs-toggle="modal" data-bs-target="#registerModal" style="cursor: pointer;">Registrarte</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </th>
                    </tr>
                </tbody>
            </table>            
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.show-recommended', [
                    'comercioId' => 1, 
                    'parametro' => $words,
                    'manufacturer_id' => $manufacturer_id,
                    'modelo_id' => $modelo_id,
                    'motor_id' => $motor_id,
                    ])->html();
} elseif ($_instance->childHasBeenRendered('l2844426894-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2844426894-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2844426894-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2844426894-0');
} else {
    $response = \Livewire\Livewire::mount('components.show-recommended', [
                    'comercioId' => 1, 
                    'parametro' => $words,
                    'manufacturer_id' => $manufacturer_id,
                    'modelo_id' => $modelo_id,
                    'motor_id' => $motor_id,
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('l2844426894-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>

    <?php else: ?>
    <div class="row my-2">
        <div class="col-md-12">
            <div class="centrar">Carrito Vacío</div>
            <div class="centrar">
                <img class="logo-responsive" src="/img/carrito_vacio.gif" alt="">
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <script>
        $('.input-number-increment').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val + 1);
        });

        $('.input-number-decrement').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        if(val > 0)
            $input.val(val - 1);
        })

    </script>
    
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/cart/cart.blade.php ENDPATH**/ ?>