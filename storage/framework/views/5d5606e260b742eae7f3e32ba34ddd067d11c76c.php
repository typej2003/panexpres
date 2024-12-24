<div>
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">

    <!-- <form autocomplete="off" wire:submit.prevent="searchMotor"> -->
    <form action="<?php echo e(route('searchMotor')); ?>" method="get" wire:ignore.self>
        <?php echo csrf_field(); ?>
        <div class="card w-75 p-1 mx-auto">
            <div class="form-group">
                <label for="manufacturer">Marca</label>
                <select wire:ignore wire:model="manufacturer" name="manufacturer_id" id="manufacturer" class="form-control <?php $__errorArgs = ['manufacturer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php if($manufacturers->count() == 0 ): ?>    
                        <option value="0">Seleccione una opción</option>
                    <?php else: ?>
                    <option value="0">Seleccione una opción</option>
                    <?php endif; ?>
                    <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($manufacturer->id); ?>" selected="false"><?php echo e($manufacturer->name); ?></option>                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <script>
                         $("#manufacturer_id").val("0");
                    </script>
                </select>
                <?php $__errorArgs = ['manufacturer'];
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

            <div class="form-group">
                <label for="modelo">Modelo</label>
                <select wire:model="modelo" name="modelo_id" id="modelo_id" class="modelo form-control <?php $__errorArgs = ['modelo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                    <?php if($modelos->count() == 0 ): ?>    
                        <option value="0">Seleccione una opción</option>
                    <?php else: ?>
                    <option value="0">Seleccione una opción</option>
                    <?php endif; ?>
                    <?php $__currentLoopData = $modelos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($modelo->id); ?>"><?php echo e($modelo->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['modelo'];
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

            <div class="form-group">
                <label for="motor">Motor</label>
                <select wire:model="motor" name="motor_id" id="motor_id" class="motor form-control <?php $__errorArgs = ['motor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php if($motores->count() == 0 ): ?>    
                        <option value="0">Seleccione una opción</option>
                    <?php else: ?>
                    <option value="0">Seleccione una opción</option>
                    <?php endif; ?>
                    <?php $__currentLoopData = $motores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($motor->id); ?>"><?php echo e($motor->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['motor'];
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

            <div class="form-group mx-auto">
                <button type="submit" class="btn-app" id="searchMotor">Buscar</button>
            </div>
        </div>            
    </form>
        </div>
    </div>
    
    <script>
        let manufacturer = document.getElementById('manufacturer');
        let modelo = document.getElementById('modelo_id');
        let motor = document.getElementById('motor_id');

        let searchMotor = document.getElementById('searchMotor');

        searchMotor.addEventListener('click', () =>
        {
            localStorage.setItem('serverManufacturer', manufacturer.value);
            localStorage.setItem('serverModelo', modelo.value);
            localStorage.setItem('serverMotor', motor.value);
        });

        window.addEventListener('DOMContentLoaded', () =>
        {
            let savedServer  = localStorage.getItem('serverManufacturer');

            if (savedServer)
            {                
                modelo_id.value = localStorage.getItem('serverModelo');
                motor_id.value = localStorage.getItem('serverMotor');;
            }
        });

    </script>    
        
</div><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/component-search.blade.php ENDPATH**/ ?>