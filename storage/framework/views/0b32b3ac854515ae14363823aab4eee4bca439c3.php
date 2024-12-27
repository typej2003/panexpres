<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-checkout')->html();
} elseif ($_instance->childHasBeenRendered('xSB3A3u')) {
    $componentId = $_instance->getRenderedChildComponentId('xSB3A3u');
    $componentTag = $_instance->getRenderedChildComponentTagName('xSB3A3u');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xSB3A3u');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-checkout');
    $html = $response->html();
    $_instance->logRenderedChild('xSB3A3u', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<div class="container-fluid">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('afiliado.pasarela', ['nropedido' => $nropedido, 'comercioId' => $comercioId])->html();
} elseif ($_instance->childHasBeenRendered('WzaAkyE')) {
    $componentId = $_instance->getRenderedChildComponentId('WzaAkyE');
    $componentTag = $_instance->getRenderedChildComponentTagName('WzaAkyE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WzaAkyE');
} else {
    $response = \Livewire\Livewire::mount('afiliado.pasarela', ['nropedido' => $nropedido, 'comercioId' => $comercioId]);
    $html = $response->html();
    $_instance->logRenderedChild('WzaAkyE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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