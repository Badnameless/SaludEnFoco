<?php $__env->startSection('provincias-edit-form-es'); ?>
    <form action="<?php echo e(route('update', $provincia->ProvinciaID)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

            <div class="flex items-center justify-between w-full">

                <a href="<?php echo e(route('index')); ?>">
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
                <h4 class="text-lg font-normal text-gray-900">Editar provincia</h4>
            </div>

            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">

                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="name">Nombre</label>
                    <div class="w-full">
                        <input type="text" name="Nombre" id="name" value="<?php echo e($provincia->Nombre); ?>"
                            class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="description">Descripcion</label>
                    <div class="w-full">
                        <textarea name="Descripcion" id="description" cols="30" rows="16"
                            class="w-full min-h-[150px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($provincia->Descripcion); ?></textarea>
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="image">Imagen</label>
                    <div class="w-full">
                        <div class="flex items-center gap-8">
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
                        <img src="<?php echo e(asset('storage/provincias/' . $provincia->Imagen)); ?>" alt="<?php echo e($provincia->Nombre); ?>"
                            class="mt-4 mb-4">
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
                            <label for="estado"
                                class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[192px]">Estado</label>
                        </div>
                        <div>
                            <label class="switch">
                                <input type="checkbox" name="Estado" id="state"
                                    <?php if($provincia->Estado): ?> checked <?php endif; ?>>
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

<?php $__env->startSection('provincias-edit-form-en'); ?>
    <form action="<?php echo e(route('provinces.update_translation', $provincia->ProvinciaID)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

            <div class="flex items-center justify-between w-full">

                <a href="<?php echo e(route('index')); ?>">
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
                <h4 class="text-lg font-normal text-gray-900">Editar provincia</h4>
            </div>

            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]"
                        for="description">Descripcion</label>
                    <div class="w-full">
                        <textarea name="Descripcion" id="description" cols="30" rows="16"
                            class="w-full min-h-[150px] border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($provincia->Descripcion); ?></textarea>
                    </div>
                </div>
            </div>
        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\laragon\www\Turismo\resources\views/provincias/forms.blade.php ENDPATH**/ ?>