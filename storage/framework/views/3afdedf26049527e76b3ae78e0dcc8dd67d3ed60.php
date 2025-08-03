<aside class="main-sidebar sidebar-dark-primary elevation-4 overflowul">
  <!-- Brand Logo -->
  <a href="/" class="brand-link bg-white">
    <img class="main-sidebar-img" src="/img/panexpres_logo.png" alt="">
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <?php if(auth()->guard()->check()): ?>
        <img src="<?php echo e(auth()->user()->avatar_url); ?>" id="profileImage" class="img-circle elevation-2" alt="User Image">
        <?php endif; ?>
      </div>
      <div class="info">
        <?php if(auth()->guard()->check()): ?>
        <a href="#" class="d-block" x-ref="username"><?php echo e(auth()->user()->name); ?></a>
        <?php endif; ?>
      </div>
    </div>

    <!-- Sidebar Menu -->
     
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php echo e(request()->is('admin/dashboard') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Escritorio
            </p>
          </a>
        </li>

        <?php if(auth()->guard()->check()): ?>
          <?php if(auth()->user()->role == 'admin'): ?>
          
            <li class="nav-item">
              <a x-ref="profileLink" href="<?php echo e(route('admin.profile.edit')); ?>" class="nav-link <?php echo e(request()->is('admin/profile') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Perfil
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('listPedidos', 1)); ?>" class="nav-link <?php echo e(request()->is('listPedidos') ? 'active' : ''); ?>">
                <i class="fa fa-solid fa-file-invoice-dollar"></i>
                <p>
                  Procesar Pedidos
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo e(route('listPedidosCliente')); ?>" class="nav-link <?php echo e(request()->is('listPedidosCliente') ? 'active' : ''); ?>">
                <i class="fa fa-solid fa-file-invoice-dollar"></i>
                <p>
                  Mis Pedidos
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo e(route('listClients', 1)); ?>" class="nav-link <?php echo e(request()->is('listClients') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Clientes
                </p>
              </a>
            </li>
            
            <!-- arbol -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Configurar Sitio
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview nav-link-sub">
                <li class="nav-item">
                  <a href="<?php echo e(route('star')); ?>" class="nav-link <?php echo e(request()->is('star') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Star
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('admin.listAreas')); ?>" class="nav-link <?php echo e(request()->is('admin/listAreas') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Área Económica
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/listTasas/1" class="nav-link <?php echo e(request()->is('listTasas') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Tasa de cambio
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('emailexample')); ?>" class="nav-link <?php echo e(request()->is('emailexample') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Prueba de Email
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('emailFiles')); ?>" class="nav-link <?php echo e(request()->is('emailFiles') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Email con Files
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('file-import')); ?>" class="nav-link <?php echo e(request()->is('file-import') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                        Importar Usuarios
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/api/apicontroller" class="nav-link <?php echo e(request()->is('api.apicontroller') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Probar Api
                    </p>
                  </a>
                </li>

                <li class="nav-item">                  
                  <a href="<?php echo e(route('listMetodosPagos')); ?>" class="nav-link <?php echo e(request()->is('listMetodosPagos') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Métodos de Pagos
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/pasarela" class="nav-link <?php echo e(request()->is('pasarela') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Pasarela
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('admin.users')); ?>" class="nav-link <?php echo e(request()->is('admin/users') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Usuarios
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/listPromociones" class="nav-link <?php echo e(request()->is('listPromociones') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Promociones
                    </p>
                  </a>
                </li>

              </ul>
            </li>
            <!-- fin arbol -->

            <!-- arbol -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Comercio
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview nav-link-sub">
                <li class="nav-item">
                  <a href="<?php echo e(route('listComercios', 1)); ?>" class="nav-link <?php echo e(request()->is('listComercios') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Comercios
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('settingComercio', 1)); ?>" class="nav-link <?php echo e(request()->is('settingComercio') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Configurar Comercio
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listDeliveryArea', 1)); ?>" class="nav-link <?php echo e(request()->is('listDeliveryArea') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Zona de entrega Delivery
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listCentrodistribucion', 1)); ?>" class="nav-link <?php echo e(request()->is('listCentrodistribucion') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Centro de Pickup
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listImpuestos', 1)); ?>" class="nav-link <?php echo e(request()->is('listImpuestos') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Listar Impuestos
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listMetodosPagosC', 1)); ?>" class="nav-link <?php echo e(request()->is('listMetodosPagosC') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Métodos de Pagos
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listMenus', 1)); ?>" class="nav-link <?php echo e(request()->is('listMenus') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Menú
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listTransacciones', 1)); ?>" class="nav-link <?php echo e(request()->is('listTransacciones') ? 'active' : ''); ?>">
                    <i class="fa fa-solid fa-file-invoice-dollar"></i>
                    <p>
                      Transacciones
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listPedidos', 1)); ?>" class="nav-link <?php echo e(request()->is('listPedidos') ? 'active' : ''); ?>">
                    <i class="fa fa-solid fa-file-invoice-dollar"></i>
                    <p>
                      Pedidos
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listStatusPedidos', 1)); ?>" class="nav-link <?php echo e(request()->is('listStatusPedidos') ? 'active' : ''); ?>">
                    <i class="fa fa-solid fa-file-invoice-dollar"></i>
                    <p>
                      Estado de Pedidos
                    </p>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a href="<?php echo e(route('listClientesComercio', 1)); ?>" class="nav-link <?php echo e(request()->is('listClientesComercio') ? 'active' : ''); ?>">
                    <i class="fa fa-solid fa-car-side"></i>
                    <i class="fa fa-solid fa-motorcycle"></i>
                    <p>
                      Delivery
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listClientesComercio', 1)); ?>" class="nav-link <?php echo e(request()->is('listClientesComercio') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Clientes
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listUsersComercio', 1)); ?>" class="nav-link <?php echo e(request()->is('listUsersComercio') ? 'active' : ''); ?>">
                    <i class="fa fa-regular fa-user"></i>
                    <p>
                      Usuarios
                    </p>
                  </a>
                </li>
                
              </ul>
            </li>
            <!-- fin arbol -->

            <!-- arbol -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Producto
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview nav-link-sub">
                <li class="nav-item">
                  <a href="<?php echo e(route('listProducts', 1)); ?>" class="nav-link <?php echo e(request()->is('listProducts') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Afiliado / Productos
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listCombos', 1)); ?>" class="nav-link <?php echo e(request()->is('listCombos') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Afiliado / Combos
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listManufacturers', 1)); ?>" class="nav-link <?php echo e(request()->is('listManufacturers') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Fabricantes
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/listCategories/1" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CATEGORIA</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listBrand', 1)); ?>" class="nav-link <?php echo e(request()->is('listBrand') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Afiliado / Marca
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('listContainers', 1)); ?>" class="nav-link <?php echo e(request()->is('listContainers') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                      Afiliado / Contenedor
                    </p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- fin arbol -->

            <li class="nav-item">
              <a href="<?php echo e(route('listNotificaciones', 1)); ?>" class="nav-link <?php echo e(request()->is('listNotificaciones') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                  Notificaciones
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo e(route('listCategorieslist', 1)); ?>" class="nav-link <?php echo e(request()->is('listCategorieslist') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                  Categorieslist
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo e(route('MakePayment', 1)); ?>" class="nav-link <?php echo e(request()->is('MakePayment') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                  Hacer Operacion
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo e(route('admin.settings')); ?>" class="nav-link <?php echo e(request()->is('admin/settings') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Configuraciones
                </p>
              </a>
            </li>
          <?php endif; ?>

          <?php if(auth()->user()->role == 'cliente'): ?>
            <li class="nav-item">
              <a href="<?php echo e(route('listPedidosCliente')); ?>" class="nav-link <?php echo e(request()->is('listPedidosCliente') ? 'active' : ''); ?>">
                <i class="fa fa-solid fa-file-invoice-dollar"></i>
                <p>
                  Pedidos
                </p>
              </a>
            </li>
          <?php endif; ?>

          <?php if(auth()->user()->role == 'delivery'): ?>
            <li class="nav-item">
              <a href="<?php echo e(route('listPedidosDelivery')); ?>" class="nav-link <?php echo e(request()->is('listPedidosDelivery') ? 'active' : ''); ?>">
                <i class="fa fa-solid fa-file-invoice-dollar"></i>
                <p>
                  Pedidos Delivery
                </p>
              </a>
            </li>
            
          <?php endif; ?>

          <?php if(auth()->user()->role == 'afiliado'): ?>
            <li class="nav-item">
              <a href="<?php echo e(route('listComercios', auth()->user()->id)); ?>" class="nav-link <?php echo e(request()->is('listComercios') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                  Afiliado / Comercios
                </p>
              </a>
            </li>
            <!--  POR COMERCIO -->
            <?php if(count(auth()->user()->comercios) > 0): ?>
              <?php $__currentLoopData = auth()->user()->comercios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comercio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                      <?php echo e($comercio->name); ?>

                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">

                    <li class="nav-item">
                      <a href="<?php echo e(route('listManufacturers', $comercio->id)); ?>" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                          FABRICANTES
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="/listCategories/<?php echo e($comercio->id); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>CATEGORIA</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/listProducts/<?php echo e($comercio->id); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>PRODUCTOS</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/listMetodosPagosC/<?php echo e($comercio->id); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>METODOS DE PAGOS</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/listTransacciones/<?php echo e($comercio->id); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>TRANSACCIONES</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/listClients/<?php echo e($comercio->id); ?>" class="nav-link <?php echo e(request()->is('listClients') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Clientes</p>
                      </a>
                    </li>
                  </ul>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <!--  FIN CATEGORIA POR COMERCIO -->
          <?php endif; ?>

          <?php if(auth()->user()->role == 'usuario' && auth()->user()->client->rolecomercio == 'admincomercio'): ?>
            <li class="nav-item">
              <a href="<?php echo e(route('listPedidosCliente')); ?>" class="nav-link <?php echo e(request()->is('listPedidosCliente') ? 'active' : ''); ?>">
                <i class="fa fa-solid fa-file-invoice-dollar"></i>
                <p>
                  Pedidos
                </p>
              </a>
            </li>
          <?php endif; ?>
        <?php endif; ?>

        <!-- <li class="nav-item">
          <a href="<?php echo e(route('admin.messages')); ?>" class="nav-link <?php echo e(request()->is('admin/messages') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-comments"></i>
            <p>
              Messages
            </p>
          </a>
        </li> -->

        <li class="nav-item">
          <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Salir
              </p>
            </a>
          </form>
        </li>

        <!-- arbol -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../tables/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../tables/data.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- fin arbol -->
          
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/layouts/partials/aside.blade.php ENDPATH**/ ?>