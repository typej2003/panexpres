<div>
    <style>
        /* .slider{
            width: 90%!important;
        } */
        /* * {
         box-sizing: border-box;
        } */

        .slider {
            /*width: 50%;*/
            width: 100%;
            margin: 10px auto!important; */        
            /* height: 300px; */
        }

        .slick-slide {
        margin: 0px 10px; 
        }

        .slick-slide {
        margin: 0px 20px; 
        }

        .slick-slide img {
        width: 20%;
        height: 200px;
        }

        .slick-prev:before,
        .slick-next:before {
        color: black;
        }

        .slick-next.slick-arrow {
            border: 1px solid black;
            border-radius: 50px;
            width: 35px;
            height: 35px;
            display: block;
            /* background-image: url('/img/circle-right-regular.svg'); */
            z-index: 2;
        }

        .slick-prev.slick-arrow {
            border: 1px solid black;
            border-radius: 50px;
            width: 35px;
            height: 35px;
            display: block;
            /* background-image: url('/img/circle-left-regular.svg'); */
            z-index: 2;
        }

        .slick-slide {
        transition: all ease-in-out .3s;
        /* opacity: .2; */
        }
        
        /* .slick-active {
        opacity: .5;
        }

        .slick-current {
        opacity: 1;
        } */
        
    </style>
<div class="container-fluid carouselOffer">
    <div class="row negrita">
        <div class="col-12">
            <img class="mx-3" width="45px" src="/img/icon-sales.png" alt=""><span class="h3 text-dark">Ofertas</span>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <span class="h4 text-white mx-4">Mira y aprovecha estos descuentos</span>  
        </div>
    </div>   
    <div class="row">
        <div class="col-md-12">
            <section class="regular slider slider-products" <?php if($renderizar): ?> wire:ignore <?php endif; ?> wire:ignore.self>
                <?php $__empty_1 = true; $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                                        <div class="negrita d-flex align-item-start"><?php echo e($product->name); ?></div>
                                            <?php if($product->on_offer): ?>
                                                <div class="text-decoration-line-through d-flex align-item-start">Precio: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice1()); ?></div>
                                                <div class="d-flex align-item-start">Promoción: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice_offer()); ?></div>
                                            <?php else: ?>
                                                <div class="d-flex align-item-start">Precio: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice1()); ?></div>
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

    <script>
        function loadSlider(){
            $(".slider-products-offers").slick({
            dots: true,
            infinite: true,
            slidesToShow: findSlides(),
            slidesToScroll: 3,
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
</div><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/carousel-offer.blade.php ENDPATH**/ ?>