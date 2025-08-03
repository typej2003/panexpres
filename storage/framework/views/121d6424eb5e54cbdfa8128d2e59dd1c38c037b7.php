<div class="div-currency d-flex">
    <link rel="stylesheet" href="/css/navbar.css">
    <ul class="nav w-40 d-flex justify-content-between mx-auto ">
        <li class="nav-item dropdown d-flex justify-content-between align-items-center">
            <div class="currency mx-1">
                <select class="form-control" wire:change="changeCurrency($event.target.value)" style="cursor:pointer;">
                    <option value="Bs" <?php echo e(($currencyValue === 'Bs') ? 'selected' : ''); ?>>Bs</option>
                    <option value="$" <?php echo e(($currencyValue === '$') ? 'selected' : ''); ?>>$</option>
                </select>
            </div>            
        </li>
        <!-- <li class="nav-item dropdown ms-auto tasacambio"><span class="nav-link">$: <?php echo e($tasacambio); ?> Bs.</span></li>         -->
    </ul>


    <script>
        
    </script>
</div><?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/currency.blade.php ENDPATH**/ ?>