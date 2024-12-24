<div class="navbar navbar-fixed-bottom">
	<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.navigation-map', ['comercio_id' => $comercio_id])->html();
} elseif ($_instance->childHasBeenRendered('l1222314639-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1222314639-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1222314639-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1222314639-0');
} else {
    $response = \Livewire\Livewire::mount('components.navigation-map', ['comercio_id' => $comercio_id]);
    $html = $response->html();
    $_instance->logRenderedChild('l1222314639-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	<div class="footer footer-color">  
		<div class="row">
				<div class="col-12 col-md-3 my-1">
					<span><img class="img-fluid footer-img" style="width: 60%" src="/img/LOGO_DDR.png" alt=""></span>
				</div>
				<div class="col-12 col-md-3 my-1 text-dark">
					<span>COPYRIGHT &copy; <?php echo e(date('Y')); ?> DDR SISTEMAS C.A. RIF: J-31512955-8</span>
					<span>V1.0.0 PV2</span>
				</div>
				<div class="col-12 col-md-6 my-1">
					<span><img class="img-fluid footer-img2" src="/img/LOGO_BANCO.png" alt=""></span>
				</div>
		</div>
	</div>
</div><?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/livewire/layouts/footer.blade.php ENDPATH**/ ?>