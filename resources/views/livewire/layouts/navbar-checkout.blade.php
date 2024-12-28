<!-- As a link -->
 <style>
    .fondo{
      height: 20vh;
      background-image: url('/img/panexpres_banner_2-compressed.jpg') !important;
      background-size: 100vw auto !important;
      background-repeat: no-repeat;
    }   

    .negrita {
      font-weight: 900;
    }
    
 </style>
<nav class="navbar navbar-light bg-light fondo" >
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="/"><img class="logo-responsive" style=" width: 265px !important; " src="{{ $comercio->avatar_url }}" alt=""></a>
  </div>
</nav>
<div class="row">
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item negrita">@livewire('components.currency')</li>
        </ol>
    </div>
</div>