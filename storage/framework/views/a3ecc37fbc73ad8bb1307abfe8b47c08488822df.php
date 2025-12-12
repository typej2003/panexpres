<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-checkout')->html();
} elseif ($_instance->childHasBeenRendered('HxKBtHi')) {
    $componentId = $_instance->getRenderedChildComponentId('HxKBtHi');
    $componentTag = $_instance->getRenderedChildComponentTagName('HxKBtHi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HxKBtHi');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-checkout');
    $html = $response->html();
    $_instance->logRenderedChild('HxKBtHi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<div class="container-fluid">
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="/listPedidosCliente">Mis Pedidos</a></li>
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
                        <div class="card" style="width: 100% !important;">
                            <div class="card-body text-center">
                                <h1>Operación procesada con éxito</h1>
                                <h4>Nro Pedido: <span class="bg-warning p-1 rounded"><?php echo e($nropedido); ?></span></h4>
                                <p>
                                    Su pago esta siendo validado por nuestro equipo de venta
                                </p>
                                <p>
                                    <a class="h5 text-titulo" href="/">Seguir comprando</a>
                                </p>
                                <p >
                                    <a class="h5 text-titulo" href="/listPedidosCliente">Mis Pedidos</a>
                                </p>
                                <p class="h4">
                                    Ponte en contacto con nuestro equipo a través de nuestro whatsapp: 
                                    <a href="https://api.whatsapp.com/send?phone=+58<?php echo e($comercio->contactcellphone); ?>&text=<?php echo e($comercio->msgcontact); ?>" target="_blank"><?php echo e($comercio->contactcellphone); ?></a> 
                                </p>
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
        

    </div>
</div>

<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>

<!-- <script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.6.4.min.js"></script> -->
<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldPushContent('before-livewire-scripts'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('after-livewire-scripts'); ?>


<?php echo $__env->yieldPushContent('alpine-plugins'); ?>
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<SCRIPT LANGUAGE="JavaScript">
// history.forward()
</SCRIPT><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/externalviews/procesado.blade.php ENDPATH**/ ?>