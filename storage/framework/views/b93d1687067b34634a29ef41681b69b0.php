
<?php $__env->startSection('content'); ?>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">

    </script>
    <div class="max-w-screen-2xl w-full mx-auto px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8 mt-12">
        <div class="bg-white rounded-md max-w-[65%] mx-auto">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-lg font-normal text-gray-900">Detalles de provincia</h4>
            </div>
            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="name">Nombre</label>
                    <div class="w-full">
                        <span class="border border-gray-200 px-4 py-[8px] box-border rounded text-md"><?php echo e($provincia->Nombre); ?></span>
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="description">Descripcion</label>
                    <div class="w-full">
                        <div class="border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                            <?php echo $provincia->Descripcion; ?>

                        </div>
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="image">Imagen</label>
                    <div class="w-full">
                        <img src="<?php echo e(asset('storage/provincias/' . $provincia->Imagen)); ?>" alt="<?php echo e($provincia->Nombre); ?>" class="mt-4 mb-4">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <div class="bodyContainer__productData--table-inputs-input flex items-center mb-4 pr-4 max-w-xl w-full">
                        <label for="estado" class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[192px]">Estado</label>
                        <div class="w-full">
                            <span class="border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                                <?php if($provincia->Estado): ?>
                                    Activo
                                <?php else: ?>
                                    Inactivo
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/provincias/show.blade.php ENDPATH**/ ?>