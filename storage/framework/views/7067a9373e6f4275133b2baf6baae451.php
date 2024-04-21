<?php $__env->startSection('eventos-edit-form-es'); ?>
    <form action="<?php echo e(route('events.update', $evento->EventoID)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

            <div class="flex items-center justify-between w-full">

                <a href="<?php echo e(route('events.index')); ?>">
                    <button type="button"
                        class="px-4 py-2 rounded bg-white mr-4 text-sm hover:bg-gray-100 duration-300">Volver al
                        listado</button>
                </a>

                <button type="submit"
                    class="px-6 text-white py-2 rounded text-sm bg-mundoVerdeGreen hover:bg-mundoVerdeDarkGreen duration-300">Editar</button>

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
                <h4 class="text-lg font-normal text-gray-900">Editar Evento</h4>
            </div>

            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
                <!-- Campo Nombre -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="name">Nombre</label>
                    <div class="w-full">
                        <input type="text" name="Nombre" id="name" value="<?php echo e($evento->Nombre); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <!-- Campo ProvinciaID -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="provincia">Provincia</label>
                    <div class="w-full">
                        <select name="ProvinciaID" id="provincia"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($provincia->ProvinciaID); ?>"
                                    <?php echo e($provincia->ProvinciaID == $evento->ProvinciaID ? 'selected' : ''); ?>>
                                    <?php echo e($provincia->Nombre); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <!-- Campo Descripción -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="description">Descripción</label>
                    <div class="w-full">
                        <textarea name="Descripcion" id="description" cols="30" rows="16"
                            class="w-full min-h-[150px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($evento->Descripcion); ?></textarea>
                    </div>
                </div>

                <!-- Campo Tipo -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="tipo">Tipo</label>
                    <div class="w-full">
                        <select name="Tipo" id="tipo" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <option value="">Seleccionar el tipo</option>
                            <option value="Tipo 1" <?php echo e($evento->Tipo == 'Tipo 1' ? 'selected' : ''); ?>>Tipo 1</option>
                        </select>
                    </div>
                </div>

                <!-- Campo Latitud -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="latitud">Latitud</label>
                    <div class="w-full">
                        <input type="text" name="Latitud" id="latitud" value="<?php echo e($evento->Latitud); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <!-- Campo Longitud -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="longitud">Longitud</label>
                    <div class="w-full">
                        <input type="text" name="Longitud" id="longitud" value="<?php echo e($evento->Longitud); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <!-- Campo FechaHora -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="fechaHora">Fecha y Hora</label>
                    <div class="w-full">
                        <input type="datetime" name="FechaHora" id="fechaHora" value="<?php echo e($evento->FechaHora); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <!-- Campo Lugar -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="lugar">Lugar</label>
                    <div class="w-full">
                        <input type="text" name="Lugar" id="lugar" value="<?php echo e($evento->Lugar); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="image">Imagen</label>
                    <div class="w-full">
                        <div class="flex items-center mb-8 gap-8">
                            <label for="hidden_filters" class="text-sm w-150px">
                                Imagen
                            </label>
                            <div class="flex items-center w-full">
                                <label
                                    class="labelImage h-35px box-border w-full flex items-center px-4 border border-r-0 border-gray-200"
                                    for="image">Seleccionar archivo</label>
                                <div class="h-35px w-full px-4 box-border border border-gray-200 border-r-0">
                                    <input class="h-35px box-border w-full appearence-none opacity-0 invisible"
                                        type="file" name="Imagen" id="image">
                                </div>
                                <button type="button"
                                    class="clearImages h-35px px-4 box-border bg-red-500 text-white rounded-r-md hover:bg-red-700 duration-300 text-sm"><i
                                        class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                        <img src="<?php echo e(asset('storage/eventos/' . $evento->Imagen)); ?>" alt="<?php echo e($evento->Nombre); ?>"
                            class="mt-4 mb-4">
                        <div id="vistaPrevia" class="mt-4 mb-4" style="display: none;">
                            <div class="closeIcon">
                                X
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <div
                        class="bodyContainer__productData--table-inputs-input flex items-center mb-4 pr-4 max-w-xl w-full">
                        <div>
                            <label for="estado"
                                class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[192px]">Estado</label>
                        </div>
                        <div>
                            <label class="switch">
                                <input type="checkbox" name="Estado" id="state"
                                    <?php if($evento->Estado): ?> checked <?php endif; ?>>
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

<?php $__env->startSection('eventos-edit-form-en'); ?>
    <form action="<?php echo e(route('events.update_translation', $evento->EventoID)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

            <div class="flex items-center justify-between w-full">

                <a href="<?php echo e(route('events.index')); ?>">
                    <button type="button"
                        class="px-4 py-2 rounded bg-white mr-4 text-sm hover:bg-gray-100 duration-300">Volver al
                        listado</button>
                </a>

                <button type="submit"
                    class="px-6 text-white py-2 rounded text-sm bg-mundoVerdeGreen hover:bg-mundoVerdeDarkGreen duration-300">Editar</button>

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
                <h4 class="text-lg font-normal text-gray-900">Editar Evento</h4>
            </div>

            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
                <!-- Campo Nombre -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="name">Nombre</label>
                    <div class="w-full">
                        <input type="text" name="Nombre" id="name" value="<?php echo e($evento->Nombre); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <!-- Campo Descripción -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="description">Descripción</label>
                    <div class="w-full">
                        <textarea name="Descripcion" id="description" cols="30" rows="16"
                            class="w-full min-h-[150px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($evento->Descripcion); ?></textarea>
                    </div>
                </div>

                <!-- Campo Tipo -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="tipo">Tipo</label>
                    <div class="w-full">
                        <input type="text" name="Tipo" id="tipo" value="<?php echo e($evento->Tipo); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

                <!-- Campo Lugar -->
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="lugar">Lugar</label>
                    <div class="w-full">
                        <input type="text" name="Lugar" id="lugar" value="<?php echo e($evento->Lugar); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>

            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/eventos/forms.blade.php ENDPATH**/ ?>