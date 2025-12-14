<div>
    <div class="">
        <h2 class="text-primary mb-4">FORMA DE PAGO</h2>
        <h4 class="mb-4">Selecciona tu forma de pago</h4>

        @if (session()->has('error_message_fp'))
            <div class="alert alert-warning mt-3">{{ session('error_message_fp') }}</div>
        @endif

        <div id="formapago-list-container" class="mb-4">
            
            @foreach($options as $option)
                @php
                    $isSelected = $formaDePago === $option['value'];
                    $imgGrey = $option['value'] === 'Pasarela' ? '/img/icono_pasarela_gris.png' : '/img/icono_kiosko_gris.png';
                    $imgBlue = $option['value'] === 'Pasarela' ? '/img/icono_pasarela_azul.png' : '/img/icono_kiosko_azul.png';
                @endphp
                
                <label 
                    class="profile-option d-block profile-option-three mb-3 {{ $isSelected ? 'selected' : '' }}"
                    wire:click="$set('formaDePago', '{{ $option['value'] }}')"
                >
                    <div class="option-img">
                        <img src="{{ $isSelected ? $imgBlue : $imgGrey }}" width="32" height="32" alt="{{ $option['name'] }}">
                    </div>
                    <div class="option-body">
                        <strong class="text-dark">{{ $option['name'] }}</strong>
                        <div class="option-sub">{{ $option['subtitle'] }}</div>
                    </div>
                    <div class="option-radio">
                        <input type="radio" name="pasarelaFormapago" value="{{ $option['value'] }}" @if($isSelected) checked @endif style="accent-color: #6500DB;">
                    </div>
                </label>
            @endforeach

        </div>

    </div>
    <div class="d-flex gap-2">
        <button id="submit-buttonFP" class="btn btn-secondary w-100 mt-3" 
                wire:click.prevent="selectFormaDePago" 
                @if(!$formaDePago) disabled @endif>
            Confirmar Selección
        </button>
    </div>
</div>
