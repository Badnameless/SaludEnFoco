
<?php $__env->startSection('title', 'Home Principal'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('css/FaqsPage.css')); ?>">
    <div class="Content__faqsPage">
        <div class="Content__faqs">
            <div class="container">
                <div class="Content__hotPlaces--title">
                    <h2><?php echo app('translator')->get('app.questions'); ?></h2>
                    <div class="faqs__searchContainer">
                        <input type="text" name="faqsSearch" id="faqsSearch" placeholder="Buscar...">
                        <button>Buscar</button>
                    </div>
                </div>
                <div class="Content__faqs--container">
                    <div class="" id="result">
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="Content__faqs--faq">
                            <button class="accordion"><?php echo e($faq->Pregunta); ?><i class="fa-solid fa-chevron-down"></i></button>
                            <div class="panel">
                                <p><?php echo e($faq->Respuesta); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
                <div class="faqs__container--paginate">
                    <?php echo e($faqs->links()); ?> 
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/faqs-page.blade.php ENDPATH**/ ?>