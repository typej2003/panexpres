<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Productos</h1>
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

    <div class="row">
        <div class="col-md-6">
            
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?php if($user): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card w-50">
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Propietario: </span>
                            </div>
                            <div class="col-lg-6">
                                <span><?php echo e($user->name); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Operación No Confirmada: </span>
                            </div>
                            <div class="col-lg-6">
                                <span><?php echo e($user->OperacionNoConfirmada()); ?></span>
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
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between mb-2">
                        <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Nuevo Producto</button>
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
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">
                                            Nombre
                                            <span wire:click="sortBy('name')" class="float-right text-sm" style="cursor: pointer;">
                                                <i class="fa fa-arrow-up <?php echo e($sortColumnName === 'name' && $sortDirection === 'asc' ? '' : 'text-muted'); ?>"></i>
                                                <i class="fa fa-arrow-down <?php echo e($sortColumnName === 'name' && $sortDirection === 'desc' ? '' : 'text-muted'); ?>"></i>
                                            </span>
                                        </th>
                                        <th scope="col">Categorias</th>
                                        <th scope="col">SubCategorias</th>
                                        <th scope="col">Fecha de Registro</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody wire:loading.class="text-muted">
                                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($products->firstItem() + $index); ?></th>
                                        <td>
                                            <img src="<?php echo e($product->image1_url); ?>" style="width: 50px;" class="img img-circle mr-1" alt="">
                                            <?php echo e($product->name); ?>

                                        </td>
                                        <td><?php echo e($product->category_id); ?></td>
                                        <td>
                                            <a wire:click.prevent="addNewCategory(<?php echo e($product->id); ?>)" style="cursor:pointer" ><i class="fa fa-plus-circle mr-1"></i> Nueva Categoria</a>
                                            <ul>
                                            <?php $__currentLoopData = $product->showSubcategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="d-flex justify-content-between">
                                                    <div class="mx-2"><?php echo e($categorias->subcategory()->name); ?></div>
                                                    <a href="" wire:click.prevent="confirmProductCategories(<?php echo e($categorias->id); ?>)">
                                                        <i class="fa fa-trash text-danger"></i>
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </td>
                                        <td><?php echo e($product->created_at->toFormattedDate() ?? 'N/A'); ?></td>
                                        <td>
                                            <a href="" wire:click.prevent="edit(<?php echo e($product->id); ?>)">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>

                                            <a href="" wire:click.prevent="confirmProductRemoval(<?php echo e($product->id); ?>)">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr class="text-center">
                                        <td colspan="5">
                                            <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/v2/assets/empty.svg" alt="No results found">
                                            <p class="mt-2">No se encontro resultados</p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <?php echo e($products->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal Product -->
    <!-- Modal -->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form autocomplete="off" wire:submit.prevent="<?php echo e($showEditModal ? 'updateProduct' : 'createProduct'); ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <?php if($showEditModal): ?>
                            <span>Editar Producto</span>
                            <?php else: ?>
                            <span>Nuevo Producto</span>
                            <?php endif; ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="name">Categoría</label>
                            <select wire:model.defer="state.category_id" class="form-control <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="category_id" wire:change="changeCategory( $event.target.value, 0)">
                                <option value="0">Seleccione una opción</option>
                                <?php $__currentLoopData = $comercio->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['category_id'];
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
                            <label for="name">Subcategoría</label>
                            <select wire:model.defer="state.subcategory_id" class="subcategory form-control <?php $__errorArgs = ['subcategory_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="subcategory_id" wire:ignore>
                            </select>
                            <?php $__errorArgs = ['subcategory_id'];
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
                            <label for="name">Nombre</label>
                            <input type="text" wire:model.defer="state.name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" aria-describedby="nameHelp" placeholder="Enter full name">
                            <?php $__errorArgs = ['name'];
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
                            <label for="customFile">Imagen del Producto</label>
                            <div class="custom-file">
                                <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <input wire:model="photo" type="file" class="custom-file-input" id="customFile">
                                    <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded">
                                        <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                            <span class="sr-only">40% Completo (exito)</span>
                                        </div>
                                    </div>
                                </div>
                                <label class="custom-file-label" for="customFile">
                                    <?php if($photo): ?>
                                    <?php echo e($photo->getClientOriginalName()); ?>

                                    <?php else: ?>
                                    Seleccione la imagen
                                    <?php endif; ?>
                                </label>
                            </div>

                            <?php if($photo): ?>
                            <img src="<?php echo e($photo->temporaryUrl()); ?>" class="img d-block mt-2 w-100 rounded">
                            <?php else: ?>
                            <img src="<?php echo e($state['image1_url'] ?? ''); ?>" class="img d-block mb-2 w-100 rounded">
                            <?php endif; ?>
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
                <div class="modal-header">
                    <h5>Eliminar Producto</h5>
                </div>

                <div class="modal-body">
                    <h4>Esta seguro de querer eliminar este producto?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    <button type="button" wire:click.prevent="deleteProduct" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Eliminar Producto</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Category -->
    <!-- Modal -->
    <div class="modal fade" id="formCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form autocomplete="off" wire:submit.prevent="<?php echo e($showEditModal ? 'updateCategories' : 'createCategories'); ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <?php if($showEditModal): ?>
                            <span>Editar Category</span>
                            <?php else: ?>
                            <span>Nueva Categoria</span>
                            <?php endif; ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="category">Categoría</label>
                            <select wire:model="category" class="form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="0">Seleccione una opción</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['category'];
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
                            <label for="subcategoryP_id">Subcategoría</label>
                            <select wire:model="subcategory" class="subcategoryP form-control <?php $__errorArgs = ['subcategoryP_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                                <?php if($subcategories->count() == 0 ): ?>    
                                    <option value="0">Seleccione una opción</option>
                                <?php else: ?>
                                <option value="0">Seleccione una opción</option>
                                <?php endif; ?>
                                <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($subcategory->id); ?>"><?php echo e($subcategory->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['subcategoryP_id'];
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
    <div class="modal fade" id="confirmationModalformCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Eliminar Producto</h5>
                </div>

                <div class="modal-body">
                    <h4>Esta seguro de querer eliminar esta categoria?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    <button type="button" wire:click.prevent="deleteProductCategories" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Eliminar Producto</button>
                </div>
            </div>
        </div>
    </div>


    <script>

        window.onpageshow = function() {
        
            window.addEventListener('sendSubcategories', event => {
                
                let subcategories = event.detail.subcategories

                let subcategory = event.detail.subcategory

                let msg = event.detail.msg

                let select = document.querySelector('.subcategory')
                
                select.innerHTML = ''

                var option = `<option value="0">${msg}</option>`
                
                subcategories.forEach(function(numero) {
                    
                    if(numero['name'] == subcategory){
                        option += `<option value="${numero['id']}" selected>${numero['name']}</option>`
                    }else{
                        option += `<option value="${numero['id']}">${numero['name']}</option>`
                    }
                    
                });
                
                select.innerHTML = option
            
            }) 

            window.addEventListener('sendSubcategoriesP', event => {
                toastr.success(event.detail.message, 'Success!');
                alert('ok')
                let subcategoriesP = event.detail.subcategoriesP

                let subcategoryP = event.detail.subcategoryP

                let msg = event.detail.msg

                let selectP = document.querySelector('.subcategoryP')
                
                selectP.innerHTML = ''

                var optionP = `<option value="0">${msg}</option>`
                
                subcategoriesP.forEach(function(numero) {
                    
                    if(numero['name'] == subcategoryP){
                        optionP += `<option value="${numero['id']}" selected>${numero['name']}</option>`
                    }else{
                        optionP += `<option value="${numero['id']}">${numero['name']}</option>`
                    }
                    
                });
                
                selectP.innerHTML = optionP
            
            }) 
        }
    </script>

    <script>
        
        window.onpageshow = function() {
            document.addEventListener('livewire:load', () => {
                //Livewire.emit('sendResolution', screen.width);
                window.livewire.find('<?php echo e($_instance->id); ?>').screenResolution = screen.width
            });

            window.addEventListener('show-formCategory', event => {
                
                $('#formCategory').modal('show');
            })

            window.addEventListener('hide-formCategory', event => {
                
                $('#formCategory').modal('hide');
            })

            window.addEventListener('show-delete-modalformCategory', event => {
                $('#confirmationModalformCategory').modal('show');
            })

            window.addEventListener('hide-delete-modalformCategory', event => {
                $('#confirmationModalformCategory').modal('hide');
            })
        }
    </script>

</div>



   
<?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/livewire/afiliado/list-products.blade.php ENDPATH**/ ?>