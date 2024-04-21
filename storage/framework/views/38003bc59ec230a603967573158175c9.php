
<?php $__env->startSection('content'); ?>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <div class="max-w-screen-2xl w-full mx-auto px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8 mt-12">
    
    <form action="<?php echo e(route('accommodations.update', $alojamiento->AlojamientoID)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

            <div class="flex items-center justify-between w-full">
                
                <a href="<?php echo e(route('accommodations.index')); ?>">
                    <button type="button" class="px-4 py-2 rounded bg-white mr-4 text-sm hover:bg-gray-100 duration-300">Volver al listado</button>
                </a>

                <button type="submit" class="px-6 text-white py-2 rounded text-sm bg-mundoVerdeGreen hover:bg-mundoVerdeDarkGreen duration-300">Editar</button>
                
            </div>

        </div>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="bg-white rounded-md max-w-[65%] mx-auto">

            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-lg font-normal text-gray-900">Editar Alojamiento</h4>
            </div>

            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="nombre">Nombre</label>
                    <div class="w-full">
                        <input type="text" required name="Nombre" value="<?php echo e($alojamiento->Nombre); ?>"  id="nombre" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="provincia">Provincia</label>
                    <div class="w-full">
                        <select name="ProvinciaID" id="provincia" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <option value="<?php echo e($alojamiento->ProvinciaID); ?>"><?php echo e($alojamiento->provincia->Nombre); ?></option>
                            <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($provincia->ProvinciaID); ?>"><?php echo e($provincia->Nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="lugar">Lugar</label>
                    <div class="w-full">
                        <select name="LugarID" id="lugar" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <option value="<?php echo e($alojamiento->LugarID); ?>"><?php echo e($alojamiento->lugar->Nombre); ?></option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="tipo">Tipo</label>
                    <div class="w-full">
                        <select name="Tipo" id="Tipo" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <option value="">Seleccionar el tipo</option>
                            <option value="1" <?php echo e($alojamiento->Tipo == '1' ? 'selected' : ''); ?>>Tipo 1</option>
                            <option value="2" <?php echo e($alojamiento->Tipo == '2' ? 'selected' : ''); ?>>Tipo 2</option>
                        </select>
                    </div>
                </div>
                
                <!-- Campo Descripción -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="descripcion">Descripción</label>
                    <div class="w-full">
                        <textarea name="Descripcion" id="descripcion" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($alojamiento->Descripcion); ?></textarea>
                    </div>
                </div>
                
                <!-- Campo Teléfono -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="telefono">Teléfono</label>
                    <div class="w-full">
                        <input type="text" required name="Telefono" value="<?php echo e($alojamiento->Telefono); ?>" id="telefono" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                
                <!-- Campo Precio por Noche -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="precio_por_noche">Precio por Noche</label>
                    <div class="w-full">
                        <input type="number" name="PrecioPorNoche"  value="<?php echo e($alojamiento->PrecioPorNoche); ?>" id="precio_por_noche" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <?php
                    $serviciosSeleccionadas = json_decode($alojamiento->Servicios, true) ?? [];
                ?>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="servicios">Servicios</label>
                    <div class="w-full">
                        <select name="Servicios[]" id="servicios" multiple="multiple" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <option value="">Seleccione la actividad</option>
                            <option value="1" <?php echo e(in_array(1, $serviciosSeleccionadas) ? 'selected' : ''); ?>>Servicio 1</option>
                            <option value="2" <?php echo e(in_array(2, $serviciosSeleccionadas) ? 'selected' : ''); ?>>Servicio 2</option>
                        </select>
                    </div>
                </div>
                
                <!-- Campo Dirección -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="direccion">Dirección</label>
                    <div class="w-full">
                        <input type="text" name="Direccion" value="<?php echo e($alojamiento->Direccion); ?>" id="direccion" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                
                <!-- Campo Latitud -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="latitud">Latitud</label>
                    <div class="w-full">
                        <input type="number" step="any" name="Latitud" value="<?php echo e($alojamiento->Latitud); ?>" id="latitud" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                
                <!-- Campo Longitud -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="longitud">Longitud</label>
                    <div class="w-full">
                        <input type="number" step="any" name="Longitud" value="<?php echo e($alojamiento->Longitud); ?>" id="longitud" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" >
                    </div>
                </div>
                
                <!-- Disponibilidad -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="disponibilidad">Disponibilidad</label>
                    <div class="w-full">
                        <input type="text" name="Disponibilidad" id="disponibilidad" value="<?php echo e($alojamiento->Disponibilidad); ?>"  class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <!-- Info Propiedad -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="info_propiedad">Información de la Propiedad</label>
                    <div class="w-full">
                        <textarea name="InfoPropiedad" id="info_propiedad" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($alojamiento->InfoPropiedad); ?></textarea>
                    </div>
                </div>

                <!-- Info Beneficio -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="info_beneficio">Información de Beneficio</label>
                    <div class="w-full">
                        <?php
                            $infoBeneficio = App\Models\Infobeneficio::get();  
                            $infoBeneficioSeleccionados = json_decode($alojamiento->InfoBeneficio, true) ?? []; 
                        ?>
                        <select name="InfoBeneficio[]" id="info_beneficio" multiple="multiple" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <?php $__currentLoopData = $infoBeneficio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($info->InfobeneficioID); ?>" <?php echo e(in_array($info->InfobeneficioID, $infoBeneficioSeleccionados) ? 'selected' : ''); ?>>
                                    <?php echo e($info->Nombre); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
                </div>

                <!-- Equipamiento -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="equipamiento">Equipamiento</label>
                    <div class="w-full">
                        <?php
                            $equipamientos = App\Models\Tecnologia::get();  
                            $equipamientosSeleccionados = json_decode($alojamiento->Equipamiento, true) ?? []; 
                        ?>
                        <select name="Equipamiento[]" id="equipamiento" multiple="multiple" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <?php $__currentLoopData = $equipamientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipamiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($equipamiento->TecnologiaID); ?>" <?php echo e(in_array($equipamiento->TecnologiaID, $equipamientosSeleccionados) ? 'selected' : ''); ?>>
                                    <?php echo e($equipamiento->Nombre); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- Info Barrio -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="info_barrio">Información del Barrio</label>
                    <div class="w-full">
                        <textarea name="InfoBarrio" id="info_barrio" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($alojamiento->InfoBarrio); ?></textarea>
                    </div>
                </div>

                <!-- Saber Más -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="saber_mas">Saber Más</label>
                    <div class="w-full">
                        <textarea name="SaberMas" id="saber_mas" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($alojamiento->SaberMas); ?></textarea>
                    </div>
                </div>

                <!-- Reservar -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="reservar">Reservar</label>
                    <div class="w-full">
                        <textarea name="Reservar" id="reservar" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($alojamiento->Reservar); ?></textarea>
                    </div>
                </div>
                <!-- Galeria -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="image">Imagen</label>
                    <div class="w-full flex flex-wrap">
                        <?php $__currentLoopData = $alojamiento->Galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('storage/alojamientos/' . $imagen)); ?>" alt="<?php echo e($alojamiento->Nombre); ?>" class="mt-4 mb-4 mr-4 max-h-[150px] max-w-[150px]">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="Galeria">Galeria</label>
                    <div class="w-full">
                        <div class="flex items-center gap-8">
                            <div class="flex items-center w-full">
                                <label class="labelImage h-35px box-border w-full flex items-center px-4 border border-r-0 border-gray-200" for="image">Seleccionar archivo</label>
                                <div class="h-35px w-full px-4 box-border border border-gray-200 border-r-0">
                                    <input class="h-35px box-border w-full appearence-none opacity-0 invisible" type="file" name="Galeria[]" id="image" multiple>
                                </div>
                                <button type="button" class="clearImages h-35px px-4 box-border bg-red-500 text-white rounded-r-md hover:bg-red-700 duration-300 text-sm"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>

                        <div id="vistaPrevia" class="mt-4 mb-4" style="display: none;">
                            <div class="closeIcon">
                                X  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <div class="bodyContainer__productData--table-inputs-input flex items-center mb-4 pr-4 max-w-xl w-full">
                        <div>
                            <label for="estado" class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[192px]">Estado</label>
                        </div>
                        <div>
                            <label class="switch">
                                <input type="checkbox" name="Estado" id="state" 
                                <?php if($alojamiento->Estado): ?>
                                    checked
                                <?php endif; ?>
                                >
                                <span class="slider round"></span>
                            </label>
                            <script>
                                const stateCheckbox = document.querySelector("#state");

                                function updateStateValue() {
                                    const stateValue = stateCheckbox.checked;
                                    stateCheckbox.value = stateValue;
                                }

                                stateCheckbox.addEventListener("change", updateStateValue);
                                updateStateValue();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </form>
        
    </div>

        <style>

            #vistaPrevia {
                width: 200px;
                height: 200px;
                background-color: #f1f1f1;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                position: relative;
            }
            .closeIcon {
                position: absolute;
                top: 15px;
                right: 15px;
                width: 25px;
                height: 25px;
                background-color: red;
                color: #fff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#servicios').select2();
            $('#equipamiento').select2();
            $('#info_beneficio').select2();
        });
    </script>
        
        <script>
            $(document).ready(function () {
                $('#provincia').on('change', function () {
                    var provinciaID = $(this).val();

                    // Limpia el select de lugares
                    $('#lugar').empty();
                    $('#lugar').append($('<option value="">Selecciona un lugar</option>'));

                    // Si se ha seleccionado una provincia, agrega las opciones de lugares
                    if (provinciaID) {
                        <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            if (<?php echo e($provincia->ProvinciaID); ?> == provinciaID) {
                                <?php $__currentLoopData = $provincia->lugares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lugar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    $('#lugar').append($('<option value="<?php echo e($lugar->LugarID); ?>"><?php echo e($lugar->Nombre); ?></option>'));
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            }
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    }
                });
            });
        </script>

