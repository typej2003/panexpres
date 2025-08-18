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
                <a href="/listPagomovil" class="nav-link <?php echo e(request()->is('listPagomovil') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                    Pago Móvil
                </p>
                </a>
            </li>
            <li class="nav-item">
              <a x-ref="profileLink" href="<?php echo e(route('admin.profile.edit')); ?>" class="nav-link <?php echo e(request()->is('admin/profile') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Perfil
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
<?php /**PATH C:\Users\typej\Documents\git\panexpres-1\resources\views/layouts/partials/aside_mk.blade.php ENDPATH**/ ?>