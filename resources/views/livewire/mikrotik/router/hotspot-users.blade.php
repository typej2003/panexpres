<div>
<<<<<<< HEAD
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Usuarios</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
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
                        <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Nuevo Usuario</button>
                        <x-search-input wire:model="searchTerm" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>.id</th>
                                        <th>Usuario</th>
                                        <th class="text-success">Uptime</th>
                                        <th>Server</th>
                                        <th>Profile/Plan</th>
                                        <th>Tiempo Profile</th>
                                        <th class="text-warning">Limite uptime</th>                                        
                                        <th>Disabled</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user['.id'] }}</td>
                                        <td>
                                            <a href="" wire:click.prevent="addNewUserHotspot('{{ $user['name'] }}')">
                                                {{ $user['name'] }}
                                            </a>
                                        </td>
                                        <td class="text-success">{{ $user['uptime'] }}</td>
                                        <td>{{ (isset($user['server']))? $user['server'] : '' }}</td>
                                        <td>{{ (isset($user['profile']))? $user['profile'] : '' }}</td>
                                        <td>{{ $this->timeProfileUser($user['profile'])}} </td>
                                        <td class="text-warning">{{ $this->limitUptimeUser($user['name'])}} </td>
                                        <td>{{ $user['disabled'] }}</td>
                                        <td>
                                            <a href="" wire:click.prevent="edit('{{ $user['.id'] }}', '{{ $user['name'] }}', '{{ $user['profile'] }}')">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>

                                            <a href="" wire:click.prevent="confirmUserRemoval('{{ $user['.id'] }}')">
                                                <i class="fa fa-trash text-danger mr-2"></i>
                                            </a>
                                            <a href="" wire:click.prevent="defineUptimeLimit('{{ $user['.id'] }}')">
                                                <i class="fa fa-solid fa-broom mr-2 text-warning"></i>
                                            </a>
                                            <a href="" wire:click.prevent="cleanUptime('{{ $user['.id'] }}')">
                                                <i class="fa fa-solid fa-broom mr-2 text-success" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Eliminar Usuario</h5>
                </div>

                <div class="modal-body">
                    <h4>Esta seguro de querer eliminar este usuario?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    <button type="button" wire:click.prevent="deleteUser" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Eliminar Usuario</button>
                </div>
            </div>
        </div>
    </div>

=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="container mt-5">
        <h1>Usuarios todos los Hotspots</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>.id</th>
                    <th>Usuario</th>
                    <th>Server</th>
                    <th>Profile/Plan</th>
                    <th>Uptime</th>
                    <th>Disabled</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['.id'] }}</td>
                    <td>
                        <a href="" wire:click.prevent="addNewUserHotspot('{{ $user['name'] }}')">
                            {{ $user['name'] }}
                        </a>
                    </td>
                    <td>{{ (isset($user['server']))? $user['server'] : '' }}</td>
                    <td>{{ (isset($user['profile']))? $user['profile'] : '' }}</td>
                    <td>{{ $user['uptime'] }}</td>
                    <td>{{ $user['disabled'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
>>>>>>> 0604bef2f8b0af5de7343918d133ded26ea16b8a
<!-- Modal -->
<div class="modal fade" id="formUserHotspot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <form autocomplete="off" wire:submit.prevent="{{ $showEditModal ? 'updateUserHotspot' : 'createUserHotspot' }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if($showEditModal)
                        <span>Editar Usuario</span>
                        @else
                        <span>Nuevo Usuario</span>
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="serverUH">Server</label>
                        <select name="serverUH" wire:model.defer="state.serverUH" class="form-control @error('serverUH') is-invalid @enderror" id="serverUH" wire:ignore>
                        </select>
                        @error('serverUH')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nameUH">Usuario</label>
                        <input type="text" wire:model.defer="state.nameUH" class="form-control @error('nameUH') is-invalid @enderror" id="nameUH" aria-describedby="nameHelp" placeholder="Nombre">
                        @error('nameUH')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="profileUH">Perfil</label>
                        <select name="profileUH" wire:model.defer="state.profileUH" class="form-control @error('profileUH') is-invalid @enderror" id="profileUH" wire:ignore>
                        </select>
                        @error('profileUH')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
<<<<<<< HEAD
                        <input type="password" wire:model.defer="state.password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" autocomplete="off">
=======
                        <input type="password" wire:model.defer="state.password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña">
>>>>>>> 0604bef2f8b0af5de7343918d133ded26ea16b8a
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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

<script>
    window.onload = function() {
        
<<<<<<< HEAD
=======
        window.addEventListener('hide-formHotspot', function (event) {
            $('#formHotspot').modal('hide');
            toastr.success(event.detail.message, 'Success!');
        });
        
        window.addEventListener('show-formHotspot', function (event) {

            let namesInterfaces = event.detail.namesInterfaces
            let namesProfiles = event.detail.namesProfiles

            let interfaceH = document.getElementById('interfaceH')
            let profileH = document.getElementById('profileH')
            
            let options = '';                
            
            options = '<option value="0">SELECCIONE..</option>'
            namesInterfaces.forEach(element => {
                options += `<option value="${element}">${element}</option>`
            });
            interfaceH.innerHTML = options

            options = '<option value="0">SELECCIONE..</option>'
            namesProfiles.forEach(element => {
                options += `<option value="${element}">${element}</option>`
            });
            profileH.innerHTML = options

            $('#formHotspot').modal('show');            

        });

>>>>>>> 0604bef2f8b0af5de7343918d133ded26ea16b8a
        window.addEventListener('hide-formUserHotspot', function (event) {
            $('#formUserHotspot').modal('hide');
            toastr.success(event.detail.message, 'Success!');
        });

        window.addEventListener('show-formUserHotspot', function (event) {
<<<<<<< HEAD
            
            let namesProfilesUser = event.detail.namesProfilesUser

=======

            let namesProfilesUser = event.detail.namesProfilesUser
>>>>>>> 0604bef2f8b0af5de7343918d133ded26ea16b8a
            let hotspots = event.detail.hotspots
            let nameserverUH = event.detail.nameserverUH

            let serverUH = document.getElementById('serverUH')
            let profileUH = document.getElementById('profileUH')

            while (serverUH.options.length > 0) {
                serverUH.remove(0);
            }
            while (profileUH.options.length > 0) {
                profileUH.remove(0);
            }
            let options = '';

<<<<<<< HEAD
            console.log(hotspots)

=======
>>>>>>> 0604bef2f8b0af5de7343918d133ded26ea16b8a
            options = '<option value="all">Todos</option>'
            hotspots.forEach(element => {
                options += `<option value="${element}">${element}</option>`
            });
            serverUH.innerHTML = options

            options = '<option value="0">SELECCIONE..</option>'
            namesProfilesUser.forEach(element => {
                options += `<option value="${element}">${element}</option>`
            });
            profileUH.innerHTML = options

            $('#formUserHotspot').modal('show');
            
            for (let i = 0; i < serverUH.options.length; i++) {
                if (serverUH.options[i].value === nameserverUH) {
                serverUH.options[i].selected = true;
                break; // Termina la iteración una vez encontrada la opción
                }
            }

        });

        
    }
</script>
</div>
