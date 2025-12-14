<div>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compra y vende Pan de Jamón y Combos Navideños Caracas">
    <meta name="keywords" content="vende, compra, Pan, Jamón, Pan de Jamón, Combos Navideños, Caracas, directo a tu mesa, @panexpres.vezla, Panexprés, Panexpres">
    <link rel="shortcut icon" type="x-icon" href="/img/panexpres_logo.png" />
    <title>PanExprés</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <livewire:styles />
    <style>
        /* Definición de la fila */
        .profile-option-three {
            /* Creamos tres columnas: 48px para imagen, auto para el cuerpo, 48px para el radio */
            grid-template-columns: 48px auto 48px; 
            gap: 0px; 
            padding: 0px;
            /* ... otros estilos de borde y transición ... */
            display: grid; /* <-- Esto es lo que crea la fila/grid */
            gap: 0px;
            align-items: center;
        }

        /* Mapeo de los elementos a sus respectivas columnas */
        .profile-option-three .option-img {
            grid-column: 1; /* Columna 1: Imagen */
            padding: 5px;
        }
        .profile-option-three .option-body {
            grid-column: 2; /* Columna 2: Texto/Subtítulo (Ocupa el espacio 'auto') */
            padding: 12px;
        }
        .profile-option-three .option-radio {
            grid-column: 3; /* Columna 3: Radio Button */
            padding: 10px;
        }
    </style>
    <div class="formapago p-4 bg-white rounded shadow mb-3">
        <div class="">
            <h2 class="text-primary mb-4">FORMA DE PAGO</h2>
            <h4 class="mb-4">Selecciona tu forma de pago</h4>

            <!-- DIV donde se listarán los perfiles -->
            <div id="formapago-list-container" class="mb-4">
                <!-- <input type="radio" value="pasarela"> Pasarela</span>
                <input type="radio" value="kiosko"> Kiosko -->
            </div>

            <div id="message-areaFP"></div>

        </div>
        <div class="d-flex gap-2">
            <button id="submit-buttonFP" wire:click.prevent="submitConfirmacion" class="btn btn-secondary w-100 mt-3" disabled>
                Confirmar Selección
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            const loadingMessage = document.getElementById('loading-message');
            const messageArea = document.getElementById('message-area');
            const messageAreaFP = document.getElementById('message-areaFP');
            const submitButton = document.getElementById('submit-button');

            const containerFP = document.getElementById('formapago-list-container');
            const submitButtonFP = document.getElementById('submit-buttonFP');

            // contenedores para navegación entre pasos
            const formapagoDiv = document.querySelector('.formapago');
            const pasarelabdvDiv = document.querySelector('.pasarelabdv');
            const confirmarPasarelaBtn = document.getElementById('confirmar-pasarela');
            /**
             * Muestra un mensaje de alerta en la interfaz.
             */
            function showMessage(message, type = 'danger') {
                messageArea.innerHTML = `
                    <div class="alert alert-${type} fade show" role="alert">
                        ${message}
                    </div>
                `;
            }
            function showMessageFP(message, type = 'danger') {
                messageAreaFP.innerHTML = `
                    <div class="alert alert-${type} fade show" role="alert">
                        ${message}
                    </div>
                `;
            }

            /**
             * Despliega las forma de pago en el DIV.
             * @param {Array} profiles - Arreglo de formas de pago.
             */
            function displayFormapago() {
                containerFP.innerHTML = ''; // Limpiar el contenido anterior (el spinner)
                
                let forma = [
                    { name: "Pasarela", value: "pasarela" }, // Índice 0 automáticamente
                    { name: "Pago Móvil", value: "pagomovil" },  // Índice 1 automáticamente
                    { name: "Transferencia", value: "transferencia" },  // Índice 2 automáticamente
                ];

                switch (@this.currencyValue) {
                    case 'Bs':
                        forma = [
                            { name: "Pasarela", value: "pasarela" }, // Índice 0 automáticamente
                            { name: "Pago Móvil", value: "pagomovil" },  // Índice 1 automáticamente
                            { name: "Transferencia", value: "transferencia" },  // Índice 2 automáticamente
                            ];
                        break;
                
                    case '$':
                        forma = [
                                    { name: "Zelle", value: "zelle" }, // Índice 0 automáticamente
                                    { name: "Paypal", value: "paypal" }  // Índice 1 automáticamente
                                ];
                        break;
                }



                forma.forEach((formapago, index) => {
                    
                    // El objeto 'formapago' 
                    
                    const formapagoName = formapago.name;
                    
                    // Creamos un ID único para los elementos HTML
                    const elementFPId = `formapago-radio-${index}`;

                    // --- 1. Crear el Input Radio (Input Oculto) ---
                    const radioInputFP = document.createElement('input');
                    radioInputFP.type = 'radio';
                    radioInputFP.className = 'form-check-input';
                    radioInputFP.name = 'pasarelaFormapago';
                    radioInputFP.id = elementFPId;
                    radioInputFP.value = formapagoName;
                    
                    // Habilitar el botón al seleccionar, marcar la etiqueta como seleccionada y cambiar iconos
                    radioInputFP.addEventListener('change', () => {

                        submitButtonFP.disabled = false;
                        // quitar selected solo en formapago
                        containerFP.querySelectorAll('.profile-option-three').forEach(l => l.classList.remove('selected'));
                        radioLabelFP.classList.add('selected');

                        // resetear todas las imágenes a gris
                        containerFP.querySelectorAll('img').forEach(img => {
                            const id = img.id.replace('-img','');
                            // si el input relacionado tiene dataset, usarlo
                            // buscamos el input hermano dentro de la misma label
                            const label = img.closest('.profile-option');
                            if(label){
                                const inputEl = label.querySelector('input[type="radio"]');
                                if(inputEl && inputEl.dataset.imgGrey){
                                    img.src = inputEl.dataset.imgGrey;
                                }
                            }
                        });

                        // poner la imagen seleccionada en azul
                        const selectedImg = radioLabelFP.querySelector('img');
                        if (selectedImg && radioInputFP.dataset.imgBlue) {
                            selectedImg.src = radioInputFP.dataset.imgBlue;
                        }

                        const selectedSub = radioLabelFP.querySelector('.option-sub')
                       
                        // 3. Obtén el texto
                        let textoObtenido = '';
                        if (selectedSub) {
                            textoObtenido = selectedSub.textContent.trim();
                            if(textoObtenido) {
                                @this.set('formapago', textoObtenido, true);
                                console.log(textoObtenido)
                            }
                        }                        

                    });

                    // --- 2. Crear el Label (Elemento Visible) ---
                    const radioLabelFP = document.createElement('label');
                    radioLabelFP.htmlFor = elementFPId;
                    
                    radioLabelFP.className = 'profile-option d-block profile-option-three mb-3';
                    
                    let imgGrey
                    let imgBlue
                    let subtitle

                    let currency = @this.currencyValue

                    if(currency == 'Bs'){
                        // elegir iconos por tipo
                        imgGrey = index === 0 ? './img/icono_pasarela_gris.png' : './img/icono_kiosko_gris.png';
                        imgBlue = index === 0 ? './img/icono_pasarela_azul.png' : './img/icono_kiosko_azul.png';

                        subtitle = index === 0 ? 'Biopago BDV' : 'Pide tu Ticket';
                    }
                    if(currency == '$'){
                        // elegir iconos por tipo
                        imgGrey = index === 0 ? './img/icono_pasarela_gris.png' : './img/icono_kiosko_gris.png';
                        imgBlue = index === 0 ? './img/icono_pasarela_azul.png' : './img/icono_kiosko_azul.png';

                        subtitle = index === 0 ? '' : '';
                    }
                    
                    
                    radioLabelFP.innerHTML = `
                        <div class="profile-option">
                            <div class="profile-option-three">
                                <div class="option-img"><img id="${elementFPId}-img" src="${imgGrey}" alt="${formapagoName}"/></div>
                                <div class="option-body"><strong class="text-dark">${formapagoName}</strong><div class="option-sub">${subtitle}</div></div>
                                <div class="option-radio"></div>                            
                            </div>
                        </div>
                    `;

                    // guardamos las rutas en data-attrs para poder intercambiarlas
                    radioInputFP.dataset.imgGrey = imgGrey;
                    radioInputFP.dataset.imgBlue = imgBlue;

                    // --- 3. Insertar input dentro del slot de radio y añadirlo al contenedor ---
                    radioLabelFP.querySelector('.option-radio').appendChild(radioInputFP);
                    containerFP.appendChild(radioLabelFP);
                });

                // Mover el botón Confirmar y Volver debajo de la lista de formapago
                const submitBtnFP = document.getElementById('submit-buttonFP');
                const fpWrapper = document.createElement('div');
                fpWrapper.className = 'd-flex gap-2 mt-3';
                if (submitBtnFP) {
                    if (submitBtnFP.parentNode) submitBtnFP.parentNode.removeChild(submitBtnFP);
                    submitBtnFP.classList.remove('mt-3');
                    fpWrapper.appendChild(submitBtnFP);
                }
                
                
                containerFP.appendChild(fpWrapper);
            }
            
            displayFormapago();

            // Manejador del botón de envío en "formapago": oculta formapago y muestra pasarelabdv solo si se eligió "Pasarela".
            submitButtonFP.addEventListener('click', () => {
                selectedRadioFP = document.querySelector('input[name="pasarelaFormapago"]:checked');
                if (selectedRadioFP) {
                    const val = String(selectedRadioFP.value).trim().toLowerCase();
                    showMessageFP(`Forma de pago seleccionada: <strong>${selectedRadioFP.value}</strong>.`, 'success');

                    if (val === 'pasarela') {
                        // Mostrar pasarela
                        formapagoDiv.classList.add('d-none');
                        pasarelabdvDiv.classList.remove('d-none');
                        pasarelabdvDiv.scrollIntoView({ behavior: 'smooth' });
            
                    } else {
                        // Para otras formas (ej. "Kiosko") no mostramos la pasarela
                        showMessageFP('Has seleccionado "Kiosko". No se abrirá la pasarela de pago.', 'info');
                    }
                } else {
                    showMessageFP('Por favor selecciona un plan antes de continuar.', 'warning');
                }
            });

        });
    </script>
@stack('js')
@stack('before-livewire-scripts')
<livewire:scripts />
@stack('after-livewire-scripts')

@stack('alpine-plugins')

</div>