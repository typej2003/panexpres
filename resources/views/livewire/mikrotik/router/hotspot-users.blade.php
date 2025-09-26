<div>
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
                        <input type="password" wire:model.defer="state.password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña">
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

        window.addEventListener('hide-formUserHotspot', function (event) {
            $('#formUserHotspot').modal('hide');
            toastr.success(event.detail.message, 'Success!');
        });

        window.addEventListener('show-formUserHotspot', function (event) {

            let namesProfilesUser = event.detail.namesProfilesUser
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
