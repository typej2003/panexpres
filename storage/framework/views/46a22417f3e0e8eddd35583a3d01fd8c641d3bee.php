<div>
    
<div class="container row">
    <div class="col-md-12 col-12">
        <form wire:submit.prevent="sendSms">
            <div class="mb-3">
                <label for="to" class="form-label">Número de Teléfono</label>
                <input wire:model="to" type="text" class="form-control <?php $__errorArgs = ['to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="to" placeholder="+1234567890">
                <?php $__errorArgs = ['to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea wire:model="message" class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="message" rows="4"></textarea>
                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn btn-primary">Enviar SMS</button>
            
            <?php if($status): ?>
                <div class="alert <?php echo e($status == 'success' ? 'alert-success' : 'alert-danger'); ?> mt-4" role="alert">
                    <?php if($status == 'success'): ?>
                        ¡SMS enviado con éxito!
                    <?php else: ?>
                        Error al enviar el SMS. Por favor, inténtelo de nuevo.
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>
</div><?php /**PATH /home/typej/Documentos/laravel/panexpres/resources/views/livewire/notificacion/sms-sender.blade.php ENDPATH**/ ?>