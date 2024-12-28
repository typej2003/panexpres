<div>
    <style>
        .cuadro {
            height: auto !important;
            box-shadow: 5px 5px 15px gray;
            margin-bottom: 10px;
            padding: 15px;
        }

        .imgProduct {
            width: 250px !important; height: 200px !important;
        }

        .negrita {
            font-weight: bold;
        }

        @media  screen and (max-width: 768px) {
            .imgProduct {
                width: 350px !important; height: 200px !important;
            }
            .description {
                height: auto !important;
                text-align: justify;
                padding: 15px !important;
            }
            .cuadro {
                height: 540px !important;
            }
        }
    </style>
    <button wire:click.prevent="nueva" class="btn btn-sale text-center">Prueba</button>
</div>
<?php /**PATH C:\Users\typej\Documents\git\panexpres\resources\views/livewire/components/results-products1.blade.php ENDPATH**/ ?>