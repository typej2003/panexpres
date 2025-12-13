<div>
    <style>
        /* ----------------------------------------------------------- */
        /* BASE Y AJUSTES GENERALES */
        /* ----------------------------------------------------------- */
        * {
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            font-size: 1.4rem;
        }
        /* Reemplazo de .container-fluid */
        .container-css {
            width: 100%;
            padding: 0 15px; /* Padding lateral */
            margin: 0 auto;
        }
        
        /* Reemplazo de .row y .my-2 */
        .flex-row {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;    /* Reemplaza my-2 */
            margin-bottom: 10px; /* Reemplaza my-2 */
        }
        
        /* Reemplazo de .col-md-12 */
        .col-100 {
            width: 100%;
            padding: 0 5px; 
        }
        
        /* Reemplazo de .col-md-8 y .col-md-4 (para desktop) */
        @media (min-width: 768px) {
            .col-8 { /* Reemplaza col-md-8 */
                width: 66.66667%;
                padding: 0 5px;
            }
            .col-4 { /* Reemplaza col-md-4 */
                width: 33.33333%;
                padding: 0 5px;
            }
        }
        /* Para móvil, ambos .col-8 y .col-4 serán 100% por defecto (width: 100% en el .flex-row) */


        /* ----------------------------------------------------------- */
        /* ESTILOS DE TABLA (Reemplazo de .table, .thead-primary, .table-responsive) */
        /* ----------------------------------------------------------- */
        .table-css {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
            color: #212529;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table-css th, .table-css td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
            text-align: left;
        }

        .table-css thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            background-color: #007bff; /* Color principal para thead-primary */
            color: white;
        }

        .table-css tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05); /* Rayado */
        }

        .table1 {
            font-size: 1rem;
        }

        .col1 {
            width: 60%;
        }
        .col2 {
            width: 40%;
        }
        
        .img-thumb { /* Reemplazo de .img-thumbnail */
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            max-width: 100%;
            height: auto;
        }

        /* ----------------------------------------------------------- */
        /* ESTILOS DE BOTONES Y FORMULARIOS */
        /* ----------------------------------------------------------- */
        
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

        .btn-danger-css { /* Reemplaza btn-danger */
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger-css:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        
        .btn-success { /* Reemplaza btn-success */
            color: #fff;
            background-color: #FC5E27!important;
            border-color: #5a1e0aff;
            width: 100%;
        }
        .btn-success:hover {
            background-color: #fa8f6c;
            border-color: #fa8f6c;
        }

        .btn-app { /* Estilo base para botones de app/accion si no tienen éxito/peligro */
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-app:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        
        /* Reemplazo de d-flex justify-content-between */
        .flex-between {
            display: flex;
            justify-content: space-between;
        }
        
        /* ----------------------------------------------------------- */
        /* ESTILOS DE INPUT NUMBER (Contador de cantidad) */
        /* ----------------------------------------------------------- */
        .input-number-group {
            display: flex;
            align-items: stretch; 
            width: 110px; /* Tamaño fijo */
            border: 1px solid #ccc;
            border-radius: 4px;
            overflow: hidden; 
        }
        .input-number {
            flex-grow: 1; 
            text-align: center;
            padding: 4px 0;
            border: none; 
            outline: none;
            font-size: 0.9em;
            width: 30px; /* Asegura que no crezca demasiado */
        }
        .input-group-button span {
            display: block;
            padding: 4px 8px;
            background-color: #f8f8f8;
            color: #555;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.2s;
            font-weight: bold;
        }
        .input-group-button span:hover {
            background-color: #e0e0e0;
        }
        .input-number-decrement {
            border-right: 1px solid #ccc; 
        }
        .input-number-increment {
            border-left: 1px solid #ccc;
        }

        /* ----------------------------------------------------------- */
        /* ESTILOS DE ACORDEÓN (LOGIN/REGISTER) */
        /* ----------------------------------------------------------- */
        .accordion-item-css {
            border: 1px solid rgba(0,0,0,.125);
            margin-bottom: -1px; /* Para que se vean unidos */
        }

        .accordion-header-css a {
            display: block;
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: #007bff;
            background-color: #f8f9fa;
            border-bottom: 1px solid rgba(0,0,0,.125);
            cursor: pointer;
        }
        
        .accordion-body-css {
            padding: 1rem;
            border-top: 1px solid rgba(0,0,0,.125);
        }

        /* Clases de formularios simples (Reemplazo de .form-group, .form-control) */
        .form-group-css {
            margin-bottom: 1rem;
        }
        .form-control-css {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .input-row-css {
            display: flex;
            gap: 10px;
        }
        
        /* Utilidades menores */
        .text-danger { color: #dc3545; }
        .text-bold { font-weight: bold; }
        .text-uppercase { text-transform: uppercase; }
        .w-100 { width: 100%; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .my-3 { margin-top: 1rem; margin-bottom: 1rem; }
        .p-2 { padding: 0.5rem; }
        .d-none { display: none !important; }

    </style>

    <div class="container-css">
        <div class="flex-row my-2"> 
            <div class="col-100"> 
                <a href="/"><h6><i class="fa fa-solid fa-shopping-cart"></i> Ir a compra</h6></a>
            </div>
        </div>

        <div class="flex-row my-2"> 
            <div class="col-8"> 
                <table class="table1 table-css"> 
                    <thead class="thead-primary">
                        <tr style="font-size: 12px">                      
                            <th scope="col"></th>
                            <th scope="col">Comercio</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cartCollection as $item)
                        <tr style="font-size: 12px">
                            <td>
                                <img src="{{ $item->attributes->image }}" class="img-thumb" width="80" height="80"> 
                            </td>
                            <td><strong>{{ $item->attributes->comercio_id }}</strong></td>
                            <td><strong>{{ $item->name }}</strong></td>
                            <td>{{ $item->price }} USD</td>
                            <td>
                                <div class="col-100 flex-between"> 
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
                            <td>{{ \Cart::get($item->id)->getPriceSum() }} USD </td>
                            <td>
                                <form action="{{ route('cart.remove') }}"   method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn-base btn-danger-css"><i class="fa fa-trash"></i></button> 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @if(\Cart::getTotalQuantity()>0)
                    <h6>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h6><br>
                @else
                    <h6>No Existen Productos en el Carrito de Compra</h6><br>
                @endif
                <div class="flex-row"> 
                    <div class="col-100"> 
                        @if(count($cartCollection)>0)
                            <form action="{{ route('cart.clear') }}" method="POST">
                            {{ csrf_field() }}
                            <button class="btn-base btn-danger-css"> 
                                <i class="fa fa-trash"></i> Vaciar Carrito
                            </button> 
                            </form>
                        @endif         
                    </div>
                </div>                
            </div>
            <div class="col-4"> 
                <div class="h4">Su pedido (cant: {{ count($listpedidos)}})</div>
                <table class="table-css"> 
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
                            <th class="col1">{{$item->name}}</th>
                            <td class="col2">{{$item->quantity . ' x ' . $item->price .$currencyValue}}</td>
                        </tr>
                        @endforeach
                        @if($currencyValue == 'Bs')
                        <tr>
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
                                                                        <input type="password" name="password" id="password-fieldW" class="form-control-css inputForm" placeholder="Contraseña" value="12345678"/> 
                                                                    </div>
                                                                </div>                
                                                            </div>          
                                                            
                                                            <div class="form-group-css"> 
                                                                <div class="flex-row my-3"> 
                                                                    <div class="col-100 d-flex"> 
                                                                        <button class="btn-base btn-app w-100 mx-auto">Iniciar Sesión</button> 
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
                                                                    <input type="password" name="password" class="form-control-css" placeholder="Password" value="12345678" value="{{old('password')}}">
                                                                </div>
                                                                @error('password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group-css">
                                                                <label for="documento">Repita la contraseña <span class="text-danger">*</span></label>        
                                                                <div class="input-group-css mb-3">
                                                                    <input type="password" name="password_confirmation" class="form-control-css" placeholder="password confirmation" value="12345678">
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
                                                                <button type="submit" class="btn-base btn-app mx-auto"><span class="fas fa-user-plus"></span>Unete</button> 
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
    </div>
    
    <script>
        // La lógica de jQuery para incrementar/decrementar se mantiene.
        // Asegúrate de que jQuery esté cargado.
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
        });

    </script>

</div>