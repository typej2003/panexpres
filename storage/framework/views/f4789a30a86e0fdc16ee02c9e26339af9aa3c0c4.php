<div wire:ignore>
    <div class="container-fluid showProductsP">
        <div class="row negrita">
            <div class="col-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <span class="h4 negrita">También podría interesarle</span>  
            </div>
        </div>    
        <div class="row">
            <div class="col-md-12">
                <section class="regular slider slider-recommended" <?php if($renderizar): ?> wire:ignore <?php endif; ?> wire:ignore.self>
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div>
                            <form action="/add" method="post">
                                <?php echo csrf_field(); ?>
                                <input name="product_id" type="hidden" value="<?php echo e($product->id); ?>">
                                <input name="name" type="hidden" value="<?php echo e($product->name); ?>">
                                <input name="price1" type="hidden" value="<?php echo e($product->price1); ?>">
                                <input name="quantity" type="hidden" value="1">
                                <div class="card showProductCard mx-auto text-center mx-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="">
                                                <a href="/routedetails/<?php echo e($product->comercio_id); ?>/<?php echo e($product->id); ?>" ><img class="mx-auto" src="<?php echo e($product->image1_url); ?>" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="row text-left">
                                            <div class="col-md-12">
                                            <div class="negrita"><?php echo e($product->name); ?></div>
                                                <?php if($product->on_offer): ?>
                                                    <div class="text-decoration-line-through">Precio: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice1()); ?></div>
                                                    <div class="">Promoción: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice_offer()); ?></div>
                                                <?php else: ?>
                                                    <div class="">Precio: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice1()); ?></div>
                                                <?php endif; ?>
                                                <div style="display: flex; flex-direction: row;">
                                                    <div class="">
                                                    <!-- <button type="submit" class="btn btn-sale text-center">Comprar ahora</button> -->
                                                    <a wire:click.prevent="sendCard(<?php echo e($product->id); ?>, 1)" class="btn btn-sale text-center">Comprar ahora</a>
                                                    </div>
                                                    <br>                                                     
                                                    <div class="cardStar" product="<?php echo e($product->id); ?>" >
                                                        <?php for($i = 1; $i <=5; $i++): ?>
                                                            <?php if($product->valoracionProduct->ca_valoracion >= $i): ?>
                                                                <span wire:click.prevent="valorar(<?php echo e($product->id); ?>, <?php echo e($product->valoracionProduct->ca_valoracion); ?>, '<?php echo e($product->valoracionProduct->class); ?>')" product="<?php echo e($product->id); ?>" star = "<?php echo e($i); ?>" class="star <?php echo e($product->valoracionProduct->class); ?>">★</span>
                                                            <?php else: ?>
                                                                <span wire:click.prevent="valorar(<?php echo e($product->id); ?>, <?php echo e($product->valoracionProduct->ca_valoracion); ?>, '<?php echo e($product->valoracionProduct->class); ?>')" product="<?php echo e($product->id); ?>" star = "<?php echo e($i); ?>" class="star">★</span>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                        <h5 class="output" output="show<?php echo e($product->id); ?>">
                                                            Puntuación: <?php echo e($product->valoracionProduct->ca_valoracion); ?>/5
                                                        </h5>
                                                    </div>
                                                </div>
                                        
                                            </div>    
                                        </div>
                                        <?php if($product->in_envio_gratis): ?>
                                        <div class="text-left" style="color: blue;">Envío Gratis</div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-footer">
                                        <span class="">Tienda: Auto Repuestos Fred</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="card showProductCard mx-auto text-center">
                            <div class="card-body">
                                <span>No tiene productos disponibles</span>
                            </div>
                            <div class= "card-footer">
                            </div>                    
                        </div>
                    <?php endif; ?>
                </section>       
            </div>
        </div>
    </div>

    <!-- Modal -->

    
    <!-- Modal -->
    <div class="modal fade" id="valoracionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <form autocomplete="off" wire:submit.prevent="registrarValoracion">
                <div class="modal-content modalFondo">
                    <div class="modal-header" style="background-color: #f8f8f8;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section class="banner">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img class="img_logo" src="/img/logo_repuestos.png" alt="">
                                </div>
                            </div>
                        </section>
                        <div class="container-fluid d-flex flex-row">
                            <div class="card  mx-auto" style="width: 32rem;">
                                <div class="modal-body">
                                    
                                    <div class="form-group my-2">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.star', ['product_id' => $state['product_id'], 'ca_valoracion' => $state['ca_valoracion'], 'class' => $state['class']])->html();
} elseif ($_instance->childHasBeenRendered('l1905534501-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1905534501-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1905534501-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1905534501-0');
} else {
    $response = \Livewire\Livewire::mount('components.star', ['product_id' => $state['product_id'], 'ca_valoracion' => $state['ca_valoracion'], 'class' => $state['class']]);
    $html = $response->html();
    $_instance->logRenderedChild('l1905534501-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="comment">Comentario</label>
                                        <textarea wire:model.defer="state.comment" autofocus class="form-control <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="comment" rows = "5"></textarea>
                                        <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>

                        </div>        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> Cancelar</button>
                        <button type="submit" class="btn-app"><i class="fa fa-save mr-1"></i>
                            <span>Guardar Cambios</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function loadSlider(){
            $(".slider-recommended").slick({
            dots: true,
            infinite: true,
            slidesToShow: findSlides(),
            slidesToScroll: findSlides(),
            autoplay: false,
            });
        }
        
        loadSlider()

        function findSlides()
        {
            var ancho = window.innerWidth;
            var alto = window.innerHeight;

            if (window.innerWidth < 1024) 
                return 1
            else 
            if (window.innerWidth < 1280) 
                return 2
            else 
                return 3
        }

        window.addEventListener('resize', () => {
            //location.reload()
        })
    </script>

    <script src="/js/star.js"></script>

    <script>
        window.onpageshow = function() {
            window.addEventListener('show-valoracionModal', function (event) {
                $('#valoracionModal').modal('show');
            });

            window.addEventListener('hide-valoracionModal', function (event) {
                $('#valoracionModal').modal('hide');
            });

            window.addEventListener('show-loginModalShow', function (event) {
                $('#loginModalShow').modal('show');
            });

            window.addEventListener('hide-loginModalShow', function (event) {
                $('#loginModalShow').modal('hide');
            });

            $('#valoracionModal').on('show.bs.modal', function(){
                
            });
        }
    </script>

</div><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/show-recommended.blade.php ENDPATH**/ ?>