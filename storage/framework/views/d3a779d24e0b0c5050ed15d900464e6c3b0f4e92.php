<div class="container-fluid">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style-welcome.css">

    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <link rel="stylesheet" href="/css/star.css">

    <div class="row my-2">
        <div class="col-md-12">
        <a href="/"><h6><i class="fa fa-solid fa-arrow-left"></i> Continuar con la compra</h6></a>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-8">
            <table class="table table-reponsive">
                <thead class="thead-primary">
                    <tr style="font-size: 12px">                      
                        <th scope="col"></th>
                        <th scope="col">Comercio</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $cartCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <tbody>
                    <tr style="font-size: 12px">
                        <td>
                            <img src="<?php echo e($item->attributes->image); ?>" class="img-thumbnail" width="80" height="80">                                        
                        </td>
                        <td><strong><?php echo e($item->attributes->comercio_id); ?></strong></td>
                        <td><strong><?php echo e($item->name); ?></strong></td>
                        <td><?php echo e($item->price); ?> USD</td>
                        <td>
                            <div class="col-md-12 d-flex justify-content-between">
                            <div class="input-group input-number-group">
                                    <div class="input-group-button">
                                        <span class="input-number-decrement" wire:click.prevent="updateQuantity(<?php echo e($item->id); ?>, <?php echo e($item->quantity); ?>, '-' )">-</span>
                                    </div>
                                    <input class="input-number" type="number" value="<?php echo e($item->quantity); ?>" min="0" max="1000">
                                    <div class="input-group-button">
                                        <span class="input-number-increment" wire:click.prevent="updateQuantity(<?php echo e($item->id); ?>, <?php echo e($item->quantity); ?>, '+' )">+</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><?php echo e(\Cart::get($item->id)->getPriceSum()); ?> USD </td>
                        <td>
                            <form action="<?php echo e(route('cart.remove')); ?>"   method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" value="<?php echo e($item->id); ?>" id="id" name="id">
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php if(\Cart::getTotalQuantity()>0): ?>
                <h6><?php echo e(\Cart::getTotalQuantity()); ?> Producto(s) en el carrito</h6><br>
            <?php else: ?>
                <h6>No Existen Productos en el Carrito de Compra</h6><br>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-6">
                <?php if(count($cartCollection)>0): ?>
                    <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <button class="btn-danger">
                        Vaciar Carrito
                    </button> 
                    </form>
                <?php endif; ?>         
                </div>
            </div>                
        </div>
        <div class="col-md-4">
        <div>Su pedido (cant: <?php echo e(count($listpedidos)); ?>)</div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Precio total artículos</th>
                        <!-- <th scope="col"><?php echo e($currencyValue); ?> <?php echo e($this->getSubTotal()); ?></th> -->
                         <th scope="col"><?php echo e($currencyValue); ?> <?php echo e($this->getTotal()); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-none">
                        <th scope="row">Impuestos</th>
                        <td><?php echo e($currencyValue); ?> <?php echo e($this->getImpuestoIVA()); ?></td>
                    </tr>
                    <?php if($currencyValue == '$'): ?>
                    <tr class="d-none">
                        <th scope="row">IGTF</th>
                        <td><?php echo e($currencyValue); ?> <?php echo e($this->amountIGTF()); ?></td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <th scope="row">Total</th>
                        <td><?php echo e($currencyValue); ?> <?php echo e($this->getTotal()); ?></td>
                    </tr>
                    <tr>
                        <th scope="row" colspan = "2">
                            <?php if(count($cartCollection)>0): ?>
                                <?php if(auth()->guard()->check()): ?>
                                <button wire:click.prevent="finalizarCompra" class="form-control btn btn-success">Comprar</button>
                                <?php else: ?>
                                <div class="row">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h4 class="accordion-header" id="headingOne">
                                                <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <strong>¿Ya Eres Usuario? </strong> 
                                                </a>
                                            </h4>
                                            <div id="collapseOne" class="accordion-collapse collapse <?php $__errorArgs = ['showLogin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> show <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <br>Nos gustaria que Colocaras tus credenciales
                                                    <br>
                                                    <form action="<?php echo e(route('autenticar')); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="group-control">
                                                            <label class="text-bold Text-Uppercase" for="">Inicia Sesión</label>
                                                        </div>
                                                        <div class="group-control my-3 d-none">
                                                            <a class="form-control text-center" href="/login-google"><i class="fa fa-brands fa-google"></i> Iniciar con Google</a>
                                                        </div>
                                                        
                                                        <div class="form-group my-3">
                                                            <div class="row" >
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <label for="email">Correo Electrónico</label>
                                                                    <input type="email" name="email" class="form-control inputForm" placeholder="Correo Electrónico" id="emailW">
                                                                </div>
                                                            </div>
                                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                
                                                        <div class="form-group my-3">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <label for="password">Contraseña</label>
                                                                    <input type="password" name="password" id="password-fieldW" class="form-control inputForm" placeholder="Contraseña" value="12345678"/>
                                                                </div>
                                                            </div>                
                                                        </div>          
                                                        
                                                        <div class="form-group">
                                                            <div class="row my-3">
                                                                <div class="col-xs-12 col-sm-12 col-md-12 d-flex">
                                                                    <button class="btn btn-app w-100 mx-auto">Iniciar Sesión</button>
                                                                </div>
                                                            </div>                
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h4 class="accordion-header" id="headingThree">
                                                <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <strong>¿Aún no tienes cuenta? </strong> 
                                                </a>
                                            </h4>
                                            <div id="collapseThree" class="accordion-collapse collapse <?php $__errorArgs = ['showRegister'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> show <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <form action="<?php echo e(route('registrarse')); ?>" method="post">           
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" value="cliente" id="role" name="role" value="<?php echo e(old('role')); ?>">

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-6 col-md-4 col-sm-4 col-4">
                                                                    <label for="identificationNac">Nac </label>
                                                                    <select class="form-control <?php $__errorArgs = ['identificationNac'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="identificationNac" id="identificationNac" placeholder="Tipo" value="<?php echo e(old('identificationNac')); ?>">
                                                                        <option value="J">J-</option>
                                                                        <option value="E">E-</option>
                                                                        <option value="G">G-</option>
                                                                        <option value="P">P-</option>
                                                                        <option value="V" selected>V-</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-6 col-md-8 col=sm-8 col-8">
                                                                    <label for="identificationNumber">Documento</label>
                                                                    <input type="text" class="form-control <?php $__errorArgs = ['identificationNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="identificationNumber" id="identificationNumber" placeholder="Documento" value="<?php echo e(old('identificationNumber')); ?>">
                                                                </div>
                                                                <?php $__errorArgs = ['identificationNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>                            
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name">Usuario <span class="text-danger">*</span></label>
                                                            <div class="input-group mb-3">                
                                                                <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Usuario" value="<?php echo e(old('name')); ?>">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-envelope"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="names">Nombres <span class="text-danger">*</span></label>
                                                            <div class="input-group mb-3">                
                                                                <input type="text" name="names" class="form-control" placeholder="Nombre completo" value="<?php echo e(old('names')); ?>">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-envelope"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $__errorArgs = ['names'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="surnames">Apellidos <span class="text-danger">*</span></label>
                                                            <div class="input-group mb-3">                
                                                                <input type="text" name="surnames" class="form-control" placeholder="Apellidos" value="<?php echo e(old('surnames')); ?>">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-envelope"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $__errorArgs = ['surnames'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="documento">Email <span class="text-danger">*</span></label>            
                                                            <div class="input-group mb-3">
                                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo e(old('email')); ?>">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-envelope"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="documento">Contraseña <span class="text-danger">*</span></label>            
                                                            <div class="input-group mb-3">
                                                                <input type="password" name="password" class="form-control" placeholder="Password" value="12345678" value="<?php echo e(old('password')); ?>">
                                                                <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                        <span class="fas fa-lock"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="documento">Repita la contraseña <span class="text-danger">*</span></label>        
                                                            <div class="input-group mb-3">
                                                                <input type="password" name="password_confirmation" class="form-control" placeholder="password confirmation" value="12345678">
                                                                <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                        <span class="fas fa-lock"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="documento">Teléfono </label>        
                                                            <div class="row ">
                                                                <div class="col-xs-6 col-md-5 col-sm-4 col-4">
                                                                    <select class="form-control <?php $__errorArgs = ['cellphone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cellphonecode" id="cellphonecode" value="<?php echo e(old('cellphonecode')); ?>"> 
                                                                        <option value="0">Seleccione</option>
                                                                        <option value="0412">0412</option>
                                                                        <option value="0414">0414</option>
                                                                        <option value="0424">0424</option>
                                                                        <option value="0416">0416</option>
                                                                        <option value="0426">0426</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-6 col-md-7 col-sm-8 col-8">
                                                                    <input type="text" class="form-control <?php $__errorArgs = ['cellphone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cellphone" id="cellphone" value="<?php echo e(old('cellphone')); ?>">
                                                                </div>
                                                            </div>   
                                                            <?php $__errorArgs = ['cellphonecode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                                                            <?php $__errorArgs = ['cellphone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>            
                                                        </div>

                                                        <div class="form-group my-3 d-flex">
                                                            <button type="submit" class="btn btn-app mx-auto"><span class="fas fa-user-plus"></span>Unete</button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </th>
                    </tr>
                </tbody>
            </table>            
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.show-recommended', [
                    'comercioId' => 1, 
                    'parametro' => $words,
                    'manufacturer_id' => $manufacturer_id,
                    'modelo_id' => $modelo_id,
                    'motor_id' => $motor_id,
                    ])->html();
} elseif ($_instance->childHasBeenRendered('l1868178478-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1868178478-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1868178478-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1868178478-0');
} else {
    $response = \Livewire\Livewire::mount('components.show-recommended', [
                    'comercioId' => 1, 
                    'parametro' => $words,
                    'manufacturer_id' => $manufacturer_id,
                    'modelo_id' => $modelo_id,
                    'motor_id' => $motor_id,
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('l1868178478-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    
    <script>
        $('.input-number-increment').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val + 1);
        });

        $('.input-number-decrement').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        if(val > 0)
            $input.val(val - 1);
        })

    </script>

    
</div><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/cart/cart1.blade.php ENDPATH**/ ?>