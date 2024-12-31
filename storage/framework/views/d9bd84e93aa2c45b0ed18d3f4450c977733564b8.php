<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><i class="fa fa-solid fa-file-invoice-dollar"></i> Mis Pedidos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="">Mis Pedidos</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between mb-2">
                        <!-- <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Nuevo Pedido</button> -->
                        <div></div>
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
                                        <th scope="col">Confirmado</th>
                                        <th scope="col">
                                            Pedido
                                            <span wire:click="sortBy('pedido')" class="float-right text-sm" style="cursor: pointer;">
                                                <i class="fa fa-arrow-up <?php echo e($sortColumnName === 'pedido' && $sortDirection === 'asc' ? '' : 'text-muted'); ?>"></i>
                                                <i class="fa fa-arrow-down <?php echo e($sortColumnName === 'pedido' && $sortDirection === 'desc' ? '' : 'text-muted'); ?>"></i>
                                            </span>
                                        </th>
                                        <th scope="col">
                                            Referencia
                                            <span wire:click="sortBy('reference')" class="float-right text-sm" style="cursor: pointer;">
                                                <i class="fa fa-arrow-up <?php echo e($sortColumnName === 'reference' && $sortDirection === 'asc' ? '' : 'text-muted'); ?>"></i>
                                                <i class="fa fa-arrow-down <?php echo e($sortColumnName === 'reference' && $sortDirection === 'desc' ? '' : 'text-muted'); ?>"></i>
                                            </span>
                                        </th>
                                        <th scope="col">Cédula</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Método de Pago</th>
                                        <th scope="col">Costo</th>
                                        <th scope="col">Método de Entrega</th>
                                        <th scope="col">Fecha de Registro</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody wire:loading.class="text-muted">
                                    <?php $__empty_1 = true; $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($pedidos->firstItem() + $index); ?></th>
                                        <td>
                                            <select class="form-control" wire:change="changeConfirmation(<?php echo e($pedido); ?>, $event.target.value)" disabled >
                                                <option value="1" <?php echo e(($pedido->confirmed === 1) ? 'selected' : ''); ?>>CONFIRMADO</option>
                                                <option value="0" <?php echo e(($pedido->confirmed === 0) ? 'selected' : ''); ?>>NO CONFIRMADO</option>
                                            </select>
                                        </td>
                                        <td><a href="/detallespedido/<?php echo e($pedido->nropedido); ?>"><?php echo e($pedido->nropedido); ?></a></td>
                                        <td><?php echo e($pedido->reference); ?></td>
                                        <td><?php echo e($pedido->client->identificationNumber); ?></td>
                                        <td><?php echo e($pedido->client->name); ?></td>
                                        <td><?php echo e($pedido->metodo); ?></td>
                                        <td><?php echo e($pedido->coste); ?> <?php echo e($currencyValue); ?></td>
                                        <td><?php echo e($pedido->metodoentrega); ?></td>
                                        <td><?php echo e($pedido->created_at ?? 'N/A'); ?></td>
                                        <td>
                                            <a href="" wire:click.prevent="sendNotificacion(<?php echo e($pedido); ?>)">
                                                <img class="mr-2" style="width: 25px;" src="/img/icon-send.png" alt="">
                                            </a>

                                            <a href="" wire:click.prevent="edit(<?php echo e($pedido); ?>)">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>

                                            <?php if($pedido->confirmed == 0): ?>
                                            <a href="" wire:click.prevent="confirmPedidoRemoval(<?php echo e($pedido->id); ?>)">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr class="text-center">
                                        <td colspan="9">
                                            <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/v2/assets/empty.svg" alt="No results found" style="width: 150px;">
                                            <p class="mt-2">No se encontro resultado</p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <?php echo e($pedidos->links()); ?>

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
            <form autocomplete="off" wire:submit.prevent="<?php echo e($showEditModal ? 'updatePedido' : 'createPedido'); ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <?php if($showEditModal): ?>
                            <span>Editar Pedido</span>
                            <?php else: ?>
                            <span>Nuevo Pedido</span>
                            <?php endif; ?>
                        </h5>
                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="pedido">Pedido</label>
                            <input type="text" wire:model.defer="state.nropedido" id="pedido" autofocus class="form-control <?php $__errorArgs = ['pedido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" readonly>
                            <?php $__errorArgs = ['pedido'];
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
                            <label for="reference">Referencia</label>
                            <input type="text" wire:model.defer="state.reference" id="reference" autofocus class="form-control <?php $__errorArgs = ['reference'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['reference'];
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
                            <label for="description">Descripción</label>
                            <textarea wire:model.defer="state.description" id="description" autofocus class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" readonly rows="5"></textarea>
                            <?php $__errorArgs = ['description'];
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
                            <label for="coste">Costo (<?php echo e($currencyValue); ?>)</label>
                            <input type="text" wire:model.defer="state.coste" id="coste" autofocus class="form-control <?php $__errorArgs = ['coste'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" readonly>
                            <?php $__errorArgs = ['coste'];
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-switch">
                                        <input wire:model.defer="state.in_delivery" type="checkbox" class="custom-control-input" id="in_delivery" disabled>
                                        <label class="custom-control-label  mx-3" for="in_delivery">Posee Delivery</label>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
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
                    <h5>Eliminar Pedido</h5>
                </div>

                <div class="modal-body">
                    <h4>Esta usted seguro de querer eliminar este Pedido?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    <button type="button" wire:click.prevent="deletePedido" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Eliminar Pedido</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/cliente/list-pedidos-cliente.blade.php ENDPATH**/ ?>