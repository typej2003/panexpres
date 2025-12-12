<div>
    <style>
        .pasarela {
            width: 46rem !important;"
        }

        @media  only screen and (max-width: 1070px)
        {
            .pasarela {
                width: 85% !important;"
            }   

        }
    </style>
        <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/03cf5139f1.js"></script>

    <link rel="stylesheet" href="/css/pasarela.css" class="rel">

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script src="/js/variables.js"></script>
        <script src="/js/selectMetodoPagoPasarela.js"></script>
        
    </head> 
    
    

    <div class="row d-none">
        <div class="col-md-12 mx-3">
            <span class="negrita">Información:</span>
            <div class="row">
                <div class="col-md-3">
                    <span>clienteId: <span><?php echo e($clienteId); ?></span></span>
                </div>
                <div class="col-md-3">
                    <span>identificationNac: <span><?php echo e($identificationNac); ?></span>
                </div>
                <div class="col-md-3">
                    <span>identificationNumber: <span><?php echo e($identificationNumber); ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <span>email: <span><?php echo e($email); ?></span></span>
                </div>
                <div class="col-md-3">
                    <span>cellphone: <span><?php echo e($cellphone); ?></span></span>
                </div>
                <div class="col-md-3">
                    <span>rifLetter: <span><?php echo e($rifLetter); ?></span></span>
                </div>
                <div class="col-md-3">
                    <span>rifNumber: <span><?php echo e($rifNumber); ?></span></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <span>reference: <span><?php echo e($reference); ?></span> // Pedido a pagar</span>
                </div>
                <div class="col-md-2">
                    <span>currency: <span><?php echo e($currency); ?></span></span>
                </div>
                <div class="col-md-2">
                    <span>currencyValue: <span><?php echo e($currencyValue); ?></span></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <span>amount: <span><?php echo e($amount); ?></span> //monto</span>
                </div>
                <div class="col-md-5">
                    <span>title: <span><?php echo e($title); ?></span></span>
                </div>
                <div class="col-md-5">
                    <span>description: <span><?php echo e($description); ?></span></span>
                </div>
            </div>            
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', function () {
            
            
        })        
    </script>
    <div class="container-fluid d-flex flex-row">
        <div class="row mx-auto pasarela">
            <div class="col-sm-10">
                
            </div><!-- /.col -->
            <div class="col-sm-2">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">
                        Divisa <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.currency')->html();
} elseif ($_instance->childHasBeenRendered('l4119507618-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4119507618-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4119507618-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4119507618-0');
} else {
    $response = \Livewire\Livewire::mount('components.currency');
    $html = $response->html();
    $_instance->logRenderedChild('l4119507618-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <div class="container-fluid d-flex flex-row">
        <div class="card mx-auto pasarela" >
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-lg-12" wire:ignore>
                        <div class="divPrincipal" id="divPrincipal"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<script>
    document.addEventListener('livewire:load', function () {
        var nropedido = window.livewire.find('<?php echo e($_instance->id); ?>').nropedido 
        var reference = window.livewire.find('<?php echo e($_instance->id); ?>').reference 
        var title = window.livewire.find('<?php echo e($_instance->id); ?>').title 
        var description  = window.livewire.find('<?php echo e($_instance->id); ?>').description 
        var clienteId = window.livewire.find('<?php echo e($_instance->id); ?>').clienteId 
        var amount = window.livewire.find('<?php echo e($_instance->id); ?>').amount
        var currency = window.livewire.find('<?php echo e($_instance->id); ?>').currency 
        var currencyValue  = window.livewire.find('<?php echo e($_instance->id); ?>').currencyValue 
        var email = window.livewire.find('<?php echo e($_instance->id); ?>').email 
        var cellphone = window.livewire.find('<?php echo e($_instance->id); ?>').cellphone 
        var cellphonecode = window.livewire.find('<?php echo e($_instance->id); ?>').cellphonecode 
        var identificationNac = window.livewire.find('<?php echo e($_instance->id); ?>').identificationNac
        var identificationNumber = window.livewire.find('<?php echo e($_instance->id); ?>').identificationNumber
        var rifLetter = 'J';
        var rifNumber = ''; // J G

        var bancos = window.livewire.find('<?php echo e($_instance->id); ?>').bancos;
        var pagosmoviles = window.livewire.find('<?php echo e($_instance->id); ?>').pagosmoviles;
        var transferencias = window.livewire.find('<?php echo e($_instance->id); ?>').transferencias;
        var zelles = window.livewire.find('<?php echo e($_instance->id); ?>').zelles;
        var paypals = window.livewire.find('<?php echo e($_instance->id); ?>').paypals;

        var comercio_id = window.livewire.find('<?php echo e($_instance->id); ?>').comercio_id;
        
        //console.log(bancos)

        let divPrincipal = document.getElementById('divPrincipal')
        divPrincipal.appendChild(selectMetodoPago(0, comercio_id, nropedido, reference, title, description, clienteId,amount,currency,currencyValue,email,cellphonecode, cellphone, identificationNac, identificationNumber,rifLetter, rifNumber, bancos, pagosmoviles, transferencias, zelles, paypals))  
    })
    
</script>


<script>    
    window.addEventListener('sendWelcome', function (event) {
        
        location.href = '/';
    });

    window.addEventListener('sendProcesado', function (event) {
        alert('sendProcesado');
        location.href = '/procesado';
    });
    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/afiliado/pasarela.blade.php ENDPATH**/ ?>