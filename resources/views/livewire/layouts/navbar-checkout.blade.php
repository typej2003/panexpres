<!-- As a link -->
 <style>
    .fondo{
      height: 20vh;
      background-image: url('{{ $comercio->banner_url }}') !important;
      background-size: 100vw auto !important;
      background-repeat: no-repeat;
    }   
    
 </style>
<nav class="navbar navbar-light bg-light fondo" >
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="/"><img class="logo-responsive" style=" width: 145px; " src="{{ $comercio->avatar_url }}" alt=""></a>
    <div>
      @livewire('components.currency')
    </div>
  </div>
</nav>