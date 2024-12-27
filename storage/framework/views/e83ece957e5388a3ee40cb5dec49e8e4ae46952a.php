<!-- As a link -->
 <style>
    .fondo{
      height: 20vh;
      background-image: url('/img/panexpres_banner_2-compressed.jpg') !important;
      background-size: 100vw auto !important;
      background-repeat: no-repeat;
    }   
    
 </style>
<nav class="navbar navbar-light bg-light fondo" >
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="/"><img class="logo-responsive" style=" width: 265px !important; " src="<?php echo e($comercio->avatar_url); ?>" alt=""></a>
    <div>
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.currency')->html();
} elseif ($_instance->childHasBeenRendered('l3122835723-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3122835723-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3122835723-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3122835723-0');
} else {
    $response = \Livewire\Livewire::mount('components.currency');
    $html = $response->html();
    $_instance->logRenderedChild('l3122835723-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
  </div>
</nav><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/layouts/navbar-checkout.blade.php ENDPATH**/ ?>