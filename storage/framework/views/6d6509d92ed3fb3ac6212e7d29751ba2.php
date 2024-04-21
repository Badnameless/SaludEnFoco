
<?php $__env->startSection('content'); ?>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <div class="max-w-screen-2xl w-full mx-auto px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8 mt-12">

        <form action="<?php echo e(route('expenses.store')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">

                <div class="flex items-center justify-between w-full">
                    
                    <a href="<?php echo e(route('expenses.index')); ?>">
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
                    <h4 class="text-lg font-normal text-gray-900">Agregar Gastos Estimados</h4>
                </div>

                <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
                    <!-- Campo ProvinciaID -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="provincia">Provincia</label>
                        <div class="w-full">
                            <select name="ProvinciaID" id="provincia" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                                <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($provincia->ProvinciaID); ?>"><?php echo e($provincia->Nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <!-- Campo Alojamiento -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="alojamiento">Alojamiento</label>
                        <div class="w-full">
                            <input type="number" step="any" name="Alojamiento" id="alojamiento" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                        </div>
                    </div>

                    <!-- Campo Alimentación -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="alimentacion">Alimentación</label>
                        <div class="w-full">
                            <input type="number" step="any" name="Alimentacion" id="alimentacion" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                        </div>
                    </div>

                    <!-- Campo Transporte -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="transporte">Transporte</label>
                        <div class="w-full">
                            <input type="number" step="any" name="Transporte" id="transporte" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                        </div>
                    </div>

                    <!-- Campo Actividades -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="actividades">Actividades</label>
                        <div class="w-full">
                            <input type="number" step="any" name="Actividades" id="actividades" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                        </div>
                    </div>

                    <!-- Campo Otros Gastos -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="otros_gastos">Otros Gastos</label>
                        <div class="w-full">
                            <input type="number" step="any" name="OtrosGastos" id="otros_gastos" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                        </div>
                    </div>
                    
                    <!-- Campo Total Estimado -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="total_estimado">Total Estimado</label>
                        <div class="w-full">
                            <input type="number" step="any" name="TotalEstimado" id="total_estimado"  class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
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

        <style>

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
    
        </style>
    
        <script src="https://cdn.ckbox.io/CKBox/1.1.0/ckbox.js"></script>
        <!--
            The "super-build" of CKEditor 5 served via CDN contains a large set of plugins and multiple editor types.
            See https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/quick-start.html#running-a-full-featured-editor-from-cdn
        -->
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/super-build/ckeditor.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
        <script src="/js/editor.js"></script>
    
        <script>
            editorFull("description");
            $(document).ready(function() {
                $('#blog_categories').select2();
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/gastos/create.blade.php ENDPATH**/ ?>