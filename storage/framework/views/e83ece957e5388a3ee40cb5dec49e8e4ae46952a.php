<div>
 <style>
    .navbar {      
      background-image: url('/img/panexpres_banner_2-compressed.jpg') !important;
      background-size: 100vw auto !important;
      background-repeat: no-repeat;
      height: 200px !important;
    }   

    .negrita {
      font-weight: 900;
    }

    @media  only screen and (max-width: 1070px) {
      
    }
    
 </style>
<nav class="navbar navbar-light bg-light fondo" >
  <div class="d-flex justify-content-between">
    <a class="navbar-brand" href="/"><img class="logo-responsive" style=" width: 265px !important; " src="<?php echo e($comercio->avatar_url); ?>" alt=""></a>
  </div>
</nav>
<div class="row">
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item negrita"> Divisa <?php
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
?></li>
        </ol>
    </div>
</div>
</div><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/layouts/navbar-checkout.blade.php ENDPATH**/ ?>