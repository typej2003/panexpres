<div class="marcas-productos border border-1">
    <div class="d-flex justify-content-evenly">
        <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="/searchM" method="get">
                <?php echo csrf_field(); ?>
                <button class="border border-0" type="submit"><img src="<?php echo e($manufacturer->avatar_url); ?>" style="width: 100%;" alt=""></button>
                <input type="hidden" name="words" value="<?php echo e($manufacturer->name); ?>">
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/marcas-productos.blade.php ENDPATH**/ ?>