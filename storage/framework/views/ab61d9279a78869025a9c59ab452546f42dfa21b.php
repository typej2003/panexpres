<div>
    <style>
        
    </style>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="dropdownM">
                        <a class="dropbtnM text-white"><?php echo e($menu->texto); ?></a>
                        <?php if( $menu->origen == 'categories'): ?>
                            <div class="dropdownM-content">
                                <?php if($menu->subcategories() != null): ?>
                                    <?php if($menu->subcategories->count() > 0): ?>
                                        <?php $__currentLoopData = $menu->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <form action="searchMenu" method="post" id="<?php echo e($subcategory->name); ?>">
                                                <?php echo csrf_field(); ?>
                                                <!-- <a href="/searchMenu/<?php echo e($subcategory->name); ?>/<?php echo e($manufacturer_id); ?>/<?php echo e($modelo_id); ?>/<?php echo e($motor_id); ?>"><?php echo e($subcategory->name); ?></a> -->
                                                <input type="hidden" name="words" value="<?php echo e($subcategory->name); ?>">
                                                <input type="hidden" name="manufacturer_id" value="<?php echo e($manufacturer_id); ?>">
                                                <input type="hidden" name="modelo_id" value="<?php echo e($modelo_id); ?>">
                                                <input type="hidden" name="motor_id" value="<?php echo e($motor_id); ?>">
                                                <a href="#" onclick="sendForm('<?php echo e($subcategory->name); ?>')"><?php echo e($subcategory->name); ?></a>
                                            </form>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <script>
                    function sendForm(form)
                    {
                        let formulario = document.getElementById(form)
                        formulario.submit();

                    }
                </script>
        
</div>

<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/menu-component.blade.php ENDPATH**/ ?>