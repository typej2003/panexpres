<div>
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detalles del Pedido</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="/listPedidosCliente">Mis Pedidos</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?php if($pedido): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card w-50">
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Pedido: </span>
                            </div>
                            <div class="col-lg-6">
                                <span><?php echo e($pedido->nropedido); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Monto: </span>
                            </div>
                            <div class="col-lg-6">
                                <span><?php echo e($pedido->coste); ?> <?php echo e($pedido->moneda); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Fecha: </span>
                            </div>
                            <div class="col-lg-6">
                                <span><?php echo e($pedido->created_at ?? 'N/A'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <table class="table table-hover table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody wire:loading.class="text-muted">
                    <?php $__empty_1 = true; $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($detalles->firstItem() + $index); ?></th>
                        <td><?php echo e($detalle->name); ?></td>
                        <td><?php echo e($detalle->quantity); ?></td>
                        <td><?php echo e($pedido->moneda); ?> <?php echo e($detalle->price1); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr class="text-center">
                        <td colspan="9">
                            <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/v2/assets/empty.svg" alt="No results found" style="width: 150px;">
                            <p class="mt-2">No se encontro resultado</p>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <div>            
    </div>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/cliente/detalles-pedido.blade.php ENDPATH**/ ?>