
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e(setting('site_title')); ?> | <?php echo e(setting('site_name')); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- icheck bootstrap -->
  <!-- Theme style -->
  
  <link rel="stylesheet" href="/css/style-welcome.css">
  
</head>
<body>
  <div class="container-fluid d-flex ">
    <div class="card mx-auto my-3" style="width: 36rem !important;">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 titulo c-a text-center">
                    <a href="/"><img class="logo-login-register mx-auto " src="/img/panexpres_banner.png" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 titulo c-a text-center">
                    <p class="text-center textoreg">¿Todavía no te has registrado? <span><a href="/register" class="c-n">Crea tu cuenta Aquí</a></span></p>
                </div>
            </div>
    
            <form action="<?php echo e(route('autenticar')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <div class="row mx-auto">
                        <div class="col-xs-6 col-md-4 col-sm-4 col-4">
                            <label for="identificationNac">Tipo </label>
                            <select class="form-control <?php $__errorArgs = ['identificationNac'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="identificationNac" id="identificationNac" placeholder="Tipo">
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
unset($__errorArgs, $__bag); ?>" name="identificationNumber" id="identificationNumber" placeholder="Documento">
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
                        
                <div class="form-group my-2">
                    <div class="row mx-auto" >
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
        
                <div class="form-group my-2">
                    <div class="row mx-auto">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password-fieldW" class="form-control inputForm" placeholder="Contraseña" value="12345678"/>
                        </div>
                    </div>                
                </div>          
                
                <div class="form-group">
                    <div class="row mx-auto my-3">
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex">
                            <button class="btn btn-app w-100 mx-auto">Iniciar Sesión</button>
                        </div>
                    </div>                
                </div>
                <p class="text-center c-a texto"><a href="#">¿Olvidé mi contraseña?</a></p>
                
            </form>
        </div>
    </div>
</div>   
  <!-- /.card -->

<!-- jQuery -->
<script src="<?php echo e(asset('backend/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('backend/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/auth/login.blade.php ENDPATH**/ ?>