
            <div class="row">
                <div class="col-md-3 col-12" wire:ignore>
                    <!-- Sección de busqueda -->
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.component-search', [
                        'comercioId' => 1, 
                        'manufacturer_id' => $manufacturer_id,
                        'modelo_id' => $modelo_id,
                        'motor_id' => $motor_id,
                        ])->html();
} elseif ($_instance->childHasBeenRendered('l676631579-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l676631579-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l676631579-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l676631579-0');
} else {
    $response = \Livewire\Livewire::mount('components.component-search', [
                        'comercioId' => 1, 
                        'manufacturer_id' => $manufacturer_id,
                        'modelo_id' => $modelo_id,
                        'motor_id' => $motor_id,
                        ]);
    $html = $response->html();
    $_instance->logRenderedChild('l676631579-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <div class="col-md-9 col-12">
                    <div class="row">
                        <!-- Sección de categoría -->
                        <div class="col-md-12 col-12">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.section-catalogo', ['comercioId' => 1, 'parametro' => $parametro])->html();
} elseif ($_instance->childHasBeenRendered('l676631579-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l676631579-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l676631579-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l676631579-1');
} else {
    $response = \Livewire\Livewire::mount('components.section-catalogo', ['comercioId' => 1, 'parametro' => $parametro]);
    $html = $response->html();
    $_instance->logRenderedChild('l676631579-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>        
                    </div>

                    <div class="row">
                        <!-- Sección de categoría -->
                        <div class="col-md-12 col-12">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.section-manufacturers', ['comercioId' => 1, 'parametro' => $parametro])->html();
} elseif ($_instance->childHasBeenRendered('l676631579-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l676631579-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l676631579-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l676631579-2');
} else {
    $response = \Livewire\Livewire::mount('components.section-manufacturers', ['comercioId' => 1, 'parametro' => $parametro]);
    $html = $response->html();
    $_instance->logRenderedChild('l676631579-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>        
                    </div>

                    <!-- Sección de Resultados -->
                    <div class="row bg">
                        <div class="col-md-12 col-12">
                            <span class="h4 mx-4">Resultado de: <?php echo e($parametro); ?> </span>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <?php if($parametro): ?>
                                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="row  border border-1 ">
                                        <form class="d-flex" action="/add" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input name="product_id" type="hidden" value="<?php echo e($product->id); ?>">
                                            <input name="name" type="hidden" value="<?php echo e($product->name); ?>">
                                            <input name="price1" type="hidden" value="<?php echo e($product->price1); ?>">

                                            <div class="col-md-2 d-flex">
                                                <img class="mx-auto" style="width:150px;" src="<?php echo e($product->image1_url); ?>" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12 centrarFlex">
                                                        <div class="centrar">
                                                            <span class="h6"><?php echo e($product->name); ?></span>
                                                        </div>
                                                        <br>
                                                        <div class="centrar">
                                                            <?php echo e($product->description); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-md-12">
                                                        <a href="/routedetails/<?php echo e($product->comercio_id); ?>/<?php echo e($product->id); ?>" class="btn btn-view ">Ver</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12 d-flex">
                                                        <span class="mx-auto h4">$<?php echo e($product->price1); ?></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-between">
                                                        <div class="input-group input-number-group">
                                                            <div class="input-group-button">
                                                                <span class="input-number-decrement">-</span>
                                                            </div>
                                                            <input name="quantity" class="input-number" type="number" value="1" min="0" max="1000">
                                                            <div class="input-group-button">
                                                                <span class="input-number-increment">+</span>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-sale w-25 h-100"><i class="text-white fa fa-shopping-cart" aria-hidden="true"></i> Comprar</button>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="card showProductCard mx-auto text-center">
                                        <card-body>
                                            <span>No tiene Productos Disponibles</span>
                                        </card-body>
                                        <card-footer>                    
                                        </card-footer>                    
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
    
    <script>
        $('.input-number-increment').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val + 1);
        });

        $('.input-number-decrement').click(function() {
            var $input = $(this).parents('.input-number-group').find('.input-number');
            var val = parseInt($input.val(), 10);
            if(val > 1){
                $input.val(val - 1);
            }
        })

    </script><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/results-products.blade.php ENDPATH**/ ?>