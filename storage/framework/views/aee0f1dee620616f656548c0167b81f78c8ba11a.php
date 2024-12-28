<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-checkout')->html();
} elseif ($_instance->childHasBeenRendered('DDa4pcc')) {
    $componentId = $_instance->getRenderedChildComponentId('DDa4pcc');
    $componentTag = $_instance->getRenderedChildComponentTagName('DDa4pcc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DDa4pcc');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-checkout');
    $html = $response->html();
    $_instance->logRenderedChild('DDa4pcc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<div class="container-fluid">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('afiliado.shipping', ['nropedido' => $nropedido])->html();
} elseif ($_instance->childHasBeenRendered('LC2RDI2')) {
    $componentId = $_instance->getRenderedChildComponentId('LC2RDI2');
    $componentTag = $_instance->getRenderedChildComponentTagName('LC2RDI2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LC2RDI2');
} else {
    $response = \Livewire\Livewire::mount('afiliado.shipping', ['nropedido' => $nropedido]);
    $html = $response->html();
    $_instance->logRenderedChild('LC2RDI2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/externalviews/checkout.blade.php ENDPATH**/ ?>