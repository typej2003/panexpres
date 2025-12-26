
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compra y vende Pan de Jamón y Combos Navideños Caracas">
    <meta name="keywords" content="vende, compra, Pan, Jamón, Pan de Jamón, Combos Navideños, Caracas, directo a tu mesa, @panexpres.vezla, Panexprés, Panexpres">
    <link rel="icon" type="image/png" href="{{ asset('android-chrome-192x192.png?v=1') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico?v=1') }}">
    <meta name="theme-color" content="#ff572f"> 

    <title>PanExprés</title>
    <title>@yield('title', 'PanExpres - Tu panadería a un clic')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <!-- Theme style -->
  
  <link rel="stylesheet" href="{{ asset('/css/styles_expres.css') }}">
  
</head>
<body>
  <div class="container-fluid d-flex ">
    <div class="card mx-auto my-3" style="width: 36rem !important;">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-12 titulo c-a text-center">
                    <a href="/">
                        <img class="logo-login mx-auto " src="{{ asset('/img/logopanexpres_color.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 titulo c-a text-center">
                    <p class="text-center textoreg text-subtitle">¿Todavía no te has registrado? <span><a href="/register" class="c-n">Clic aquí</a></span></p>
                </div>
            </div>
    
            <form action="{{ route('autenticar') }}" method="POST">
                @csrf
                <div class="form-group my-2">
                    <div class="row mx-auto" >
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control inputForm " placeholder="Correo Electrónico" id="emailW">
                        </div>
                    </div>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="form-group my-2">
                    <div class="row mx-auto">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password-fieldW" class="form-control inputForm" placeholder="Contraseña" value=""/>
                        </div>
                    </div>                
                </div>          
                
                <div class="form-group">
                    <div class="row mx-auto my-3">
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex">
                            <button class="btn btn-success w-100 mx-auto">Iniciar Sesión</button>
                        </div>
                    </div>                
                </div>
                <p class="text-center c-a texto d-none"><a href="#">¿Olvidé mi contraseña?</a></p>
                
            </form>
        </div>
    </div>
    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const button = this.querySelector('button');
            if (button.disabled) {
                e.preventDefault();
                return;
            }
            button.disabled = true;
            button.innerHTML = 'Cargando...'; // Opcional: feedback visual
        });
    </script>
</div>   
  <!-- /.card -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
