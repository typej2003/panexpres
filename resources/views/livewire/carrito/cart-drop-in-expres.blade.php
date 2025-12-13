<div>
    <div class="action-dropdown cart-dropdown">
        <a href="#" class="action-item cart dropdown-trigger">
    <i class="fas fa-shopping-cart cart-icon"></i>
    <span class="cart-count">{{count(\Cart::getContent())}}</span>
</a>
<div class="dropdown-content cart-summary">
    @if(count(\Cart::getContent()) > 0)
        @foreach(\Cart::getContent() as $item)
            <p class="cart-item">{{$item->quantity}} x {{$item->name}}</p>
            <!-- <li class="list-group-item">
                <div class="row w-100">
                    <div class="col-md-3">
                        <img src="{{ $item->attributes->image }}"
                            style="width: 50px; height: 50px;"
                        >
                    </div>
                    <div class="col-md-5">
                        <b>{{$item->name}}</b>
                        <br><small>Cant: {{$item->quantity}}</small>
                    </div>
                    <div class="col-md-4">
                        <p>{{ $this->getPrice( \Cart::get($item->id)->getPriceSum(), $item->attributes->comercio_id ) }} {{$currencyValue}}</p>
                    </div>
                    <br><br>
                </div>
            </li> -->
        @endforeach
        <p class="cart-total">Total: {{ $this->getPrice( \Cart::get($item->id)->getPriceSum(), $item->attributes->comercio_id ) }} {{$currencyValue}}</p>
        <a href="/goCart" class="btn-checkout">Ver Carrito</a>
        
        <br> 
        
    @else
        <p>Tu carrito esta vacío</p>
    @endif
</div>
    </div>
</div>
