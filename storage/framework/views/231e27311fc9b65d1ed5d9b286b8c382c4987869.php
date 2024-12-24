<div class="marcas-productos border border-1">
    <div class="d-flex justify-content-between">
        <?php $__currentLoopData = $subcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#"><img src="<?php echo e($subcategory->avatar_url); ?>" style="width: 100%;" alt=""></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/marcas-productos.blade.php ENDPATH**/ ?>