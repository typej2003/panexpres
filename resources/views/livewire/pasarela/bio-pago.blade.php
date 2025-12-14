<div>
    <div class="p-4 bg-white rounded shadow">
        <div class="row">
            <div class="col-md-12 col-12">
                
                @if (session()->has('error_message'))
                    <div class="alert alert-danger mt-3" role="alert">
                        {{ session('error_message') }}
                    </div>
                @endif

                <form autocomplete="off" novalidate>
                    
                    {{-- Campos ocultos --}}
                    <input id="currency" name="currency" type="hidden" wire:model.defer="currency">
                    <input id="reference" name="reference" type="hidden" wire:model.defer="reference">
                    <input id="rifLetter" name="rifLetter" type="hidden" wire:model.defer="rifLetter">
                    <input id="rifNumber" name="rifNumber" type="hidden" wire:model.defer="rifNumber">
                    <input id="title" name="title" type="hidden" wire:model.defer="title">
                    <input id="description" name="description" type="hidden" wire:model.defer="description">
                    <input id="cellphone1" name="cellphone1" type="hidden" wire:model.defer="cellphone1">
                    {{-- ... otros inputs hidden ... --}}
                    <div class="form-group" style="background-color: #f0f0f5; padding: 10px; border-radius: 5px;">
                        <label for="amount">Enviar Bs.</label>
                        <input id="amount" name="amount" wire:model.defer="amount" class="form-control input-center" readonly style="background-color: white; font-weight: bold;">
                            @error('amount') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="cellphone">Teléfono Celular</label>
                        <input type="text" id="cellphone" name="cellphone" wire:model.defer="cellphone" class="form-control input-center" maxlength="15" placeholder="Ej: 04121234567" required>
                        @error('cellphone') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="identificationNumber">Documento de Identidad</label>
                        <div class="input-container d-flex">
                            <select id="identificationNac" name="identificationNac" wire:model.defer="identificationNac" class="form-select me-2" style="width: 30%;">
                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="P">P</option>
                            </select>
                            <input type="text" id="identificationNumber" name="identificationNumber" wire:model.defer="identificationNumber"
                                class="form-control input-num input-center" maxlength="12" placeholder="Ej: 12345678" required>
                        </div>
                        @error('identificationNumber') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Correo Electrónico</label>
                        <input id="email" name="email" type="email" wire:model.defer="email" class="form-control input-center" maxlength="50" placeholder="correo@ejemplo.com" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div style="margin-top: 20px;">
                        <button id="btnCreatePayment" type="button" class="btn-success w-100 btn btn-primary" 
                                wire:click.prevent="submitForm" wire:loading.attr="disabled">
                            <span wire:loading.remove wire:target="submitForm">Enviar</span>
                            <span wire:loading wire:target="submitForm">Procesando...</span>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>

        <div class="d-flex gap-2">
            <button id="volver-formapago" class="btn btn-outline-secondary w-100 mt-3" 
                    wire:click.prevent="goBack">
                Volver
            </button>
        </div>
    </div>
</div>
