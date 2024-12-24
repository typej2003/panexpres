<div>
    
    <div class="row">
        <div class="col-md-12">
            Seleccione el catalogo 
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="regular sliderC slider-catalogo">
                <?php $__empty_1 = true; $__currentLoopData = $catalogos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div>
                        <div class="card cardCatalogo mx-auto text-center mx-2">
                            <div class="card-body">
                                <img class="mx-auto border border-1" src="<?php echo e($product->image1_url); ?>" alt="">                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="card cardCatalogo mx-auto text-center">
                        <card-body>
                            <span>No tiene Catalogo para este producto</span>
                        </card-body>
                        <card-footer>                    
                        </card-footer>                    
                    </div>
                <?php endif; ?>
            </section>       
        </div>
    </div>

    <script>
        function loadSlider(){
            $(".slider-catalogo").slick({
            dots: true,
            infinite: true,
            slidesToShow: findSlides(),
            slidesToScroll: 5,
            autoplay: false,
            });
        }
        
        loadSlider()

        function findSlides()
        {
            var ancho = window.innerWidth;
            var alto = window.innerHeight;

            if (window.innerWidth < 1024) 
                return 2
            else 
            if (window.innerWidth < 1280) 
                return 3
            else 
                return 5
        }

        window.addEventListener('resize', () => {
            //location.reload()
        })
    </script>
</div><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/section-catalogo.blade.php ENDPATH**/ ?>