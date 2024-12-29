<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-checkout')->html();
} elseif ($_instance->childHasBeenRendered('nRDJenD')) {
    $componentId = $_instance->getRenderedChildComponentId('nRDJenD');
    $componentTag = $_instance->getRenderedChildComponentTagName('nRDJenD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nRDJenD');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-checkout');
    $html = $response->html();
    $_instance->logRenderedChild('nRDJenD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<div class="container-fluid">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('afiliado.shipping', ['nropedido' => $nropedido])->html();
} elseif ($_instance->childHasBeenRendered('0Ib30P0')) {
    $componentId = $_instance->getRenderedChildComponentId('0Ib30P0');
    $componentTag = $_instance->getRenderedChildComponentTagName('0Ib30P0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0Ib30P0');
} else {
    $response = \Livewire\Livewire::mount('afiliado.shipping', ['nropedido' => $nropedido]);
    $html = $response->html();
    $_instance->logRenderedChild('0Ib30P0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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