<script>
  document.addEventListener("DOMContentLoaded", ()=>{

    document.querySelector(".closeIcon").addEventListener("click", ()=>{
        document.getElementById('vistaPrevia').style.backgroundImage = "url('')";
        document.getElementById('vistaPrevia').style.display = "none";
        document.getElementById('image').value = "";
        document.querySelector(".labelImage ").innerHTML = "Seleccionar archivo";

    })

    document.querySelector(".clearImages").addEventListener("click", ()=>{
        document.getElementById('vistaPrevia').style.backgroundImage = "url('')";
        document.getElementById('vistaPrevia').style.display = "none";
        document.getElementById('image').value = "";
        document.querySelector(".labelImage ").innerHTML = "Seleccionar archivo";

    })

    })

    document.getElementById('image').addEventListener('change', function(event) {
    var archivo = event.target.files[0];
    var lector = new FileReader();

    lector.onload = function(e) {
        document.getElementById('vistaPrevia').style.backgroundImage = "url('" + e.target.result + "')";
        document.getElementById('vistaPrevia').style.display = "block";
        document.querySelector(".labelImage ").innerHTML = archivo.name;
    }

    document.querySelector(".closeIcon").addEventListener("click", ()=>{
        document.getElementById('vistaPrevia').style.backgroundImage = "url('')";
        document.getElementById('vistaPrevia').style.display = "none";
        document.getElementById('image').value = "";
        document.querySelector(".labelImage ").innerHTML = "Seleccionar archivo";

    })

    document.querySelector(".clearImages").addEventListener("click", ()=>{
        document.getElementById('vistaPrevia').style.backgroundImage = "url('')";
        document.getElementById('vistaPrevia').style.display = "none";
        document.getElementById('image').value = "";
        document.querySelector(".labelImage ").innerHTML = "Seleccionar archivo";

    })

    lector.readAsDataURL(archivo);
    });

</script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/alojamientos/edit.blade.php ENDPATH**/ ?>