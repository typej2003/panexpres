<div>
    <style>
        .font-costo{
            font-size: xx-large; font-weight: bold;
        }
        .font-total{
            font-size: x-large; font-weight: bold;   
        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tasas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="/listComercios/<?php echo e($comercio->id); ?>">Comercios</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <?php if($comercio): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card w-50">
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Propietario: </span>
                            </div>
                            <div class="col-lg-6">
                                <span><?php echo e($comercio->propietario()); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Comercio: </span>
                            </div>
                            <div class="col-lg-6">
                                <span><?php echo e($comercio->name); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Tasa BCV: </span>
                            </div>
                            <div class="col-lg-6">
                                <span><?php echo e($dolar); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between mb-2">
                        <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Nueva Tasa</button>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.search-input','data' => ['wire:model' => 'searchTerm']]); ?>
<?php $component->withName('search-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'searchTerm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                    <div class="card" style="width: 100% !important;">
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">
                                            Tasa
                                            <span wire:click="sortBy('tasa')" class="float-right text-sm" style="cursor: pointer;">
                                                <i class="fa fa-arrow-up <?php echo e($sortColumnName === 'tasa' && $sortDirection === 'asc' ? '' : 'text-muted'); ?>"></i>
                                                <i class="fa fa-arrow-down <?php echo e($sortColumnName === 'tasa' && $sortDirection === 'desc' ? '' : 'text-muted'); ?>"></i>
                                            </span>
                                        </th>
                                        <th scope="col">Fecha de Registro</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">User</th>
                                    </tr>
                                </thead>
                                <tbody wire:loading.class="text-muted">
                                    <?php $__empty_1 = true; $__currentLoopData = $tasas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tasa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($tasas->firstItem() + $index); ?></th>
                                        <td>
                                            <?php echo e($tasa->getTasa()); ?>

                                        </td>
                                        <td><?php echo e($tasa->created_at ?? 'N/A'); ?></td>
                                        <td>
                                            <?php echo e($tasa->getStatus()); ?>

                                        </td>
                                        <td>
                                            <?php echo e($tasa->user_id); ?>

                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr class="text-center">
                                        <td colspan="6">
                                            <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/v2/assets/empty.svg" alt="No results found" style="width: 150px;">
                                            <p class="mt-2">No se encontro resultado</p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <?php echo e($tasas->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form autocomplete="off" wire:submit.prevent="<?php echo e($showEditModal ? 'updateTasa' : 'createTasa'); ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <?php if($showEditModal): ?>
                            <span>Editar Tasa</span>
                            <?php else: ?>
                            <span>Nuevo Tasa</span>
                            <?php endif; ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tasa">Tasa</label>
                            <input type="text" wire:model.defer="state.tasa" autofocus class="form-control <?php $__errorArgs = ['tasa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tasa" min="0" step="0.01" onkeypress="return check(this, event)">
                            <?php $__errorArgs = ['tasa'];
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
                        <?php $__env->startPush('js'); ?>
                        <script>
                            $('#tasa').focus(function(){
                                if(parseFloat($(this).val())==0)
                                {
                                    $('#tasa').val('');
                                }
                            })
                            $('#tasa').blur(function(){
                                if(parseFloat($(this).val())==0||$(this).val()=='')
                                {
                                    $('#tasa').val('0,00');
                                }
                            })
                        </script>
                        <?php $__env->stopPush(); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancel</button>
                        <button type="submit" class="boton"><i class="fa fa-save mr-1"></i>
                            <?php if($showEditModal): ?>
                            <span>Guardar Cambios</span>
                            <?php else: ?>
                            <span>Guardar</span>
                            <?php endif; ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #6C2689;">
                    <h5>Eliminar Tasa</h5>
                </div>

                <div class="modal-body">
                    <h4>Esta usted seguro de querer eliminar esta Tasa?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    <button type="button" wire:click.prevent="deleteTasa" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Eliminar Tasa</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/recursos.js"></script>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/afiliado/list-tasas.blade.php ENDPATH**/ ?>