<div>
    <div class="row">
        <div class="col-md-12">
            <h4>Centro de distribución</h4>
        </div>
    </div>
    <hr>
    
    <div class="row">
        <div class="col-md-12">
            <div class="row border border-1 my-1">
                <div class="col-md-8">
                    <?php echo e($comercio->name); ?>

                    <br>
                    <?php echo e($comercio->address); ?>

                    <br>
                    <?php echo e($comercio->contactphone); ?> <?php echo e($comercio->cellphonecontact); ?>

                    <br>
                    <?php echo e($comercio->horario); ?>

                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <button class="btn btn-secondary form-control w-50" href="" wire:click.prevent="selectComercio(<?php echo e($comercio); ?>)">
                        Entregar aquí
                    </button>
                </div>
            </div>
            <?php $__empty_1 = true; $__currentLoopData = $centrosmodal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $centro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="row border border-1 my-1">
                    <div class="col-md-8">
                        <?php echo e($centro->address); ?>

                        <br>
                        <?php echo e($centro->contactphone); ?>

                        <br>
                        <?php echo e($centro->horario); ?>

                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <button class="btn btn-secondary form-control w-50" href="" wire:click.prevent="selectCentro(<?php echo e($centro); ?>)">
                            Entregar aquí
                        </button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="row">
                <div class="col-md-12">
                    <p class="mt-2">No se encontro resultados</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row centrar <?php echo e($class); ?> ">
        <div class="col-md-6">
            <?php echo $infocentro; ?> 
        </div>
        <div class="col-md-6">
            <form class="formPickup" action="" method="get">
                <?php echo csrf_field(); ?>
                <input wire:model.defer="state.metodoentrega" type="hidden" name="metodoentrega" id="metodoentrega" >
                <input wire:model.defer="state.nropedido" type="hidden" name="nropedido" id="nropedido" >
                <button class='btn btn-success <?php echo e($class); ?>' wire:click.prevent="siguientePickup">Siguiente</button>
            </form>
        </div>
        <script>
            window.addEventListener('enviarFormularioPickup', function (event) {            
                let form = document.querySelector('.formPickup');            
                form.submit();        
            });
        </script>
    </div>

</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/afiliado/shipping-centrodistribucion.blade.php ENDPATH**/ ?>