<div>
<style>
    /* Nota: Deberías definir tus estilos CSS customizados (como .btn-success-css, .btn-app) fuera de este componente o inyectarlos como en el ejemplo anterior si quieres eliminar Bootstrap por completo. 
       Para esta respuesta, asumo que las clases CSS customizadas están disponibles o las usarás para reemplazar las de Bootstrap. */
    .col1 {
            width: 60%;
        }
        .col2 {
            width: 40%;
        }

    /* Definiciones CSS faltantes para que el HTML sea coherente con la respuesta anterior */
    .btn-base {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        cursor: pointer;
    }
    .btn-success { /* Reemplaza btn-success */
        color: #fff;
        background-color: #FC5E27; /* Naranja/Éxito */
        border-color: #5a1e0aff;
        width: 100%;
    }
    .btn-success:hover {
        background-color: #fa8f6c;
        border-color: #fa8f6c;
    }
    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        /* Estilo base para botones que usan .btn-danger */
        display: inline-block;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        cursor: pointer;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .w-100 { width: 100%; }
    .mx-auto { margin-left: auto; margin-right: auto; }
    .accordion-item-css { border: 1px solid rgba(0,0,0,.125); margin-bottom: -1px; }
    .accordion-header-css a { display: block; padding: 0.5rem 1rem; text-decoration: none; color: #007bff; background-color: #f8f9fa; border-bottom: 1px solid rgba(0,0,0,.125); cursor: pointer; }
    .accordion-body-css { padding: 1rem; border-top: 1px solid rgba(0,0,0,.125); }
    .form-group-css { margin-bottom: 1rem; }
    .form-control-css { display: block; width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; border: 1px solid #ced4da; border-radius: 0.25rem; }
    .flex-row { display: flex; flex-wrap: wrap; }
    .input-row-css { display: flex; gap: 10px; }
    .text-bold { font-weight: bold; }
    .text-uppercase { text-transform: uppercase; }
    .text-danger { color: #dc3545; }
    .table1 {
        font-size: 1rem;
    }

    .table-shadow {
           box-shadow: 0 8px 8px rgba(0, 0, 0, 0.49); /* Sombra estándar */
        }

        /* Simulación de la clase .table */
        .custom-table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            vertical-align: top;
            border-color: #dee2e6;
            border-collapse: collapse; /* Crucial para que los bordes se vean como en Bootstrap */
        }

        .custom-table th,
        .custom-table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6; /* Línea divisoria horizontal */
        }

        .custom-table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6; /* Línea más gruesa para el encabezado */
            font-weight: bold;
        }

        /* Simulación de la clase .table-hover */
        .custom-table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075); /* El gris sutil característico */
            transition: background-color 0.2s ease-in-out; /* Transición suave */
        }

        .custom-table tbody {
            background-color: #fff;
        }

        /* Simulación de .table-responsive */
        .custom-table-container {
            display: block;
            width: 100%;
            overflow-x: auto; /* Permite el scroll horizontal */
            -webkit-overflow-scrolling: touch; /* Suavidad en dispositivos iOS */
        }
    
