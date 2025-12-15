<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="36" 
                            height="36" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round"
                            style="color: #dd751a;">                            
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg> Mis Compras</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="">Mis Compras</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between mb-2">
                        <!-- <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Nuevo Pedido</button> -->
                        <div></div>
                        <x-search-input wire:model="searchTerm" />
                    </div>
                    <div class="card" style="width: 100% !important;">
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Confirmado</th>
                                        <th scope="col">
                                            Pedido
                                            <span wire:click="sortBy('pedido')" class="float-right text-sm" style="cursor: pointer;">
                                                <i class="fa fa-arrow-up {{ $sortColumnName === 'pedido' && $sortDirection === 'asc' ? '' : 'text-muted' }}"></i>
                                                <i class="fa fa-arrow-down {{ $sortColumnName === 'pedido' && $sortDirection === 'desc' ? '' : 'text-muted' }}"></i>
                                            </span>
                                        </th>
                                        <th scope="col">
                                            Referencia
                                            <span wire:click="sortBy('reference')" class="float-right text-sm" style="cursor: pointer;">
                                                <i class="fa fa-arrow-up {{ $sortColumnName === 'reference' && $sortDirection === 'asc' ? '' : 'text-muted' }}"></i>
                                                <i class="fa fa-arrow-down {{ $sortColumnName === 'reference' && $sortDirection === 'desc' ? '' : 'text-muted' }}"></i>
                                            </span>
                                        </th>
                                        <th scope="col">Cédula</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Método de Pago</th>
                                        <th scope="col">Costo</th>
                                        <th scope="col">Método de Entrega</th>
                                        <th scope="col">Fecha de Registro</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody wire:loading.class="text-muted">
                                    @foreach ($compras as $index => $compra)
                                    <tr>
                                        <th scope="row">{{ $compras->firstItem() + $index }}</th>
                                        <td>{{$compra->getConfirmed()}}</td>
                                        <td><a href="/detallespedido/{{ $compra->nropedido }}">{{ $compra->nropedido }}</a></td>
                                        <td>{{ $compra->reference }}</td>
                                        <td>{{ $compra->client->identificationNumber }}</td>
                                        <td>{{ $compra->client->name }}</td>
                                        <td>{{ $compra->metodo }}</td>
                                        <td>{{ $compra->coste }} {{ $currencyValue }}</td>
                                        <td>{{ $compra->metodoentrega }}</td>
                                        <td>{{ $compra->created_at ?? 'N/A' }}</td>
                                        <td>
                                            <a href="" wire:click.prevent="sendNotificacion({{ $compra }})">
                                                <img class="mr-2" style="width: 25px;" src="/img/icon-send.png" alt="">
                                            </a>

                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            {{ $compras->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form autocomplete="off" wire:submit.prevent="{{ $showEditModal ? 'updatePedido' : 'createPedido' }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            @if($showEditModal)
                            <span>Editar Pedido</span>
                            @else
                            <span>Nuevo Pedido</span>
                            @endif
                        </h5>
                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="pedido">Pedido</label>
                            <input type="text" wire:model.defer="state.nropedido" id="pedido" autofocus class="form-control @error('pedido') is-invalid @enderror" readonly>
                            @error('pedido')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror                    
                        </div>

                        <div class="form-group">
                            <label for="reference">Referencia</label>
                            <input type="text" wire:model.defer="state.reference" id="reference" autofocus class="form-control @error('reference') is-invalid @enderror">
                            @error('reference')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea wire:model.defer="state.description" id="description" autofocus class="form-control @error('description') is-invalid @enderror" readonly rows="5"></textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="coste">Costo ({{ $currencyValue }})</label>
                            <input type="text" wire:model.defer="state.coste" id="coste" autofocus class="form-control @error('coste') is-invalid @enderror" readonly>
                            @error('coste')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror                    
                        </div>
                    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-switch">
                                        <input wire:model.defer="state.in_delivery" type="checkbox" class="custom-control-input" id="in_delivery" disabled>
                                        <label class="custom-control-label  mx-3" for="in_delivery">Posee Delivery</label>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
                            @if($showEditModal)
                            <span>Guardar Cambios</span>
                            @else
                            <span>Guardar</span>
                            @endif
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #6C2689;">
                    <h5>Eliminar Pedido</h5>
                </div>

                <div class="modal-body">
                    <h4>Esta usted seguro de querer eliminar este Pedido?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    <button type="button" wire:click.prevent="deletePedido" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Eliminar Pedido</button>
                </div>
            </div>
        </div>
    </div>
</div>

