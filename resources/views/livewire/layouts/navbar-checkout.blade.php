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
    <a class="navbar-brand" href="/"><img class="logo-responsive" style=" width: 265px !important; " src="{{ $comercio->avatar_url }}" alt=""></a>
    <div>
      @livewire('components.currency')
    </div>
  </div>
</nav>