</style>
<div class="container-fluid">
    <link rel="stylesheet" href="/css/app.css">
    
    
    <div class="row my-2">
        <div class="col-md-12">
            <a href="/"><h6><i class="fa fa-solid fa-shopping-cart"></i> Ir a compra</h6></a>
        </div>
    </div>

    @if(\Cart::getTotalQuantity()>0)

    <div class="row my-2">
        <div class="col-md-8">
            <table class="custom-table custom-table-container custom-table-hover"> 
                <thead class="thead-primary">
                    <tr>                      
                        <th scope="col"></th>
                        <th scope="col">Comercio</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                @foreach($cartCollection as $item)
                <div class="row">
                    <tbody>
                    <tr>
                        <td>
                            <img src="{{ $item->attributes->image }}" class="img-thumbnail" width="80" height="80">                                        
                        </td>
                        <td><strong>{{ $this->getComercio($item->attributes->comercio_id)->name }}</strong></td>
                        <td><strong>{{ $item->name }}</strong></td>
                        <td>{{ $this->convertir($item->price) }} {{ $currencyValue }}</td>
                        <td>
                            <div class="col-md-12 d-flex justify-content-between">
                                <div class="input-group input-number-group">
                                    <div class="input-group-button">
                                        <span class="input-number-decrement" wire:click.prevent="updateQuantity({{ $item->id }}, {{ $item->quantity }}, '-' )">-</span>
                                    </div>
                                    <input class="input-number" type="number" value="{{ $item->quantity }}" min="0" max="1000">
                                    <div class="input-group-button">
                                        <span class="input-number-increment" wire:click.prevent="updateQuantity({{ $item->id }}, {{ $item->quantity }}, '+' )">+</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $this->convertir(\Cart::get($item->id)->getPriceSum()) }} {{ $currencyValue }} </td>
                        <td>
                            <form action="{{ route('cart.remove') }}"   method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </div>
                @endforeach
            </table>
            @if(\Cart::getTotalQuantity()>0)
                <h6>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h6><br>
            @else
                <h6>No Existen Productos en el Carrito de Compra</h6><br>
            @endif
            <div class="row">
                <div class="col-md-6">
                @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-danger"> <i class="fa fa-trash"></i> Vaciar Carrito
                    </button> 
                    </form>
                @endif         
                </div>
            </div>                
        </div>
        <div class="col-md-4">
            
                <table class="custom-table custom-table-container custom-table-hover table-shadow"> 
                    <thead>
                        <tr>
                            <th scope="col">Precio total artículos</th>
                            <th scope="col">{{ $currencyValue }} {{ $this->getTotal() }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($currencyValue == '$')
                        <tr class="">
                            <th scope="row">IGTF</th>
                            <td>{{ $currencyValue }} {{ $this->amountIGTF() }}</td>
                        </tr>
                        @endif
                        @foreach ($cartCollection as $item)
                        <tr>
                            <th>{{$item->name}}</th>
                            <td>{{$item->quantity . ' x ' . $item->price .$currencyValue}}</td>
                        </tr>
                        @endforeach
                        @if($currencyValue == 'Bs')
                        <tr class="d-none">
                            <th scope="row">Impuestos</th>
                            <td>{{ $currencyValue }} {{ $this->getImpuestoIVA() }}</td>
                        </tr>
                        @endif
                        
                        <tr>
                            <th scope="row">Total</th>
                            <td>{{ $currencyValue }} {{ $this->getTotal() }}</td>
                        </tr>
                        <tr>
                            <th scope="row" colspan = "2">
                                @if(count($cartCollection)>0)
                                    @auth
                                    <button wire:click.prevent="finalizarCompra" class="btn-base btn-success w-100">Continuar</button> 
                                    @else
                                    <div class="flex-row"> 
                                        <div class="accordion"> 
                                            <div class="accordion-item-css">
                                                <h4 class="accordion-header-css" id="headingOne">
                                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <strong>¿Ya Eres Usuario? </strong> 
                                                    </a>
                                                </h4>
                                                <div id="collapseOne" class="accordion-collapse collapse @error('showLogin') show @enderror" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body-css">
                                                        <br>Nos gustaria que Colocaras tus credenciales
                                                        <br>
                                                        <form action="{{ route('autenticar') }}" method="POST">
                                                            @csrf
                                                            <div class="group-control">
                                                                <label class="text-bold text-uppercase" for="">Inicia Sesión</label>
                                                            </div>
                                                            <div class="group-control my-3 d-none">
                                                                <a class="form-control-css text-center" href="/login-google"><i class="fa fa-brands fa-google"></i> Iniciar con Google</a> 
                                                            </div>
                                                            
                                                            <div class="form-group-css my-3"> 
                                                                <div class="flex-row input-row-css" > 
                                                                    <div class="col-100"> 
                                                                        <label for="email">Correo Electrónico</label>
                                                                        <input type="email" name="email" class="form-control-css inputForm" placeholder="Correo Electrónico" id="emailW"> 
                                                                    </div>
                                                                </div>
                                                                @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                    
                                                            <div class="form-group-css my-3"> 
                                                                <div class="flex-row input-row-css"> 
                                                                    <div class="col-100"> 
                                                                        <label for="password">Contraseña</label>
                                                                        <input type="password" name="password" id="password-fieldW" class="form-control-css inputForm" placeholder="Contraseña" value=""/> 
                                                                    </div>
                                                                </div>                
                                                            </div>          
                                                            
                                                            <div class="form-group-css"> 
                                                                <div class="flex-row my-3"> 
                                                                    <div class="col-100 d-flex"> 
                                                                        <button class="btn-base btn-success w-100 mx-auto">Iniciar Sesión</button> 
                                                                    </div>
                                                                </div>                
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item-css">
                                                <h4 class="accordion-header-css" id="headingThree">
                                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <strong>¿Aún no tienes cuenta? </strong> 
                                                    </a>
                                                </h4>
                                                <div id="collapseThree" class="accordion-collapse collapse @error('showRegister') show @enderror" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body-css">
                                                        <form action="{{ route('registrarse') }}" method="post">           
                                                            @csrf
                                                            <input type="hidden" value="cliente" id="role" name="role" value="{{old('role')}}">

                                                            <div class="form-group-css">
                                                                <div class="flex-row input-row-css"> 
                                                                    <div style="width: 30%;"> 
                                                                        <label for="identificationNac">Nac </label>
                                                                        <select class="form-control-css" name="identificationNac" id="identificationNac" placeholder="Tipo" value="{{old('identificationNac')}}">
                                                                            <option value="J">J-</option>
                                                                            <option value="E">E-</option>
                                                                            <option value="G">G-</option>
                                                                            <option value="P">P-</option>
                                                                            <option value="V" selected>V-</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="width: 70%;"> 
                                                                        <label for="identificationNumber">Documento</label>
                                                                        <input type="text" class="form-control-css" name="identificationNumber" id="identificationNumber" placeholder="Documento" value="{{old('identificationNumber')}}">
                                                                    </div>
                                                                    @error('identificationNumber')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>                            
                                                            </div>
                                                            
                                                            <div class="form-group-css">
                                                                <label for="name">Usuario <span class="text-danger">*</span></label>
                                                                <div class="input-group-css mb-3">                
                                                                    <input type="text" name="name" class="form-control-css" placeholder="Usuario" value="{{old('name')}}">
                                                                </div>
                                                                @error('name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group-css">
                                                                <label for="names">Nombres <span class="text-danger">*</span></label>
                                                                <div class="input-group-css mb-3">                
                                                                    <input type="text" name="names" class="form-control-css" placeholder="Nombre completo" value="{{old('names')}}">
                                                                </div>
                                                                @error('names')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group-css">
                                                                <label for="surnames">Apellidos <span class="text-danger">*</span></label>
                                                                <div class="input-group-css mb-3">                
                                                                    <input type="text" name="surnames" class="form-control-css" placeholder="Apellidos" value="{{old('surnames')}}">
                                                                </div>
                                                                @error('surnames')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            
                                                            <div class="form-group-css">
                                                                <label for="documento">Email <span class="text-danger">*</span></label>            
                                                                <div class="input-group-css mb-3">
                                                                    <input type="email" name="email" id="email" class="form-control-css" placeholder="Email" value="{{old('email')}}">
                                                                </div>
                                                                @error('email')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group-css">
                                                                <label for="documento">Contraseña <span class="text-danger">*</span></label>            
                                                                <div class="input-group-css mb-3">
                                                                    <input type="password" name="password" class="form-control-css" placeholder="Password" value="" value="{{old('password')}}">
                                                                </div>
                                                                @error('password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group-css">
                                                                <label for="documento">Repita la contraseña <span class="text-danger">*</span></label>        
                                                                <div class="input-group-css mb-3">
                                                                    <input type="password" name="password_confirmation" class="form-control-css" placeholder="password confirmation" value="">
                                                                </div>
                                                                @error('password_confirmation')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group-css">
                                                                <label for="documento">Teléfono </label>        
                                                                <div class="flex-row input-row-css"> 
                                                                    <div style="width: 40%;"> 
                                                                        <select class="form-control-css" name="cellphonecode" id="cellphonecode" value="{{old('cellphonecode')}}"> 
                                                                            <option value="0">Seleccione</option>
                                                                            <option value="0412">0412</option>
                                                                            <option value="0414">0414</option>
                                                                            <option value="0424">0424</option>
                                                                            <option value="0416">0416</option>
                                                                            <option value="0426">0426</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="width: 60%;"> 
                                                                        <input type="text" class="form-control-css" name="cellphone" id="cellphone" value="{{old('cellphone')}}">
                                                                    </div>
                                                                </div>   
                                                                @error('cellphonecode')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror 
                                                                @error('cellphone')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror            
                                                            </div>

                                                            <div class="form-group-css my-3 d-flex">
                                                                <button type="submit" class="btn-base btn-success mx-auto"><span class="fas fa-user-plus"></span>Unete</button> 
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endauth
                                @endif
                            </th>
                        </tr>
                    </tbody>
                </table>               
        </div>
    </div>

    <div class="flex-row my-2"> 
            <div class="col-100"> 
                @livewire('components.show-recommended-expres', [
                        'comercioId' => 1, 
                        'parametro' => $words,
                        ] )
            </div>
        </div>

    @else
    <div class="row my-2">
        <div class="col-md-12">
            <div class="centrar">Carrito Vacío</div>
            <div class="centrar">
                <img class="logo-responsive" src="/img/carrito_vacio.gif" alt="">
            </div>
        </div>
    </div>
    @endif
    
    <script>
        $('.input-number-increment').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val + 1);
        });

        $('.input-number-decrement').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        if(val > 0)
            $input.val(val - 1);
        })

    </script>
    
</div>
</div>