<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PanExprés</title>
    <meta name="description" content="Compra y vende Pan de Jamón y Combos Navideños Caracas">
    <meta name="keywords" content="vende, compra, Pan, Jamón, Pan de Jamón, Combos Navideños, Caracas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="x-icon" href="/img/panexpres_logo.png.png" />

    <!-- Bootstrap CSS -->
	    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
        <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->	    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/showProducts.css">    
    
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>


</head>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="/js/jquery-3.6.4.min.js"></script> -->
    
    <body class="hold-transition sidebar-mini <?php echo e(setting('sidebar_collapse') ? 'sidebar-collapse' : ''); ?>">
    <div class="wrapper">
    <?php if(auth()->guard()->check()): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-in')->html();
} elseif ($_instance->childHasBeenRendered('g00kMPN')) {
    $componentId = $_instance->getRenderedChildComponentId('g00kMPN');
    $componentTag = $_instance->getRenderedChildComponentTagName('g00kMPN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('g00kMPN');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-in');
    $html = $response->html();
    $_instance->logRenderedChild('g00kMPN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
         <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php echo $__env->make('layouts.partials.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo e($slot); ?>

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.footer')->html();
} elseif ($_instance->childHasBeenRendered('ilQ4kC3')) {
    $componentId = $_instance->getRenderedChildComponentId('ilQ4kC3');
    $componentTag = $_instance->getRenderedChildComponentTagName('ilQ4kC3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ilQ4kC3');
} else {
    $response = \Livewire\Livewire::mount('layouts.footer');
    $html = $response->html();
    $_instance->logRenderedChild('ilQ4kC3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    </body>

    <!-- ./wrapper -->
    <?php endif; ?>
    

</html>


<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>
<!-- <script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.6.4.min.js"></script> -->
<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldPushContent('before-livewire-scripts'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('after-livewire-scripts'); ?>

<?php echo $__env->yieldPushContent('alpine-plugins'); ?>
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> -->



<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/layouts/app.blade.php ENDPATH**/ ?>