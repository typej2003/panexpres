<div>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
        .text-primary-custom {
            color: #893e08 !important;
            font-weight: bold !important;
            text-transform: uppercase;
        }

        /* Contenedor de tabla para evitar desbordamiento en móvil */
        .table-container-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            border-radius: 8px;
        }

        /* Tarjetas fluidas */
        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            width: 100% !important;
        }

        /* Ajustes de botones para móviles o zoom alto */
        @media (max-width: 576px) {
            .btn-responsive {
                width: 100%;
                margin-bottom: 10px;
            }
            .modal-footer {
                flex-direction: column;
            }
            .modal-footer .btn {
                width: 100%;
                margin: 5px 0 !important;
            }
        }

        /* Evitar que el acordeón se vea apretado */
        .accordion-button:not(.collapsed) {
            background-color: #fdf5f0;
            color: #893e08;
        }
    </style>

    <div class="container-fluid py-3">
        <div class="row mb-4">
            <div class="col-12">            
                <div class="accordion" id="accordionAddresses">
                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <span class="text-primary-custom h5 mb-0"><i class="fa fa-map-marker-alt me-2"></i>Libreta de direcciones</span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse @error('showLogin') show @enderror" data-bs-parent="#accordionAddresses">
                            <div class="accordion-body p-2 p-md-3">
                                <div class="table-container-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Acción</th>
                                                <th>Dirección</th>
                                                <th class="text-end">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody wire:loading.class="opacity-50">
                                            @forelse ($direcciones as $index => $direccion)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    <button wire:click.prevent="seleccionar({{$direccion}})" class="btn btn-sm btn-primary">Seleccionar</button>
                                                </td>
                                                <td class="small">{{ $direccion->direccionCompleta() }}</td>
                                                <td class="text-end">
                                                    <a href="#" wire:click.prevent="edit({{ $direccion }})" class="btn btn-link text-primary p-1"><i class="fa fa-edit"></i></a>
                                                    <a href="#" wire:click.prevent="confirmDireccionRemoval({{ $direccion->id }})" class="btn btn-link text-danger p-1"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr><td colspan="4" class="text-center py-3">No dispone de direcciones guardadas.</td></tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3 d-flex justify-content-center justify-content-md-end">
                                    {{ $direcciones->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($showEditModal)
        <div class="row mb-3">
            <div class="col-12 text-end">
                <button wire:click.prevent="addNew" class="btn btn-primary btn-responsive shadow-sm">
                    <i class="fa fa-plus-circle me-1"></i> Nueva Dirección
                </button>
            </div>
        </div>
        @endif

        <form class="formShipping" action="{{ route('pasarelaPost') }}" method="post">
            @csrf
            <div class="card card-custom shadow-sm">
                <div class="card-body p-3 p-md-4">
                    <h4 class="text-primary-custom border-bottom pb-2 mb-4">Dirección de Delivery</h4>
                    
                    <input wire:model.defer="state.nropedido" type="hidden" name="nropedido">
                    <input wire:model.defer="state.metodoentrega" type="hidden" name="metodoentrega">

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-sm-4 col-md-3">
                            <label class="form-label fw-bold">Tipo Doc. <span class="text-danger">*</span></label>
                            <select wire:model.defer="state.identificationNac" name="identificationNac" class="form-select @error('identificationNac') is-invalid @enderror">
                                <option value="V">V-</option>
                                <option value="J">J-</option>
                                <option value="E">E-</option>
                                <option value="G">G-</option>
                                <option value="P">P-</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-8 col-md-9">
                            <label class="form-label fw-bold">Número de Documento <span class="text-danger">*</span></label>
                            <input wire:model.defer="state.identificationNumber" type="text" name="identificationNumber" class="form-control @error('identificationNumber') is-invalid @enderror" placeholder="Cédula o RIF">
                            @error('identificationNumber') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-bold">Nombres <span class="text-danger">*</span></label>
                            <input wire:model.defer="state.names" type="text" class="form-control @error('names') is-invalid @enderror">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-bold">Apellidos <span class="text-danger">*</span></label>
                            <input wire:model.defer="state.surnames" type="text" class="form-control @error('surnames') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-5 col-sm-4 col-md-3">
                            <label class="form-label fw-bold">Código <span class="text-danger">*</span></label>
                            <select wire:model.defer="state.cellphonecode" class="form-select @error('cellphonecode') is-invalid @enderror">
                                <option value="0">Seleccione</option>
                                <option value="0412">0412</option>
                                <option value="0414">0414</option>
                                <option value="0424">0424</option>
                                <option value="0416">0416</option>
                                <option value="0426">0426</option>
                            </select>
                        </div>
                        <div class="col-7 col-sm-8 col-md-9">
                            <label class="form-label fw-bold">Número de Teléfono <span class="text-danger">*</span></label>
                            <input wire:model.defer="state.cellphone" type="text" class="form-control @error('cellphone') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-bold">País <span class="text-danger">*</span></label>
                            <select wire:model="country" class="form-select">
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-bold">Estado/Provincia</label>
                            <select wire:model="province" class="form-select">
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-bold">Ciudad/Sector <span class="text-danger">*</span></label>
                            <select wire:model="city" class="form-select">
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-bold">Zona de Entrega <span class="text-danger">*</span></label>
                            <select wire:model="zona" wire:change="changeZona($event.target.value)" class="form-select @error('zona') is-invalid @enderror">
                                <option value="0">Seleccione zona</option>
                                @foreach($zonas as $zona)
                                    <option value="{{ $zona->id }}">{{ $zona->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-bold">Costo del Delivery</label>
                            <div class="p-2 border rounded bg-light d-flex justify-content-between align-items-center">
                                <div class="form-check m-0">
                                    <input class="form-check-input d-none" type="radio" name="metodoenvio" value="enviodelivery" checked>
                                    <label class="form-check-label small fw-bold">Delivery Local</label>
                                </div>
                                <span class="badge bg-success fs-6">
                                    @if($this->llevaOfertaCantProductos() == true)
                                    <span>Delivery Gratis</span>
                                    @else
                                    {{ $currencyValue }} {{ $deliveryArea->coste ?? '0' }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Dirección Exacta (Calle, Nº de Casa/Apto) <span class="text-danger">*</span></label>
                        <textarea wire:model.defer="state.address" class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Indique puntos de referencia"></textarea>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button wire:click.prevent="irPasarela" class="btn btn-success btn-lg px-5 shadow">
                            Continuar al Pago <i class="fa fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content border-0 shadow-lg">
                    <form autocomplete="off" wire:submit.prevent="{{ $showEditModal ? 'updateDatos' : 'createDatos' }}">
                        <div class="modal-header bg-light">
                            <h5 class="modal-title text-primary-custom">
                                <i class="fa {{ $showEditModal ? 'fa-edit' : 'fa-plus-circle' }} me-2"></i>
                                {{ $showEditModal ? 'Editar Dirección' : 'Nueva Dirección' }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label small fw-bold">Nombres</label>
                                    <input wire:model.defer="state.names" type="text" class="form-control">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label small fw-bold">Apellidos</label>
                                    <input wire:model.defer="state.surnames" type="text" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-bold">Dirección Completa</label>
                                    <textarea wire:model.defer="state.address" class="form-control" rows="2"></textarea>
                                </div>
                                </div>
                        </div>
                        <div class="modal-footer bg-light">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary px-4">Guardar Dirección</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmationModal" tabindex="-1" wire:ignore.self>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title"><i class="fa fa-trash me-2"></i>Confirmar Eliminación</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center py-4">
                        <p class="h5">¿Está seguro de eliminar esta dirección?</p>
                        <p class="text-muted small">Esta acción no se puede deshacer.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" wire:click.prevent="deleteDireccion" class="btn btn-danger px-4">Sí, Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        // Listener para el evento de Livewire
        window.addEventListener('enviarFormularioShipping', () => {
            const form = document.querySelector('.formShipping');
            if (form) {
                // Feedback visual antes de enviar
                const btn = form.querySelector('.btn-success');
                if(btn) {
                    btn.disabled = true;
                    btn.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i>Procesando...';
                }
                form.submit();
            }
        });
    </script>
</div>