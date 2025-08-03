<div>
    <form wire:submit.prevent="updateBasicData" class="form-horizontal">
        <div class="form-group">
            <label for="cellphonecode">Teléfono </label>        
            <div class="row ">
                <div class="col-xs-6 col-md-5 col-sm-4 col-4">
                    <select wire:model.defer="state.cellphonecode" class="form-control" name="cellphonecode" id="cellphonecode">
                        <option value="0">Seleccione</option>
                        <option value="0412">0412</option>
                        <option value="0414">0414</option>
                        <option value="0424">0424</option>
                        <option value="0416">0416</option>
                        <option value="0426">0426</option>
                    </select>
                </div>
                <div class="col-xs-6 col-md-7 col-sm-8 col-8">
                    <input wire:model.defer="state.cellphone" type="text" class="form-control" name="cellphone" id="cellphone">
                </div>
            </div>                
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-2 col-form-label">Dirección</label>
            <input wire:model.defer="state.address" type="text" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="inpuAddress" placeholder="Dirección">
            <?php $__errorArgs = ['address'];
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
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-success"><i class="fa fa-save mr-1"></i> Guardar Cambios</button>
            </div>
        </div>
    </form>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/admin/profile/basic-data.blade.php ENDPATH**/ ?>