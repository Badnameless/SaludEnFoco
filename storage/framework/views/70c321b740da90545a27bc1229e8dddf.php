
<?php $__env->startSection('content'); ?>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <div class="max-w-screen-2xl w-full mx-auto px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8 mt-12">
        <?php echo $__env->make('negocios.forms', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(session()->has('locale') && session()->get('locale') !== 'es'): ?>

         <?php echo $__env->yieldContent('negocios-edit-form-en'); ?>

        <?php else: ?>

         <?php echo $__env->yieldContent('negocios-edit-form-es'); ?>

        <?php endif; ?>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#provincia').on('change', function() {
                var provinciaID = $(this).val();

                // Limpia el select de lugares
                $('#lugar').empty();
                $('#lugar').append($('<option value="">Selecciona un lugar</option>'));

                // Si se ha seleccionado una provincia, agrega las opciones de lugares
                if (provinciaID) {
                    <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        if (<?php echo e($provincia->ProvinciaID); ?> == provinciaID) {
                            <?php $__currentLoopData = $provincia->lugares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lugar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                $('#lugar').append($(
                                    '<option value="<?php echo e($lugar->LugarID); ?>"><?php echo e($lugar->Nombre); ?></option>'
                                    ));
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        }
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            document.querySelector(".closeIcon").addEventListener("click", () => {
                document.getElementById('vistaPrevia').style.backgroundImage = "url('')";
                document.getElementById('vistaPrevia').style.display = "none";
                document.getElementById('image').value = "";
                document.querySelector(".labelImage ").innerHTML = "Seleccionar archivo";

            })

            document.querySelector(".clearImages").addEventListener("click", () => {
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

            document.querySelector(".closeIcon").addEventListener("click", () => {
                document.getElementById('vistaPrevia').style.backgroundImage = "url('')";
                document.getElementById('vistaPrevia').style.display = "none";
                document.getElementById('image').value = "";
                document.querySelector(".labelImage ").innerHTML = "Seleccionar archivo";

            })

            document.querySelector(".clearImages").addEventListener("click", () => {
                document.getElementById('vistaPrevia').style.backgroundImage = "url('')";
                document.getElementById('vistaPrevia').style.display = "none";
                document.getElementById('image').value = "";
                document.querySelector(".labelImage ").innerHTML = "Seleccionar archivo";

            })

            lector.readAsDataURL(archivo);
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/negocios/edit.blade.php ENDPATH**/ ?>