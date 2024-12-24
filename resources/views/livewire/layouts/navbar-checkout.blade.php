<!-- As a link -->
 <style>
    .fondo{
      background-image: url('/img/comercios/RepuestoExpres_banner.png') !important;
      background-size: 100% 140px !important;
      background-repeat: no-repeat;
    }    
 </style>
<nav class="navbar navbar-light bg-light fondo" >
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="/"><img style=" width: 120%; height:120px;" src="{{ $comercio->avatar_url }}" alt=""></a>
    <div>
      @livewire('components.currency')
    </div>
  </div>
</nav>
