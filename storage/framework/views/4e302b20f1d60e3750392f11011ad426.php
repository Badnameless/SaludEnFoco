
<?php $__env->startSection('content'); ?>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <div class="max-w-screen-2xl w-full mx-auto px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8 mt-12">

        <form action="<?php echo e(route('accommodations.store')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

                <div class="flex items-center justify-between w-full">
                    
                    <a href="<?php echo e(route('accommodations.index')); ?>">
                        <button type="button" class="px-4 py-2 rounded bg-white mr-4 text-sm hover:bg-gray-100 duration-300">Volver al listado</button>
                    </a>

                    <button type="submit" class="px-6 text-white py-2 rounded text-sm bg-mundoVerdeGreen hover:bg-mundoVerdeDarkGreen duration-300">Guardar</button>
                    
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
                    <h4 class="text-lg font-normal text-gray-900">Agregar alojamiento</h4>
                </div>

                <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="nombre">Nombre</label>
                    <div class="w-full">
                        <input type="text" required name="Nombre" id="nombre" value="<?php echo e(old('Nombre')); ?>" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="provincia">Provincia</label>
                    <div class="w-full">
                        <select name="ProvinciaID" id="provincia" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            <option value="">Selecciona una provincia</option>
                            <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($provincia->ProvinciaID); ?>"><?php echo e($provincia->Nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="lugar">Lugar</label>
                    <div class="w-full">
                        <select name="LugarID" id="lugar" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            <option value="">Selecciona un lugar</option>
                            <?php $__currentLoopData = $provincia->lugares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lugar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lugar->LugarID); ?>"><?php echo e($lugar->Nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="tipo">Tipo</label>
                    <div class="w-full">
                        <select name="TipoAlojamientoID" id="Tipo" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            <option value="">Selecciona un tipo de alojamiento</option>
                            <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tipo->TipoAlojamientoID); ?>" <?php echo e(old('TipoAlojamientoID') == $tipo->TipoAlojamientoID ? 'selected' : ''); ?>><?php echo e($tipo->Nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="descripcion">Descripción</label>
                    <div class="w-full">
                        <textarea name="Descripcion" id="descripcion" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md" required></textarea>
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="telefono">Teléfono</label>
                    <div class="w-full">
                        <input type="text" required name="Telefono" id="telefono" value="<?php echo e(old('Telefono')); ?>" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="precio_por_noche">Precio por Noche</label>
                    <div class="w-full">
                        <input type="number" name="PrecioPorNoche" id="precio_por_noche" value="<?php echo e(old('PrecioPorNoche')); ?>" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>


                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="direccion">Dirección</label>
                    <div class="w-full">
                        <input type="text" name="Direccion" id="direccion" value="<?php echo e(old('Direccion')); ?>"  class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="latitud">Latitud</label>
                    <div class="w-full">
                        <input type="number" step="any" name="Latitud" id="latitud" value="<?php echo e(old('Latitud')); ?>"  class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="longitud">Longitud</label>
                    <div class="w-full">
                        <input type="number" name="Longitud" step="any" id="longitud" value="<?php echo e(old('Longitud')); ?>"  class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                 <!-- Galería -->
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

                <!-- Info Propiedad -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="info_propiedad">Información de la Propiedad</label>
                    <div class="w-full">
                        <textarea name="InfoPropiedad" id="info_propiedad" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md" required><?php echo e(old('InfoPropiedad')); ?></textarea>
                    </div>
                </div>
                
                <!-- Equipamientos -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="equipamientos">Equipamientos</label>
                    <div class="w-full">
                        <select name="Equipamientos[]" id="equipamientos" multiple="multiple" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            <?php $__currentLoopData = $equipamientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipamiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($equipamiento->EquipamientoID); ?>" <?php if(in_array($equipamiento->EquipamientoID, old('Equipamientos', []))): ?> selected <?php endif; ?>><?php echo e($equipamiento->Nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- Servicios -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="servicios">Servicios</label>
                    <div class="w-full">
                        <select name="Servicios[]" id="servicios" multiple="multiple" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($servicio->ServicioID); ?>" <?php if(in_array($servicio->ServicioID, old('Servicios', []))): ?> selected <?php endif; ?>><?php echo e($servicio->Nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- Beneficios -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="beneficios">Beneficios</label>
                    <div class="w-full">
                        <select name="Beneficios[]" id="beneficios" multiple="multiple" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            <?php $__currentLoopData = $beneficios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beneficio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($beneficio->BeneficioID); ?>" <?php if(in_array($beneficio->BeneficioID, old('Beneficios', []))): ?> selected <?php endif; ?>><?php echo e($beneficio->Nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- Extras -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="extras">Extras</label>
                    <div class="w-full">
                        <select name="Extras[]" id="extras" multiple="multiple" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            <?php $__currentLoopData = $extras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($extra->ExtraID); ?>" <?php if(in_array($extra->ExtraID, old('Extras', []))): ?> selected <?php endif; ?>><?php echo e($extra->Nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- Cancelacion -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="cancelacion">Cancelación</label>
                    <div class="w-full">
                        <textarea name="Cancelacion" id="cancelacion" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md" required><?php echo e(old('Cancelacion')); ?></textarea>
                    </div>
                </div>

                <!-- Reservar -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="reservar">Reservar</label>
                    <div class="w-full">
                        <textarea name="Reservar" id="reservar" cols="30" rows="4" class="w-full min-h-[80px] border border-gray-200 px-4 py-[8px] box-border rounded text-md" required><?php echo e(old('Reservar')); ?></textarea>
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
                $('#equipamientos').select2();
                $('#extras').select2();
                $('#beneficios').select2();
            });
        </script>

        <script>
            var provincias = <?php echo json_encode($provincias, JSON_HEX_APOS); ?>;
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
                        for (var i = 0; i < provincias.length; i++) {
                            if (provincias[i].ProvinciaID == provinciaID) {
                                for (var j = 0; j < provincias[i].lugares.length; j++) {
                                    var lugar = provincias[i].lugares[j];
                                    $('#lugar').append($('<option value="' + lugar.LugarID + '">' + lugar.Nombre + '</option>'));
                                }
                                break; // Detener la búsqueda una vez que se encuentren los lugares
                            }
                        }
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/alojamientos/create.blade.php ENDPATH**/ ?>