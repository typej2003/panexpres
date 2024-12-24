<div>
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fa fa-regular fa-paper-plane"></i> Envio / Pickup <img src="/img/envio_pickup_i.png" alt=""></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="/listPedidosCliente">Mis Pedidos</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card" x-data="{ currentTab: $persist('changeEnvio') }">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills" wire:ignore>
                                <li @click.prevent="currentTab = 'changeEnvio'" class="nav-item"><a class="nav-link" :class="currentTab === 'changeEnvio' ? 'active' : ''" href="#changeEnvio" data-toggle="tab"><i class="fa fa-regular fa-paper-plane"></i> Envío</a></li>
                                <li @click.prevent="currentTab = 'changePickup'" class="nav-item"><a class="nav-link" :class="currentTab === 'changePickup' ? 'active' : ''" href="#changePickup" data-toggle="tab"><img src="/img/envio_pickup_i.png" alt=""> Pickup</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <div class="tab-pane" :class="currentTab === 'changeEnvio' ? 'active' : ''" id="changeEnvio" wire:ignore.self>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('afiliado.shipping-envio', ['nropedido' => $nropedido])->html();
} elseif ($_instance->childHasBeenRendered('l4008510082-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4008510082-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4008510082-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4008510082-0');
} else {
    $response = \Livewire\Livewire::mount('afiliado.shipping-envio', ['nropedido' => $nropedido]);
    $html = $response->html();
    $_instance->logRenderedChild('l4008510082-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>

                                <div class="tab-pane" :class="currentTab === 'changePickup' ? 'active' : ''" id="changePickup" wire:ignore.self>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('afiliado.shipping-centrodistribucion', ['nropedido' => $nropedido])->html();
} elseif ($_instance->childHasBeenRendered('l4008510082-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l4008510082-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4008510082-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4008510082-1');
} else {
    $response = \Livewire\Livewire::mount('afiliado.shipping-centrodistribucion', ['nropedido' => $nropedido]);
    $html = $response->html();
    $_instance->logRenderedChild('l4008510082-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>

<?php $__env->startPush('styles'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('alpine-plugins'); ?>
<!-- Alpine Plugins -->
<script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script>
    $(document).ready(function () {
        Livewire.on('nameChanged', (changedName) => {
            $('[x-ref="username"]').text(changedName);
        })
    });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/afiliado/shipping.blade.php ENDPATH**/ ?>