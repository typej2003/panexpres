<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><i class="fa fa-regular fa-envelope"></i> Notificaciones</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="/listComercios/<?php echo e($comercio->id); ?>">Notificaciones</a></li>
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
                        <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Nueva Notificación</button>
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
                                            Medio
                                            <span wire:click="sortBy('medio')" class="float-right text-sm" style="cursor: pointer;">
                                                <i class="fa fa-arrow-up <?php echo e($sortColumnName === 'medio' && $sortDirection === 'asc' ? '' : 'text-muted'); ?>"></i>
                                                <i class="fa fa-arrow-down <?php echo e($sortColumnName === 'medio' && $sortDirection === 'desc' ? '' : 'text-muted'); ?>"></i>
                                            </span>
                                        </th>
                                        <th scope="col">
                                            Notificación
                                            <span wire:click="sortBy('title')" class="float-right text-sm" style="cursor: pointer;">
                                                <i class="fa fa-arrow-up <?php echo e($sortColumnName === 'title' && $sortDirection === 'asc' ? '' : 'text-muted'); ?>"></i>
                                                <i class="fa fa-arrow-down <?php echo e($sortColumnName === 'title' && $sortDirection === 'desc' ? '' : 'text-muted'); ?>"></i>
                                            </span>
                                        </th>
                                        <th scope="col">Adjunto</th>
                                        <th scope="col">Comercio</th>
                                        <th scope="col">Nro Clientes</th>
                                        <th scope="col">Nro Envios</th>
                                        <th scope="col">Fecha de Registro</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody wire:loading.class="text-muted">
                                    <?php $__empty_1 = true; $__currentLoopData = $notificaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $notificacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($notificaciones->firstItem() + $index); ?></th>
                                        <td><?php echo e($notificacion->title); ?></td>
                                        <td><?php echo e($notificacion->medio); ?></td>
                                        <td><?php echo e($notificacion->adjunto); ?></td>
                                        <td><?php echo e($notificacion->comercio->name); ?></td>
                                        <td><?php echo e($notificacion->nroclientes()); ?></td>
                                        <td><?php echo e($notificacion->nrosends); ?></td>
                                        <td><?php echo e($notificacion->created_at ?? 'N/A'); ?></td>
                                        <td>
                                            <a href="" wire:click.prevent="sendNotificacion(<?php echo e($notificacion); ?>)">
                                                <img class="mr-2" style="width: 25px;" src="/img/icon-send.png" alt="">
                                            </a>
                                            <a href="" wire:click.prevent="edit(<?php echo e($notificacion); ?>)">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>

                                            <a href="" wire:click.prevent="confirmNotificacionRemoval(<?php echo e($notificacion->id); ?>)">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr class="text-center">
                                        <td colspan="8">
                                            <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/v2/assets/empty.svg" alt="No results found" style="width: 150px;">
                                            <p class="mt-2">No se encontro resultado</p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <?php echo e($notificaciones->links()); ?>

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
            <!-- <form autocomplete="off" wire:submit.prevent="<?php echo e($showEditModal ? 'updateNotificacion' : 'createNotificacion'); ?>"> -->
            <form wire:submit.prevent="saveNotificacion" method="POST"   enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <?php if($showEditModal): ?>
                            <span>Editar Notificación</span>
                            <?php else: ?>
                            <span>Nuevo Notificación</span>
                            <?php endif; ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="medio">Medio</label>
                            <select wire:model.defer="state.medio" id="medio" autofocus class="form-control <?php $__errorArgs = ['medio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="0">Seleccione</option>
                                <option value="sms">Sms</option>
                                <option value="email">Email</option>
                                <option value="whatsapp">Whatsapp</option>
                            </select>
                            <?php $__errorArgs = ['medio'];
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
                            <script>
                            let select = document.querySelector('#medio')
                            select.addEventListener('change', function(event){
                                var selectElement = event.target.value;
                                let file = document.querySelector('.file')
                                if(selectElement !== 'sms' && selectElement !== '0'){
                                    file.classList.remove("d-none");
                                    window.livewire.find('<?php echo e($_instance->id); ?>').d_none = ''
                                }else{
                                    file.classList.add("d-none");
                                    window.livewire.find('<?php echo e($_instance->id); ?>').d_none = 'd-none'
                                }                                
                            })
                        </script>
                        </div>

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" wire:model.defer="state.title" id="title" autofocus class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['title'];
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
                            <label for="content">Contenido</label>
                            <textarea wire:model.defer="state.content" id="content" autofocus class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></textarea>
                            <?php $__errorArgs = ['content'];
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

                        <div class="form-group <?php echo e($d_none); ?> file">
                                                           
                                <div class="form-group <?php echo e($d_none); ?> file">
                                    <label for="customFile">Archivo </label>
                                    <input wire:model="file" type="file" class="form-control" id="file" name="file">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">
                                        <?php if($showEditModal): ?>
                                        <span>Guardar Cambios</span>
                                        <?php else: ?>
                                        <span>Guardar</span>
                                        <?php endif; ?>
                                    </button>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                        <button type="submit" class="btn btn-app"><i class="fa fa-save mr-1"></i>
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
                <div class="modal-header text-white" >
                    <h5>Eliminar Notificación</h5>
                </div>

                <div class="modal-body">
                    <h4>Esta usted seguro de querer eliminar esta Notificación?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    <button type="button" wire:click.prevent="deleteNotificacion" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Eliminar Notificación</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/notificacion/list-notificaciones.blade.php ENDPATH**/ ?>