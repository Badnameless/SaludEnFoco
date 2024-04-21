
<?php $__env->startSection('title', 'Single-Event'); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <div class="mainframeevent">
        <div class="container">
            <div class="mainframeevent__container">
                <div class="mainframeevent__img">
                    <?php
                        $img = $evento->Imagen;
                    ?>
                    <img src="<?php echo e(asset('storage/eventos/' . $img)); ?>" alt="" srcset="">
                </div>
                <div class="mainframeevent__titleevent">
                    <span><?php echo e($evento->Nombre); ?></span>
                </div>
                <div class="mainframeevent__detailevents">
                    <div class="mainframeevent__detailevents--date detaileventsChild">
                        <span>
                            <img src="<?php echo e(asset('images/time-and-calendar.png')); ?>" alt="">
                        </span>
                        <span><?php echo e($evento->FechaHora); ?></span>
                    </div>
                    <div class="mainframeevent__detailevents--place detaileventsChild">
                        <span>
                            <img src="<?php echo e(asset('images/ubicacion.png')); ?>" alt="">
                        </span>
                        <span><?php echo e($evento->Lugar); ?></span>
                    </div>
                    <div class="mainframeevent__detailevents--type detaileventsChild">
                        <span>
                            <img src="<?php echo e(asset('images/informacion.png')); ?>" alt="">
                        </span>
                        <span><?php echo e($evento->tipoEvento->Nombre); ?></span>
                    </div>
                </div>
                <div class="mainframeevent__description">
                    <span><?php echo e($evento->Descripcion); ?></span>
                </div>
                <div class="mainframeevent__location">
                    <span><?php echo app('translator')->get('app.ubication'); ?></span>
                    <?php
                        $langcode = App()->getLocale();
                        $mapUrl = "https://maps.google.com/maps?width=600&amp;height=400&hl=".$langcode."&amp";

                            $mapUrl .= "&q=" . $evento->Latitud . "," . $evento->Longitud;
                            $mapUrl .= "&t=k&z=16&ie=UTF8&&iwloc=B&output=embed&ll=" . $evento->Latitud . "," . $evento->Longitud;
                    ?>
                    <div class="mapouter"><div class="gmap_canvas"><iframe src="<?php echo e($mapUrl); ?>" id="gmap_canvas" frameborder="0" scrolling="no"></iframe><style></style><style></style><a href="https://www.eireportingonline.com"></a></div></div>
                </div>
                <div class="mainframeevent__disclaimer">
                    <div class="warningIcon">
                        <i class="fa-solid fa-exclamation">
                        </i>
                    </div>
                    <span class="disclaimer_text"><strong><?php echo app('translator')->get('app.disclaimertitle'); ?>:</strong> <?php echo app('translator')->get('app.gpseventsdisclaimer'); ?></span>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/single-events.blade.php ENDPATH**/ ?>