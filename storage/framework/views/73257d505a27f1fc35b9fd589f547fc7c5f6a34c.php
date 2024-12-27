<div>
    <style>
        .img1Promocion {
            width: 100%;
            height: 100%;
        }
        .img2Promocion {
            width: 100%;
            height: 100%;
        }
        .cuadro1Promocion{
            width: 100%;
            height: 400px;
        }
        .cuadro2Promocion{
            width: 100%;
            height: 200px;
        }
    </style>
    <div class="row">
        <div class="col-md-7">
            <div class="bg-secundary cuadro1Promocion p-2">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="/viewdetails/<?php echo e($promocionFirst->comercio_id); ?>/<?php echo e($promocionFirst->product_id); ?>"><img class="img1Promocion" src="<?php echo e($promocionFirst->avatar_url); ?>" alt="0  slide"></a>
                        </div>
                        <?php $__currentLoopData = $promociones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $promocion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item">
                            <a href="/viewdetails/<?php echo e($promocion->comercio_id); ?>/<?php echo e($promocion->product_id); ?>"><img class="img1Promocion" src="<?php echo e($promocion->avatar_url); ?>" alt="<?php echo e($clave); ?> slide"></a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previo</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Proximo</span>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-secundary cuadro2Promocion p-2">
                        <a href="/viewdetails/2/1"><img class="img2Promocion" src="/img/promociones/panaderia_expreso_derecha1_compressed.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-secundary cuadro2Promocion p-2">
                        <a href="viewdetails/2/2"><img class="img2Promocion" src="/img/promociones/panaderia_expreso_derecha2_compressed.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/promociones.blade.php ENDPATH**/ ?>