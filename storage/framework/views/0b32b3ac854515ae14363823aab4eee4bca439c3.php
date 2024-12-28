<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-checkout')->html();
} elseif ($_instance->childHasBeenRendered('Woq6TU6')) {
    $componentId = $_instance->getRenderedChildComponentId('Woq6TU6');
    $componentTag = $_instance->getRenderedChildComponentTagName('Woq6TU6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Woq6TU6');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-checkout');
    $html = $response->html();
    $_instance->logRenderedChild('Woq6TU6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<div class="container-fluid">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('afiliado.pasarela', ['nropedido' => $nropedido, 'comercioId' => $comercioId])->html();
} elseif ($_instance->childHasBeenRendered('FkUj3m4')) {
    $componentId = $_instance->getRenderedChildComponentId('FkUj3m4');
    $componentTag = $_instance->getRenderedChildComponentTagName('FkUj3m4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FkUj3m4');
} else {
    $response = \Livewire\Livewire::mount('afiliado.pasarela', ['nropedido' => $nropedido, 'comercioId' => $comercioId]);
    $html = $response->html();
    $_instance->logRenderedChild('FkUj3m4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

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
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/externalviews/checkoutpasarela.blade.php ENDPATH**/ ?>