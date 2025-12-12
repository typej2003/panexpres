<div>
    <div class="row">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cliente.datos-facturacion-cliente', ['nropedido' => $nropedido])->html();
} elseif ($_instance->childHasBeenRendered('l362791738-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l362791738-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l362791738-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l362791738-0');
} else {
    $response = \Livewire\Livewire::mount('cliente.datos-facturacion-cliente', ['nropedido' => $nropedido]);
    $html = $response->html();
    $_instance->logRenderedChild('l362791738-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/afiliado/shipping-envio.blade.php ENDPATH**/ ?>