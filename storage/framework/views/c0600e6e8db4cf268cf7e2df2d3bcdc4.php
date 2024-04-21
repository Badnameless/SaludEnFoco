<?php $__env->startSection('lugares-edit-form-es'); ?>
<form action="<?php echo e(route('places.update', $lugar->LugarID)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

        <div class="flex items-center justify-between w-full">
            
            <a href="<?php echo e(route('places.index')); ?>">
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
            <h4 class="text-lg font-normal text-gray-900">Editar Sitio Turistico</h4>
        </div>

        <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
            <!-- Campo Nombre -->
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="name">Nombre</label>
                <div class="w-full">
                    <input type="text" name="Nombre" id="name" value="<?php echo e($lugar->Nombre); ?>" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                </div>
            </div>

            <!-- Campo ProvinciaID -->
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="provincia">Provincia</label>
                <div class="w-full">
                    <select name="ProvinciaID" id="provincia" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                        <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($provincia->ProvinciaID); ?>"
                            <?php echo e($provincia->ProvinciaID == $lugar->ProvinciaID ? 'selected' : ''); ?>>
                            <?php echo e($provincia->Nombre); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <!-- Campo Tipo -->
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="tipo">Tipo</label>
                <div class="w-full">
                    <select name="TipoSitioID" id="Tipo" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                        <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tipo->TipoSitioID); ?>" <?php echo e($lugar->TipoSitioID == $tipo->TipoSitioID ? 'selected' : ''); ?>><?php echo e($tipo->Nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <!-- Campo Descripción -->
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="description">Descripción</label>
                <div class="w-full">
                    <textarea name="Descripcion" id="description" cols="30" rows="16" class="w-full min-h-[150px] border border-gray-200 px-4 py-[8px] box-border rounded text-md" required><?php echo e($lugar->Descripcion); ?></textarea>
                </div>
            </div>

            <!-- Campo Latitud -->
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="latitud">Latitud</label>
                <div class="w-full">
                    <input type="text" name="Latitud" id="latitud" value="<?php echo e($lugar->Latitud); ?>" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                </div>
            </div>

            <!-- Campo Longitud -->
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="longitud">Longitud</label>
                <div class="w-full">
                    <input type="text" name="Longitud" id="longitud" value="<?php echo e($lugar->Longitud); ?>" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                </div>
            </div>

            <!-- Campo Actividades -->
            <?php
                $actividadesSeleccionadas = json_decode($lugar->Actividades, true) ?? [];
            ?>
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="actividades">Actividades</label>
                <div class="w-full">
                    <select name="Actividades[]" id="actividades" multiple="multiple" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                        <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($actividad->ActividadID); ?>" <?php if(in_array($actividad->ActividadID, $lugar->actividades->pluck('ActividadID')->toArray())): ?> selected <?php endif; ?>><?php echo e($actividad->Nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <!-- Galeria -->
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="image">Imagen</label>
                <div class="w-full flex flex-wrap">
                    <?php $__currentLoopData = $lugar->Galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('storage/lugares/' . $imagen)); ?>" alt="<?php echo e($lugar->Nombre); ?>" class="mt-4 mb-4 mr-4 max-w-[200px]">
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
                            <?php if($lugar->Estado): ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('lugares-edit-form-en'); ?>
<form action="<?php echo e(route('places.update_translation', $lugar->LugarID)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

        <div class="flex items-center justify-between w-full">
            
            <a href="<?php echo e(route('places.index')); ?>">
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
            <h4 class="text-lg font-normal text-gray-900">Editar Sitio Turistico</h4>
        </div>

        <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
            <!-- Campo Descripción -->
            <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="description">Descripción</label>
                <div class="w-full">
                    <textarea name="Descripcion" id="description" cols="30" rows="16" class="w-full min-h-[150px] border border-gray-200 px-4 py-[8px] box-border rounded text-md" required><?php echo e($lugar->Descripcion); ?></textarea>
                </div>
            </div>
        </div>
    </div>

</form>

<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/lugares/forms.blade.php ENDPATH**/ ?>