<div>
    <!DOCTYPE html>
    <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5 text-center">
            <h2 class="mb-4">
                Importa Usuarios y Exporta Usuarios Excel & CSV
            </h2>
            <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-4">
                    <div class="custom-file text-left">
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Seleccione el archivo</label>
                        <?php if($errors->any()): ?>
                        <h5 class="text-danger"><?php echo e($errors->first()); ?></h5>
                        <?php endif; ?>
                    </div>
                </div>
                <button class="btn btn-primary">Import Users</button>
                <a class="btn btn-success" href="<?php echo e(route('export-users')); ?>">Exportar Usuarios</a>
            </form>
        </div>
    </body>
    </html>
</div>
<?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/livewire/recursos/import-export-excel.blade.php ENDPATH**/ ?>