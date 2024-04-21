
<?php $__env->startSection('title', 'Site details'); ?>
<?php $__env->startSection('content'); ?>
    <div class="Content">
        <div class="Content__siteDetails">
            <div class="container">
                <div class="Content__siteDetails--portada">
                    <div class="Content__siteDetails--portada-buttons">
                        <a href="<?php echo e(route('blogs')); ?>">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                    <path d="M6.66667 12.6663L2 7.99967M2 7.99967L6.66667 3.33301M2 7.99967L14 7.99967" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                                <span><?php echo app('translator')->get('app.backbutton'); ?></span>
                            </button>
                        </a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12.5,10 C13.8807119,10 15,11.1192881 15,12.5 C15,13.8807119 13.8807119,15 12.5,15 C11.1192881,15 10,13.8807119 10,12.5 C10,11.1192881 11.1192881,10 12.5,10 Z M3.5,5.5 C4.88071187,5.5 6,6.61928813 6,8 C6,9.38071187 4.88071187,10.5 3.5,10.5 C2.11928813,10.5 1,9.38071187 1,8 C1,6.61928813 2.11928813,5.5 3.5,5.5 Z M12.5,1 C13.8807119,1 15,2.11928813 15,3.5 C15,4.88071187 13.8807119,6 12.5,6 C11.1192881,6 10,4.88071187 10,3.5 C10,2.11928813 11.1192881,1 12.5,1 Z" id="Oval-2"></path>
                                    <line x1="9.5" y1="4.5" x2="5.66" y2="6.38" id="Line"></line><line x1="9.5" y1="11.5" x2="6" y2="9.5" id="Line"></line>
                                </g>
                            </svg>
                            <span><?php echo app('translator')->get('app.sharebutton'); ?></span>
                        </button>
                    </div>
                    <?php if($status == "Alojamientos"): ?>
                        <?php
                            $galeria = explode(',', $alojamiento->Galeria);
                        ?>
                        <div class="Content__siteDetails--portada-imagesGrid">
                            <div class="Content__siteDetails--portada-mainImage">
                                <img src="<?php echo e(asset('storage/alojamientos/' . $galeria[0])); ?>" alt="">
                            </div>
                            <div class="Content__siteDetails--portada-images">
                                <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($index != 0 && $index <= 4): ?>
                                        <div class="siteDetails__portada--images-image">
                                            <img src="<?php echo e(asset('storage/alojamientos/'  . $image)); ?>" alt="">
                                            <?php if($index == 4 && count($galeria) > 5): ?>
                                                <div class="counterImages">
                                                    +<?php echo e(count($galeria) - 5); ?> <?php echo app('translator')->get('app.countpics'); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div> 
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="Content__siteDetails--portada-allImages">
                            <div class="siteDetails__portada--allImages-header">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.5,10 C13.8807119,10 15,11.1192881 15,12.5 C15,13.8807119 13.8807119,15 12.5,15 C11.1192881,15 10,13.8807119 10,12.5 C10,11.1192881 11.1192881,10 12.5,10 Z M3.5,5.5 C4.88071187,5.5 6,6.61928813 6,8 C6,9.38071187 4.88071187,10.5 3.5,10.5 C2.11928813,10.5 1,9.38071187 1,8 C1,6.61928813 2.11928813,5.5 3.5,5.5 Z M12.5,1 C13.8807119,1 15,2.11928813 15,3.5 C15,4.88071187 13.8807119,6 12.5,6 C11.1192881,6 10,4.88071187 10,3.5 C10,2.11928813 11.1192881,1 12.5,1 Z" id="Oval-2"></path>
                                            <line x1="9.5" y1="4.5" x2="5.66" y2="6.38" id="Line"></line><line x1="9.5" y1="11.5" x2="6" y2="9.5" id="Line"></line>
                                        </g>
                                    </svg>
                                    <span><?php echo app('translator')->get('app.sharebutton'); ?></span>
                                </button>
                                <span class="closeAllImages">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="container">
                                <div class="siteDetails__portada--allImages-body">
                                    <div class="siteDetails__portada--allImages-container twoCols">
                                        <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="siteDetails__portada--images-image">
                                                <img src=<?php echo e(asset('storage/alojamientos/'  . $image)); ?> alt="">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($status == "Sitios"): ?>
                        <?php
                            $galeria = explode(',', $sitio->Galeria);
                        ?>
                        <div class="Content__siteDetails--portada-imagesGrid">
                            <div class="Content__siteDetails--portada-mainImage">
                                <img src="<?php echo e(asset('storage/lugares/' . $galeria[0])); ?>" alt="">
                            </div>
                            <div class="Content__siteDetails--portada-images">
                                <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($index != 0 && $index <= 4): ?>
                                        <div class="siteDetails__portada--images-image">
                                            <img src="<?php echo e(asset('storage/lugares/'  . $image)); ?>" alt="">
                                            <?php if($index == 4 && count($galeria) > 5): ?>
                                                <div class="counterImages">
                                                    +<?php echo e(count($galeria) - 5); ?> <?php echo app('translator')->get('app.countpics'); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div> 
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="Content__siteDetails--portada-allImages">
                            <div class="siteDetails__portada--allImages-header">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.5,10 C13.8807119,10 15,11.1192881 15,12.5 C15,13.8807119 13.8807119,15 12.5,15 C11.1192881,15 10,13.8807119 10,12.5 C10,11.1192881 11.1192881,10 12.5,10 Z M3.5,5.5 C4.88071187,5.5 6,6.61928813 6,8 C6,9.38071187 4.88071187,10.5 3.5,10.5 C2.11928813,10.5 1,9.38071187 1,8 C1,6.61928813 2.11928813,5.5 3.5,5.5 Z M12.5,1 C13.8807119,1 15,2.11928813 15,3.5 C15,4.88071187 13.8807119,6 12.5,6 C11.1192881,6 10,4.88071187 10,3.5 C10,2.11928813 11.1192881,1 12.5,1 Z" id="Oval-2"></path>
                                            <line x1="9.5" y1="4.5" x2="5.66" y2="6.38" id="Line"></line><line x1="9.5" y1="11.5" x2="6" y2="9.5" id="Line"></line>
                                        </g>
                                    </svg>
                                    <span><?php echo app('translator')->get('app.sharebutton'); ?></span>
                                </button>
                                <span class="closeAllImages">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="container">
                                <div class="siteDetails__portada--allImages-body">
                                    <div class="siteDetails__portada--allImages-container twoCols">
                                        <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="siteDetails__portada--images-image">
                                                <img src=<?php echo e(asset('storage/lugares/'  . $image)); ?> alt="">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php elseif($status == "Negocios"): ?>
                        <?php
                            $galeria = explode(',', $negocio->Galeria);
                        ?>
                        <div class="Content__siteDetails--portada-imagesGrid">
                            <div class="Content__siteDetails--portada-mainImage">
                                <img src="<?php echo e(asset('storage/negocios/' . $galeria[0])); ?>" alt="">
                            </div>
                            <div class="Content__siteDetails--portada-images">
                                <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($index != 0 && $index <= 4): ?>
                                        <div class="siteDetails__portada--images-image">
                                            <img src="<?php echo e(asset('storage/negocios/'  . $image)); ?>" alt="">
                                            <?php if($index == 4 && count($galeria) > 5): ?>
                                                <div class="counterImages">
                                                    +<?php echo e(count($galeria) - 5); ?> <?php echo app('translator')->get('app.countpics'); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div> 
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="Content__siteDetails--portada-allImages">
                            <div class="siteDetails__portada--allImages-header">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.5,10 C13.8807119,10 15,11.1192881 15,12.5 C15,13.8807119 13.8807119,15 12.5,15 C11.1192881,15 10,13.8807119 10,12.5 C10,11.1192881 11.1192881,10 12.5,10 Z M3.5,5.5 C4.88071187,5.5 6,6.61928813 6,8 C6,9.38071187 4.88071187,10.5 3.5,10.5 C2.11928813,10.5 1,9.38071187 1,8 C1,6.61928813 2.11928813,5.5 3.5,5.5 Z M12.5,1 C13.8807119,1 15,2.11928813 15,3.5 C15,4.88071187 13.8807119,6 12.5,6 C11.1192881,6 10,4.88071187 10,3.5 C10,2.11928813 11.1192881,1 12.5,1 Z" id="Oval-2"></path>
                                            <line x1="9.5" y1="4.5" x2="5.66" y2="6.38" id="Line"></line><line x1="9.5" y1="11.5" x2="6" y2="9.5" id="Line"></line>
                                        </g>
                                    </svg>
                                    <span><?php echo app('translator')->get('app.sharebutton'); ?></span>
                                </button>
                                <span class="closeAllImages">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="container">
                                <div class="siteDetails__portada--allImages-body">
                                    <div class="siteDetails__portada--allImages-container twoCols">
                                        <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="siteDetails__portada--images-image">
                                                <img src=<?php echo e(asset('storage/negocios/'  . $image)); ?> alt="">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="Content__siteDetails--portada-imagesGrid">
                            <div class="Content__siteDetails--portada-mainImage">
                                <img src="images/singleDetail1.webp" alt="">
                            </div>
                            <div class="Content__siteDetails--portada-images">
                                <div class="siteDetails__portada--images-image">
                                    <img src="images/singleDetail2.webp" alt="">
                                </div>
                                <div class="siteDetails__portada--images-image">
                                    <img src="images/singleDetail3.webp" alt="">
                                </div>
                                <div class="siteDetails__portada--images-image">
                                    <img src="images/singleDetail4.webp" alt="">
                                </div>
                                <div class="siteDetails__portada--images-image">
                                    <img src="images/singleDetail5.webp" alt="">
                                    <div class="counterImages">
                                        +9 <?php echo app('translator')->get('app.countpics'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="Content__siteDetails--placeInfo <?php echo e($status === 'Sitios' || $status === 'Negocios' ? 'templateBox' : ''); ?>">
                    <div class="Content__siteDetails--placeInfo-placement">
                        <?php echo e($status == "Sitios" ? $sitio->Nombre : ''); ?><?php echo e($status == "Alojamientos" ? $alojamiento->Nombre : ''); ?><?php echo e($status == "Negocios" ? $negocio->Nombre : ''); ?>

                    </div>
                    <div class="Content__siteDetails--placeInfo-name">
                        <h2><?php echo e($status == "Sitios" ? $sitio->Nombre : ''); ?><?php echo e($status == "Alojamientos" ? $alojamiento->Nombre : ''); ?><?php echo e($status == "Negocios" ? $negocio->Nombre : ''); ?></h2>
                    </div>
                    <?php if($status == "Alojamientos"): ?>
                    <?php 

                        $infoAlojamientosArray = explode(', ', $alojamiento->InfoPropiedad);

                        $infoAlojamiento = array_map('htmlspecialchars', $infoAlojamientosArray);

                    ?>
                    <div class="Content__siteDetails--placeInfo-specs">
                        <?php $__currentLoopData = $infoAlojamiento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infoAlojamientoItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span><?php echo e($infoAlojamientoItem); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="Content__siteDetails--placeInfo-technologies">
                        <?php $__currentLoopData = $alojamiento->beneficios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Beneficio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="Content__siteDetails--placeEquipment-item">
                                <div class="siteDetails--placeInfo-technologies-technology">
                                    <div class="placeInfo__technologies--technology-icon">
                                        <?php echo $Beneficio['Icono']; ?>

                                    </div>
                                    <div class="placeInfo__technologies--technology-details">
                                        <h4><?php echo e($Beneficio['Nombre']); ?></h4>
                                        <p><?php echo e($Beneficio['Descripcion']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="Content__siteDetails--propertyAbout <?php echo e($status === 'Sitios' || $status === 'Negocios' ? 'templateBox' : ''); ?>">
                    <div class="Content__siteDetails--propertyAbout-title">
                        <?php if($status == "Sitios"): ?>
                        <h2><?php echo app('translator')->get('app.abouttype_1'); ?></h2>
                        <?php endif; ?>
                        <?php if($status == "Alojamientos"): ?>
                        <h2><?php echo app('translator')->get('app.abouttype_2'); ?></h2>
                        <?php endif; ?>
                        <?php if($status == "Negocios"): ?>
                        <h2><?php echo app('translator')->get('app.abouttype_3'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="Content__siteDetails--propertyAbout-body">
                        <p><?php echo e($status == "Sitios" ? $sitio->Descripcion : ''); ?><?php echo e($status == "Alojamientos" ? $alojamiento->Descripcion : ''); ?><?php echo e($status == "Negocios" ? $negocio->Descripcion : ''); ?></p>
                    </div>
                    <div class="Content__siteDetails--propertyAbout-button">
                        <button><?php echo app('translator')->get('app.showmorebutton'); ?></button>
                    </div>
                </div>
                <?php if($status == "Alojamientos"): ?>
                <div class="Content__siteDetails--placeDescription">
                    <div class="Content__siteDetails--placeDescription-title">
                        <h2><?php echo app('translator')->get('app.abouttext'); ?></h2>
                    </div>
                    <div class="Content__siteDetails--placeDescription-propertyInfo">
                        <div class="siteDetails__placeDescription--propertyInfo-title">
                            <h4><?php echo app('translator')->get('app.aboutownership'); ?></h4>
                        </div>
                        <div class="siteDetails__placeDescription--propertyInfo-grid">
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" stroke="#212121">
                                    <path d="M19.5 21V5C19.5 3.89543 18.6046 3 17.5 3H7.5C6.39543 3 5.5 3.89543 5.5 5V21M19.5 21L21.5 21M19.5 21H14.5M5.5 21L3.5 21M5.5 21H10.5M9.5 6.99998H10.5M9.5 11H10.5M14.5 6.99998H15.5M14.5 11H15.5M10.5 21V16C10.5 15.4477 10.9477 15 11.5 15H13.5C14.0523 15 14.5 15.4477 14.5 16V21M10.5 21H14.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>2. planta</span>
                            </div>
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" stroke="#212121">
                                    <rect x="3.5" y="3" width="18" height="18" fill="none" stroke-linejoin="round"></rect>
                                    <path d="M10.3471 18L6.5 18M6.5 18L6.5 14.153M6.5 18L11.4463 13.0539M14.6529 6L18.5 6M18.5 6L18.5 9.84696M18.5 6L13.5537 10.9461" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>65 m²</span>
                            </div>
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="#212121">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.8885 22.125H3.11136C2.70636 22.125 2.375 21.8046 2.375 21.4129V2.58709C2.375 2.19544 2.70636 1.875 3.11136 1.875H21.8885C22.2935 1.875 22.625 2.19544 22.625 2.58709V21.4129C22.634 21.7957 22.3027 22.125 21.8885 22.125Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.125 21.8386V6.375H18.875V21.8386" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.5 6.75L12.5 21.75" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.125 4.125L15.875 4.125" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>Ascensor</span>
                            </div>
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 25" stroke="#212121">
                                    <path d="M14.4046 19.414C13.6903 20.4829 12.6752 21.3161 11.4874 21.808C10.2997 22.3 8.99279 22.4287 7.73192 22.1779C6.47104 21.9271 5.31285 21.3081 4.40381 20.399C3.49477 19.49 2.8757 18.3318 2.6249 17.0709C2.37409 15.81 2.50282 14.5031 2.99479 13.3154C3.48676 12.1277 4.31988 11.1125 5.3888 10.3983C5.89003 10.0634 6.43257 9.80166 7 9.61816" fill="none" stroke-linecap="round"></path>
                                    <path d="M7.76697 3.67749C8.17872 2.86198 9.02406 2.30273 10 2.30273C11.3807 2.30273 12.5 3.42202 12.5 4.80273C12.5 5.86876 11.8328 6.77895 10.8932 7.13846" fill="none" stroke-linecap="round"></path>
                                    <path d="M9.5 12.3027L9.5 15.681H12.875" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <line x1="2.70711" y1="1.9668" x2="23" y2="22.2597" fill="none" stroke-linecap="round"></line>
                                    <path d="M15 10.8027H19" fill="none" stroke-linecap="round"></path>
                                </svg>
                                <span>No accesible para sillas de ruedas</span>
                            </div>
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" stroke="#212121">
                                    <path d="M22.125 19.3208V3.53289C22.125 3.14124 21.7935 2.8208 21.3885 2.8208L5.625 2.8208M19.5 23.0708H2.61136C2.20636 23.0708 1.875 22.7504 1.875 22.3587V5.33584" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16.5 14.0104C17.2365 13.1559 17.625 11.9638 17.625 10.6285C17.625 7.97753 16.0939 5.8208 13.3477 5.8208H8.25M6.375 9.9458V20.0708H8.625V15.3663H11.8057" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M8.625 12.1958V13.3208H10.125M14.8233 12.3478C15.1681 11.8964 15.375 11.3213 15.375 10.6958C15.375 9.24838 14.2672 8.0708 12.9055 8.0708H10.7652" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <line x1="2.20711" y1="2.60986" x2="22.5" y2="22.9028" fill="none" stroke-linecap="round"></line>
                                </svg>
                                <span>Sin plaza de aparcamiento</span>
                            </div>
                        </div>
                    </div>
                    <div class="Content__siteDetails--placeDescription-roomsInfo">
                        <div class="siteDetails__placeDescription--roomsInfo-title">
                            <h4><?php echo app('translator')->get('app.aboutroom'); ?></h4>
                        </div>
                        <div class="siteDetails__placeDescription--roomsInfo-grid">
                            <div class="siteDetails__placeDescription--roomsInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" stroke="#212121" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1.5,11.5 L1.5,4.1875 C1.5,3.257125 2.3833125,2.5 3.46875,2.5 L20.53125,2.5 C21.6166875,2.5 22.5,3.257125 22.5,4.1875 L22.5,11.5"></path>
                                        <polyline points="23.5 15.5 23.5 20.5 .5 20.5 .5 15.5"></polyline>
                                        <path d="M23.5 17.5L.5 17.5.5 13.65C.5 12.7403 1.27395 12 2.225 12L21.775 12C22.72605 12 23.5 12.7403 23.5 13.65L23.5 17.5zM3.72774579 11.5C3.52442372 11.1921894 3.45249668 10.7931847 3.53118308 10.4163154L3.93663009 8.41760777C4.04704886 7.87379391 4.43269882 7.5 4.87280892 7.5L9.62737103 7.5C10.0676761 7.5 10.4536397 7.87396614 10.5634896 8.41731015L10.968461 10.4137117C11.0476833 10.7931847 10.9757562 11.1921894 10.774105 11.4974497M13.2277458 11.5C13.0244237 11.1921894 12.9524967 10.7931847 13.0311831 10.4163154L13.4366301 8.41760777C13.5470489 7.87379391 13.9326988 7.5 14.3728089 7.5L19.127371 7.5C19.5676761 7.5 19.9536397 7.87396614 20.0634896 8.41731015L20.468461 10.4137117C20.5476833 10.7931847 20.4757562 11.1921894 20.274105 11.4974497"></path>
                                        <polyline points=".617 21.633 1.5 21.633 2.383 21.633" transform="matrix(0 1 1 0 -20.133 20.133)"></polyline>
                                        <polyline points="21.617 21.633 22.5 21.633 23.383 21.633" transform="matrix(0 1 1 0 .867 -.867)"></polyline>
                                    </g>
                                </svg>
                                <p>Dormitorio</p>
                                <span>1 cama doble</span>
                            </div>
                            <div class="siteDetails__placeDescription--roomsInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" stroke="#212121" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M.5 14.5L23.5 14.5 23.5 19.5C23.5 21.709139 21.709139 23.5 19.5 23.5L4.5 23.5C2.290861 23.5.5 21.709139.5 19.5L.5 14.5.5 14.5zM4.5 13.5L4.5 3.75C4.5 1.95507456 6.03165743.5 7.92105263.5 9.18064943.5 10.3210003.5 11.3421053.5"></path>
                                        <path d="M16,4.5 C16,2.290861 14.209139,0.5 12,0.5 C9.790861,0.5 8,2.290861 8,4.5 L16,4.5 Z"></path>
                                    </g>
                                </svg>
                                <p>Baño</p>
                                <span>Ducha y Inodoro</span>
                            </div>
                            <div class="siteDetails__placeDescription--roomsInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" stroke="#212121">
                                    <path d="M5.375 13.3542V1.125H19.625V13.3542" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5.43506 13.4485L5.37506 22.4485" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M8.8125 13.4485L8.8125 22.4485" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.5625 13.5L12.5625 22.7507" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16.3125 13.4485V22.4485" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M19.625 13.4485V22.4485" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.8885 22.875H3.11136C2.70636 22.875 2.375 22.5375 2.375 22.125V13.875C2.375 13.4625 2.70636 13.125 3.11136 13.125H21.8885C22.2935 13.125 22.625 13.4625 22.625 13.875V22.125C22.634 22.5281 22.3027 22.875 21.8885 22.875Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M11.4375 1.37146V3.97136C11.4375 7.0222 8.98856 9.55381 5.8125 9.97563" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5.8125 9.97565C7.57623 10.2845 8.96863 11.481 9.32812 12.9965" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M13.625 1.37146V3.97136C13.625 7.0222 16.0739 9.55381 19.25 9.97563" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M19.625 9.97565C17.8613 10.2845 16.4689 11.481 16.1094 12.9965" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <p>Balcony</p>
                            </div>
                            <div class="siteDetails__placeDescription--roomsInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="#212121">
                                    <path d="M21.5 13.125V5.25C21.5 4.00736 20.4926 3 19.25 3H17M21.5 13.125V18.75C21.5 19.9926 20.4926 21 19.25 21H9.6875M21.5 13.125H17.5625M14.1875 7.5L9.6875 3H5.75C4.50736 3 3.5 4.00736 3.5 5.25V13.125V18.75C3.5 19.9926 4.50736 21 5.75 21H9.6875M9.6875 21V12M9.6875 12H6.3125M9.6875 12H13.0625" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <p>Otras habitaciones</p>
                                <span>Sala de estar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Content__siteDetails--placeEquipment">
                    <div class="Content__siteDetails--placeEquipment-title">
                        <h2><?php echo app('translator')->get('app.equipment'); ?></h2>
                    </div>
                    <div class="Content__siteDetails--placeEquipment-grid">
                        <?php $__currentLoopData = $alojamiento->equipamientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipamiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="Content__siteDetails--placeEquipment-item">
                                <?php echo $equipamiento['Icono']; ?>

                                <span><?php echo e($equipamiento['Nombre']); ?></span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="Content__siteDetails--placeEquipment-button">
                        <button>Ver los 30 equipamientos</button>
                    </div>
                    <div class="Content__siteDetails--placeEquipment-modal">
                        <div class="Content__siteDetails--placeEquipment-allEquipments">
                            <div class="siteDetails__placeEquipment--allEquipments-heading">
                                <div class="siteDetails__placeEquipment--allEquipments-title">
                                    <h2>Equipamiento</h2>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" stroke="#212121"><path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path></svg>
                                </div>
                            </div>
                            <div class="siteDetails__placeEquipment--allEquipments-body">
                                <div class="placeEquipment__allEquipments--body-catContainer">
                                    <h4>Dormitorio</h4>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path d="M2.25 13.5V17.2083" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.5 14.25V17.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M0.75 2.25L15 2.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.8605 15.75H8.87183" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.8605 20.25H8.87183" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.5 2.25C13.5 4.91667 13.5 7.29167 13.5 8.625" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.125 14.25C5.9533 14.25 4.82969 14.25 2.73194 14.25C2.46577 14.25 2.25 13.934 2.25 13.5441V2.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><rect x="6.75" y="13.5" width="11.25" height="4.5" rx="2.25" fill="none" stroke-linejoin="round"></rect><rect x="6.75" y="18" width="11.25" height="4.5" rx="2.25" fill="none" stroke-linejoin="round"></rect><path d="M18 15.75L20.5623 11.693C21.4034 10.3612 20.4465 8.625 18.8713 8.625H14.1132C13.0045 8.625 11.9455 9.08519 11.189 9.89573L7.125 14.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18 20.625L21.1976 15.0291C21.7779 14.0136 21.0447 12.75 19.875 12.75V12.75" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Sábanas y toallas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="placeEquipment__allEquipments--body-catContainer">
                                    <h4>Baño</h4>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#212121" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.82607 12.5708C5.52702 12.5708 4.25264 12.0475 3.32007 11.1282C2.3882 10.2095 1.875 8.99057 1.875 7.69589C1.875 6.27105 2.50823 4.92216 3.61234 3.99511C4.74949 3.04033 6.23563 2.64008 7.68999 2.89684L17.5185 4.63273C17.7969 4.68192 18 4.92411 18 5.20716V10.1846C18 10.4676 17.7969 10.7099 17.5185 10.759C15.137 11.1796 13.3177 11.502 11.9232 11.7492C7.29479 12.5695 7.29479 12.5695 6.96059 12.5699C6.94202 12.5699 6.92209 12.5699 6.89908 12.5702C6.87476 12.5706 6.8504 12.5708 6.82607 12.5708Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.79286 10.9207C5.03821 10.9207 3.61072 9.49319 3.61072 7.73854C3.61072 5.98389 5.03821 4.5564 6.79286 4.5564C8.54751 4.5564 9.975 5.98389 9.975 7.73854C9.975 9.49319 8.54751 10.9207 6.79286 10.9207Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.25 4.5237L21.3021 3.2264C21.493 3.16531 21.7027 3.19677 21.8655 3.31113C22.0285 3.42546 22.125 3.60874 22.125 3.8039V11.5877C22.125 11.7828 22.0285 11.9661 21.8655 12.0805C21.7573 12.1564 21.6286 12.1958 21.4983 12.1958C21.4325 12.1958 21.3662 12.1857 21.3021 12.1652L17.25 10.8679" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.1146 12.3672C11.3043 13.387 11.5889 14.9168 11.9682 16.9564C12.0773 17.5425 11.9028 18.1394 11.4895 18.5943C11.0763 19.0491 10.4713 19.31 9.82982 19.31C8.77229 19.31 7.87322 18.609 7.69199 17.6431C7.29238 15.5131 6.99267 13.9156 6.79286 12.8506" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.6786 22.425C20.6786 22.7816 20.4109 23.0707 20.0807 23.0707C19.7505 23.0707 19.4828 22.7816 19.4828 22.425V16.7426C19.4828 16.2442 19.1074 15.8386 18.6458 15.8386C18.1843 15.8386 17.8088 16.2442 17.8088 16.7426V18.9381C17.8088 21.2 16.1231 23.0539 14.0512 23.0707C14.0416 23.0708 14.0318 23.0708 14.0222 23.0708C13.0154 23.0708 12.0687 22.6496 11.3533 21.8827C10.7445 21.23 10.3668 20.3867 10.2643 19.4682" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Secador de pelo</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.1823 7.6958H21.1927C21.7068 7.6958 22.125 8.08848 22.125 8.57115V10.6958H14.25L14.25 8.57115C14.25 8.08848 14.6682 7.6958 15.1823 7.6958Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.125 9.69946V20.387" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.25 20.3709V9.69946" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.25 23.0708C14.6977 23.0708 14.25 22.6231 14.25 22.0708L14.25 20.0708H22.125V22.0708C22.125 22.6231 21.6773 23.0708 21.125 23.0708H15.25Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12.2812 6.7583V9.0083H2.15625V6.7583H12.2812Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3.7864 19.6958L2.52837 9.1958M11.847 9.1958L10.5889 19.6958L11.847 9.1958Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.75 19.6958V22.2498C9.75 22.4958 9.61266 22.6958 9.44382 22.6958H4.80618C4.63734 22.6958 4.5 22.4958 4.5 22.2498V19.6958" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.125 19.6958H10.275" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.4643 4.1958C20.4643 3.64352 20.0166 3.1958 19.4643 3.1958H15.0357C14.4834 3.1958 14.0357 3.64352 14.0357 4.1958V5.12437L17.25 5.12437V7.6958H19.1786V5.12437H20.4643V4.1958Z" fill="none" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Artículos de higiene</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="placeEquipment__allEquipments--body-catContainer">
                                    <h4>Limpieza</h4>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.8885 22.125H3.11136C2.70636 22.125 2.375 21.8046 2.375 21.4129V2.58709C2.375 2.19544 2.70636 1.875 3.11136 1.875H21.8885C22.2935 1.875 22.625 2.19544 22.625 2.58709V21.4129C22.634 21.7957 22.3027 22.125 21.8885 22.125Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.5 19.125C15.6066 19.125 18.125 16.6066 18.125 13.5C18.125 10.3934 15.6066 7.875 12.5 7.875C9.3934 7.875 6.875 10.3934 6.875 13.5C6.875 16.6066 9.3934 19.125 12.5 19.125Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.5 16.5C14.1569 16.5 15.5 15.1569 15.5 13.5C15.5 11.8431 14.1569 10.5 12.5 10.5C10.8431 10.5 9.5 11.8431 9.5 13.5C9.5 15.1569 10.8431 16.5 12.5 16.5Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.2891 4.72363H16.2891M18.4938 4.72363H19.4938" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Lavadora</p>
                                            <span>En el apartamento</span>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path d="M2.35595 17.1775C1.89298 18.177 1.60629 19.2328 1.50425 20.3072C1.45784 20.7958 1.79792 21.1957 2.21214 21.1957L13.2042 21.1957L21.75 21.1958C22.1642 21.1958 22.5 20.7972 22.5 20.3055V11.5862C22.5 11.0945 22.1642 10.6959 21.75 10.6959L13.2042 10.6958C11.6622 10.6958 10.1353 10.9673 8.71071 11.495C7.2861 12.0227 5.99166 12.7961 4.90131 13.7711C3.81096 14.7461 2.94604 15.9036 2.35595 17.1775Z" fill="none"></path><path d="M12 9.4458C12 8.89352 12.4477 8.4458 13 8.4458H16.25C16.8023 8.4458 17.25 8.89352 17.25 9.4458V10.6958H12V9.4458Z" fill="none"></path><path d="M22.5 12.1958V5.9458C22.5 4.84123 21.6046 3.9458 20.5 3.9458H7.75C7.19772 3.9458 6.75 4.39352 6.75 4.9458V5.1958C6.75 5.74809 7.19772 6.1958 7.75 6.1958H19.25C19.8023 6.1958 20.25 6.64352 20.25 7.1958V10.6958" fill="none"></path><path d="M2.25 17.4458H22.5" fill="none"></path><circle cx="10.5" cy="14.4458" r="0.5" fill="#212121" stroke-width="0.5"></circle><circle cx="13.5" cy="14.4458" r="0.5" fill="#212121" stroke-width="0.5"></circle><circle cx="16.5" cy="14.4458" r="0.5" fill="#212121" stroke-width="0.5"></circle></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Plancha</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="placeEquipment__allEquipments--body-catContainer">
                                    <h4>Teletrabajo</h4>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 19.3208C11.3787 19.3208 10.875 19.8245 10.875 20.4458C10.875 21.0671 11.3787 21.5708 12 21.5708C12.6213 21.5708 13.125 21.0671 13.125 20.4458C13.125 19.8245 12.6213 19.3208 12 19.3208Z" fill="#212121"></path><path d="M7.95266 17.2823C8.22567 16.9137 8.5498 16.5824 8.91771 16.2992C9.78697 15.6301 10.852 15.2674 11.9477 15.2674C13.0434 15.2674 14.1084 15.6301 14.9777 16.2992C15.3992 16.6236 15.7633 17.0114 16.0588 17.4458M19.6558 14.6123C19.0857 13.7094 18.3585 12.9075 17.5019 12.2482C15.9083 11.0215 13.9557 10.3566 11.9469 10.3566C9.93821 10.3566 7.98561 11.0215 6.39197 12.2482C5.58893 12.8663 4.89966 13.6097 4.34688 14.4442M23.25 11.7806C22.4078 10.4081 21.3186 9.19132 20.0271 8.19721C17.7091 6.41294 14.8689 5.4458 11.9471 5.4458C9.02534 5.4458 6.18519 6.41293 3.86717 8.1972C2.62907 9.15022 1.57689 10.3079 0.75 11.6111" fill="none" stroke-linecap="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Internet</p>
                                            <span>WiFi</span>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.75 9.9458V3.1958H21.75V9.9458H9.75Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.36331 15.1958V23.0708H4.86331V15.1958" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.86328 17.4458L9.36347 17.4458" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.36327 20.0708H5.10452" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.375 10.2285L15.375 12.1956" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.875 12.7959V23.0709" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.875 14.8208L22.125 14.8208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.875 12.5708L22.125 12.5708" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.125 12.7959V23.0709" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Escritorio de trabajo</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="placeEquipment__allEquipments--body-catContainer">
                                    <h4>Cocina</h4>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 11.8208C5.63945 11.8208 4.125 10.3063 4.125 8.4458C4.125 6.58526 5.63945 5.0708 7.5 5.0708C9.36055 5.0708 10.875 6.58526 10.875 8.4458C10.875 10.3063 9.36055 11.8208 7.5 11.8208Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 20.8208C5.63945 20.8208 4.125 19.3063 4.125 17.4458C4.125 15.5853 5.63945 14.0708 7.5 14.0708C9.36055 14.0708 10.875 15.5853 10.875 17.4458C10.875 19.3063 9.36055 20.8208 7.5 20.8208Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 11.8208C14.6395 11.8208 13.125 10.3063 13.125 8.4458C13.125 6.58526 14.6395 5.0708 16.5 5.0708C18.3605 5.0708 19.875 6.58526 19.875 8.4458C19.875 10.3063 18.3605 11.8208 16.5 11.8208Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 20.8208C14.6395 20.8208 13.125 19.3063 13.125 17.4458C13.125 15.5853 14.6395 14.0708 16.5 14.0708C18.3605 14.0708 19.875 15.5853 19.875 17.4458C19.875 19.3063 18.3605 20.8208 16.5 20.8208Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M21.3885 23.0708H2.61136C2.20636 23.0708 1.875 22.7504 1.875 22.3587V3.53289C1.875 3.14124 2.20636 2.8208 2.61136 2.8208H21.3885C21.7935 2.8208 22.125 3.14124 22.125 3.53289V22.3587C22.134 22.7415 21.8027 23.0708 21.3885 23.0708Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Platos de cocina</p>
                                            <span>Cocina clásica</span>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.2569 20.4458C19.4081 20.4458 19.501 20.3817 19.5 20.3477V10.0439C19.5 10.0102 19.406 9.9458 19.2569 9.9458H4.74308C4.594 9.9458 4.5 10.0102 4.5 10.0439V20.3477C4.5 20.3814 4.594 20.4458 4.74308 20.4458H19.2569Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.78125 12.5708H19.4062" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M21.3885 23.0708H2.61136C2.20636 23.0708 1.875 22.7504 1.875 22.3587V3.53289C1.875 3.14124 2.20636 2.8208 2.61136 2.8208H21.3885C21.7935 2.8208 22.125 3.14124 22.125 3.53289V22.3587C22.134 22.7415 21.8027 23.0708 21.3885 23.0708Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.16699 6.20361H6.33366" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.5 6.20361H14.6667" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.3335 6.20361H10.5002" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.6665 6.20361H18.8332" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Horno</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><g clip-path="url(#clip0_2003_15334)"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.58125 2.0708H17.4188C17.9469 2.0708 18.375 2.51343 18.375 3.05944V22.8322C18.375 23.3782 17.9469 23.8208 17.4188 23.8208H6.58125C6.05313 23.8208 5.625 23.3782 5.625 22.8322V3.05944C5.625 2.51343 6.05313 2.0708 6.58125 2.0708Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.625 9.5708H18.375" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.6572 12.2363V18.2363" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.6573 5.0708V7.3208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_2003_15334"><rect width="24" height="24" fill="white" transform="translate(0 0.945801)"></rect></clipPath></defs></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Frigorífico</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.7443 18.1958H4.00568C3.86447 18.1958 3.75 18.0652 3.75 17.9041V7.98747C3.75 7.82638 3.86447 7.6958 4.00568 7.6958H14.7443C14.8855 7.6958 15 7.82638 15 7.98747V17.9041C15 18.0652 14.8855 18.1958 14.7443 18.1958Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M21.0625 20.8208H2.9375C1.93698 20.8197 1.1262 20.0858 1.125 19.1802V6.71143C1.125 5.80711 1.93845 5.0708 2.9375 5.0708H21.0625C22.0616 5.0708 22.875 5.80711 22.875 6.71143V19.1802C22.875 20.0845 22.0616 20.8208 21.0625 20.8208Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.625 5.4458V20.4458" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.2122 17.6682L20.2122 16.6682M20.2122 14.4634L20.2122 13.4634" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Microondas</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#212121" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.375 9.02143C11.375 9.21039 11.2132 9.375 11 9.375H4.53479C4.32155 9.375 4.2455 9.21039 4.2455 9.02143V7.875H2.79908C2.58583 7.875 2.375 7.68896 2.375 7.5V4.97143C2.57986 2.91248 3.8534 1.875 5.85013 1.875H22.3737C22.5869 1.875 22.625 1.94247 22.625 2.13143V21.8686C22.625 22.0575 22.4632 22.125 22.25 22.125H4.25C4.03676 22.125 3.875 22.1104 3.875 21.9214V20.1857C3.875 19.9968 4.03676 19.875 4.25 19.875H16.625V5.625H12.875V7.5C12.875 7.68896 12.8136 7.875 12.6003 7.875H11.375V9.02143Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.451 13.8868C12.7421 13.8634 13.0427 13.8731 13.3175 13.9309C13.9992 14.0741 14.375 14.469 14.375 15.3189C14.375 16.161 13.9258 16.5936 13.1024 16.781C12.7869 16.8528 12.4492 16.8794 12.125 16.8744" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M3.99781 12.375H12.0146C12.1974 12.375 12.3455 12.5292 12.3455 12.7195V15.5792C12.3455 17.1139 11.1945 18.375 9.77734 18.375H6.23509C4.81779 18.375 3.66693 17.114 3.66693 15.5792V12.7195C3.66693 12.5292 3.81507 12.375 3.99781 12.375Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.9435 17.875L19.9435 16.875" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Cafetera</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5484 2.14307H2.80229C2.3498 2.14307 1.97909 2.49834 2.00092 2.9434C2.00813 3.09042 2.05058 3.20787 2.12796 3.32865C2.1566 3.37337 2.8372 4.30479 4.16975 6.12292L4.01636 6.38383C2.18127 8.45415 2.15648 10.4065 2.21995 12.2492L2.25263 12.7663L2.28774 13.5526L2.34224 15.1136L2.38008 15.9244L2.40116 16.2591L2.44814 16.8514C2.7807 20.6567 3.80487 22.6835 5.93665 23.1258L6.05786 23.1407L16.5484 23.1431C16.7283 23.1431 16.9029 23.0846 17.0433 22.9772C17.5035 22.6255 17.7566 22.1861 17.75 21.6919V3.58436C17.75 2.80718 17.2862 2.14307 16.5484 2.14307Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12.1875 6.64307C10.8831 6.64307 9.96707 7.94518 9.49458 10.0173L9.40869 10.4279C9.38191 10.5678 9.357 10.7108 9.33396 10.8568L9.27048 11.3032C9.26084 11.379 9.25168 11.4555 9.24299 11.5327L9.19656 12.0038C9.18299 12.1634 9.17133 12.3256 9.1616 12.4903L9.13821 12.9913C9.13235 13.1606 9.12843 13.3322 9.12647 13.5059L9.125 13.7681C9.125 14.0318 9.12942 14.2909 9.13821 14.5449L9.1616 15.0459C9.17133 15.2105 9.18299 15.3727 9.19656 15.5323L9.24299 16.0034C9.25168 16.0806 9.26084 16.1571 9.27048 16.2329L9.33396 16.6794C9.357 16.8253 9.38191 16.9683 9.40869 17.1083L9.49458 17.5188C9.96707 19.591 10.8831 20.8931 12.1875 20.8931C13.2815 20.8931 14.1023 19.9771 14.6174 18.4591L14.7308 18.0983C14.8568 17.6651 14.9604 17.1901 15.041 16.6794L15.1045 16.2329C15.1142 16.1571 15.1233 16.0806 15.132 16.0034L15.1784 15.5323C15.192 15.3727 15.2037 15.2105 15.2134 15.0459L15.2368 14.5449C15.2397 14.4602 15.2422 14.375 15.2441 14.2892L15.25 13.7681L15.2441 13.2469C15.2422 13.1611 15.2397 13.0759 15.2368 12.9913L15.2134 12.4903C15.2037 12.3256 15.192 12.1634 15.1784 12.0038L15.132 11.5327C15.1233 11.4555 15.1142 11.379 15.1045 11.3032L15.041 10.8568C14.9604 10.346 14.8568 9.87098 14.7308 9.43786L14.6174 9.07701C14.1023 7.55902 13.2815 6.64307 12.1875 6.64307Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.75 20.1614C20.9423 20.2925 22.625 17.8934 22.625 13.3016C22.625 8.81626 21.0277 6.34951 17.9861 6.17427L17.8015 6.1665" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.912 18.1048C19.7884 18.0846 21.0998 16.2083 21.0998 13.1124C21.0998 9.98856 19.8176 8.25192 17.912 8.12988" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.125 11.5181H14.6" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.125 13.7681H14.6" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.125 16.0181H14.6" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Tetera</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#212121" viewBox="0 0 24 24"><path d="M6.67227 10.2903L6.67217 14.9707C6.67217 15.523 6.22445 15.9707 5.67217 15.9707H3.25C2.69772 15.9707 2.25 15.523 2.25 14.9707L2.2501 10.2903M6.67227 10.2903C6.67226 9.34803 6.55797 8.41492 6.33575 7.5444C6.11351 6.67385 5.78778 5.88285 5.37714 5.21656C4.9665 4.55027 4.47901 4.02174 3.94248 3.66115C3.71093 3.50552 3.4722 3.38249 3.22893 3.29291C2.71067 3.10206 2.25019 3.56267 2.25019 4.11496L2.2501 10.2903M6.67227 10.2903V10.2903ZM2.2501 10.2903V10.2903Z" fill="none"></path><path d="M14.25 3.4458C14.25 2.89352 14.6977 2.4458 15.25 2.4458H21.5C22.0523 2.4458 22.5 2.89352 22.5 3.4458V6.6958C22.5 8.90494 20.7091 10.6958 18.5 10.6958H18.25C16.0409 10.6958 14.25 8.90494 14.25 6.6958V3.4458Z" fill="none"></path><rect x="16.25" y="4.4458" width="1.25" height="3.5" rx="0.5" fill="none"></rect><rect x="19.25" y="4.4458" width="1.25" height="3.5" rx="0.5" fill="none"></rect><path d="M17.25 10.6958V22.3208C17.25 22.9421 17.7537 23.4458 18.375 23.4458V23.4458C18.9963 23.4458 19.5 22.9421 19.5 22.3208V10.6958" fill="none"></path><path d="M2.25 14.4707L2.25 22.3457C2.25 22.967 2.75368 23.4707 3.375 23.4707V23.4707C3.99632 23.4707 4.5 22.967 4.5 22.3457L4.5 15.9707" fill="none"></path><path d="M9.75 16.1592L9.75 3.5708C9.75 2.94948 10.2537 2.4458 10.875 2.4458C11.4963 2.4458 12 2.94948 12 3.5708L12 16.1592C13.3108 16.674 14.25 18.063 14.25 19.6958C14.25 21.7669 12.739 23.4458 10.875 23.4458C9.01104 23.4458 7.5 21.7669 7.5 19.6958C7.5 18.063 8.43916 16.674 9.75 16.1592Z" fill="none"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Utensilios de cocina</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path d="M6.12791 10.8942V6.7917C6.12814 6.68884 6.07129 6.59416 5.97992 6.54523C5.34575 6.20681 4.99658 5.81731 4.99658 5.4484C4.99658 4.47386 7.44398 2.8208 10.956 2.8208C14.4679 2.8208 16.9155 4.47386 16.9155 5.44888C16.9155 5.81779 16.5663 6.20729 15.9322 6.54571C15.8409 6.59452 15.784 6.68897 15.784 6.7917V10.8942" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.25 16.6958H21.5C22.0523 16.6958 22.5 17.1435 22.5 17.6958V18.6958C22.5 19.2481 22.0523 19.6958 21.5 19.6958H20.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.5 13.4458C1.5 12.3412 2.39543 11.4458 3.5 11.4458H18.25C19.3546 11.4458 20.25 12.3412 20.25 13.4458V19.6958H1.5V13.4458Z" fill="none" stroke-linejoin="round"></path><path d="M1.5 19.6958H20.25V22.4458C20.25 22.9981 19.8023 23.4458 19.25 23.4458H2.5C1.94772 23.4458 1.5 22.9981 1.5 22.4458V19.6958Z" fill="none" stroke-linejoin="round"></path><line x1="9.1715" y1="7.00981" x2="12.064" y2="5.2743" fill="none" stroke-linecap="round"></line><path d="M9.12891 9.43164L13.5 6.9458" fill="none" stroke-linecap="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Tostadora</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" stroke="#212121" height="32" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.6034 20.8208H4.39655C4.24658 20.8208 4.125 20.7282 4.125 20.6139V9.0277C4.125 8.91343 4.24658 8.8208 4.39655 8.8208H19.6034C19.7534 8.8208 19.875 8.91343 19.875 9.0277V20.6139C19.875 20.7282 19.7534 20.8208 19.6034 20.8208Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M17.2405 11.0708C17.4897 11.5439 17.625 12.1019 17.625 12.6847C17.625 14.279 16.6176 15.5708 15.375 15.5708C14.1325 15.5708 13.125 14.2789 13.125 12.6847C13.125 12.116 13.254 11.5707 13.4921 11.1043L17.2405 11.0708Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.375 15.571V18.8413" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.4905 12.5708C10.7397 13.0439 10.875 13.6019 10.875 14.1847C10.875 15.779 9.8676 17.0708 8.625 17.0708C7.38253 17.0708 6.375 15.7789 6.375 14.1847C6.375 13.616 6.50395 13.0707 6.74205 12.6043L10.4905 12.5708Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.8917 19.3208L13.8917 19.3208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.125 19.3208L7.125 19.3208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.625 17.48V18.9282" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M21.3885 23.0708H2.61136C2.20636 23.0708 1.875 22.7504 1.875 22.3587V3.53289C1.875 3.14124 2.20636 2.8208 2.61136 2.8208H21.3885C21.7935 2.8208 22.125 3.14124 22.125 3.53289V22.3587C22.134 22.7415 21.8027 23.0708 21.3885 23.0708Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.7892 5.66943H15.7892M17.994 5.66943H18.994" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>Lavaplatos</p>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-catContainer">
                                        <h4>Entretenimiento / Ocio</h4>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><rect x="1.5" y="6.1958" width="21" height="16.5" rx="2" fill="none" stroke-linejoin="round"></rect><rect x="3.75" y="8.4458" width="14.25" height="12" rx="2" fill="none" stroke-linejoin="round"></rect><path d="M5.25 2.4458L9 6.1958" fill="none" stroke-linecap="round"></path><path d="M14.25 2.4458L10.5 6.1958" fill="none" stroke-linecap="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Televisión</p>
                                                <span>Smart TV</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-catContainer">
                                        <h4>Características de las propiedades</h4>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path d="M15.125 9.54629C15.125 11.6816 15.125 15.7949 15.125 21.8864C15.125 22.4324 14.6969 22.875 14.1688 22.875H3.33125C2.80313 22.875 2.375 22.4324 2.375 21.8864V2.11364C2.375 1.56763 2.80313 1.125 3.33125 1.125H14.1688C14.6969 1.125 15.125 1.56763 15.125 2.11364C15.125 3.9712 15.125 5.36437 15.125 6.29315" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.375 6.375H8.375C7.54657 6.375 6.875 7.04657 6.875 7.875C6.875 8.70343 7.54657 9.375 8.375 9.375H17.375C18.2034 9.375 18.875 8.70343 18.875 7.875C18.875 7.04657 18.2034 6.375 17.375 6.375Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.134 6.13805C12.4802 4.51813 10.8931 3.375 9.03906 3.375C6.60124 3.375 4.625 5.35124 4.625 7.78906C4.625 10.2269 6.60124 12.2031 9.03906 12.2031C10.8729 12.2031 12.4456 11.0848 13.1123 9.49296" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.7627 12.3726C18.8753 13.2801 19.4877 14.454 19.4877 15.6788C19.4877 16.9036 18.8753 18.0775 17.7627 18.9851" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.958 11.2249C21.4361 12.4756 22.25 14.1092 22.25 15.8245C22.25 17.5393 21.4333 19.1726 19.95 20.4249" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5 15.375H6.16667" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.9165 15.375H9.08317" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.8334 15.375H12" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5 17.625H6.16667" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.9165 17.625H9.08317" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.8334 17.625H12" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5 19.875H6.16667" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.9165 19.875H9.08317" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.8334 19.875H12" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Llegada autónoma</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M20.0302 21.5654H3.96983C2.78276 21.5654 1.875 20.6478 1.875 19.4478V11.6831C1.875 10.4831 2.78276 9.56543 3.96983 9.56543H20.0302C21.2172 9.56543 22.125 10.4831 22.125 11.6831V19.4478C22.125 20.6478 21.2172 21.5654 20.0302 21.5654Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.125 11.8208V19.3208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.875 11.8208V19.3208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.4375 11.8208V19.3208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 11.8208V19.3208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.5625 11.8208V19.3208" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.125 21.8655V23.1083" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.875 21.5708V23.1083" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.26663 7.3584C8.65058 6.8994 8.49285 6.3429 8.20379 5.47215C7.93483 4.66215 7.5999 3.65415 8.26663 2.8584" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.8881 7.3584C12.272 6.8994 12.1143 6.3429 11.8252 5.47215C11.5563 4.66215 11.2213 3.65415 11.8881 2.8584" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.5095 7.3584C15.8934 6.8994 15.7357 6.3429 15.4466 5.47215C15.1777 4.66215 14.8428 3.65415 15.5095 2.8584" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Calefacción</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path d="M2.25 13.5V17.2083" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.5 14.25V17.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M0.75 2.25L15 2.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.8605 15.75H8.87183" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.8605 20.25H8.87183" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.5 2.25C13.5 4.91667 13.5 7.29167 13.5 8.625" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.125 14.25C5.9533 14.25 4.82969 14.25 2.73194 14.25C2.46577 14.25 2.25 13.934 2.25 13.5441V2.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><rect x="6.75" y="13.5" width="11.25" height="4.5" rx="2.25" fill="none" stroke-linejoin="round"></rect><rect x="6.75" y="18" width="11.25" height="4.5" rx="2.25" fill="none" stroke-linejoin="round"></rect><path d="M18 15.75L20.5623 11.693C21.4034 10.3612 20.4465 8.625 18.8713 8.625H14.1132C13.0045 8.625 11.9455 9.08519 11.189 9.89573L7.125 14.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18 20.625L21.1976 15.0291C21.7779 14.0136 21.0447 12.75 19.875 12.75V12.75" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Aire acondicionado</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#212121"><path fill-rule="evenodd" clip-rule="evenodd" d="M20.0156 13.625H3.98438C2.81998 13.6235 1.87639 12.575 1.875 11.2812V4.71875C1.875 3.42688 2.82084 2.375 3.98438 2.375H20.0156C21.1792 2.375 22.125 3.42688 22.125 4.71875V11.2812C22.125 12.5731 21.1792 13.625 20.0156 13.625Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.2392 22.625C13.7216 22.0895 13.5234 21.4403 13.1602 20.4244C12.8223 19.4794 12.4015 18.3034 13.2392 17.375" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.2641 22.625C16.7465 22.0895 16.5483 21.4403 16.1851 20.4244C15.8472 19.4794 15.4264 18.3034 16.2641 17.375" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.289 22.625C19.7714 22.0895 19.5732 21.4403 19.21 20.4244C18.8721 19.4794 18.4513 18.3034 19.289 17.375" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3.75 20H9.75" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.01937 17.3999L8.45343 22.6271" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.01855 22.6272L8.45261 17.4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.875 9.125L21.75 9.125" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18 11.375H19.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.5 11.375H15" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.5 11.375L10.5 11.375" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Ascensor</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#212121" viewBox="0 0 25 24"><path d="M2.58922 18.8039C2.68271 18.3365 3.09312 18 3.5698 18H21.4302C21.9069 18 22.3173 18.3365 22.4108 18.8039L22.7608 20.5539C22.8845 21.1727 22.4112 21.75 21.7802 21.75H3.2198C2.58876 21.75 2.11546 21.1727 2.23922 20.5539L2.58922 18.8039Z" fill="none" stroke-linejoin="round"></path><path d="M11.5625 7.125V9H13.4375V8.0625V7.125" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.5 7.125H15.3125V5.25H9.6875V7.125H11.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M21.5 18C21.5 15.6131 20.5518 13.3239 18.864 11.636C17.1761 9.94821 14.8869 9 12.5 9C10.1131 9 7.82387 9.94821 6.13604 11.636C4.44821 13.3239 3.5 15.613 3.5 18L21.5 18Z" fill="none" stroke-linejoin="round"></path><path d="M10.6898 11.2503C9.66833 11.618 8.75329 12.2087 8 12.971M6.51201 15.1454C6.63017 14.8828 6.76239 14.629 6.90768 14.3849" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Conserjería</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-catContainer">
                                        <h4>Servicios</h4>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#212121" viewBox="0 0 24 24"><path d="M16.5 4.3208C16.5 3.69948 17.0037 3.1958 17.625 3.1958V3.1958C18.2463 3.1958 18.75 3.69948 18.75 4.3208V15.1958H16.5V4.3208Z" fill="none"></path><path d="M20.75 15.1958C21.3023 15.1958 21.75 15.6435 21.75 16.1958L21.75 17.4458L13.5 17.4458L13.5 16.1958C13.5 15.6435 13.9477 15.1958 14.5 15.1958L20.75 15.1958Z" fill="none" stroke-linejoin="round"></path><path d="M14.325 17.4458H20.925L21.75 22.6958H13.5L14.325 17.4458Z" fill="none" stroke-linejoin="round"></path><path d="M2.25 15.9458L3.15 22.6958H10.35L11.25 15.9458" fill="none" stroke-linejoin="round"></path><path d="M11.5 15.25V15C11.5 14.4477 11.0523 14 10.5 14H8H2C1.44772 14 1 14.4477 1 15V15.25C1 15.8023 1.44772 16.25 2 16.25H8.75H10.5C11.0523 16.25 11.5 15.8023 11.5 15.25Z" fill="none" stroke-linejoin="round"></path><path d="M11.25 13.6958C11.25 11.2105 9.23528 9.1958 6.75 9.1958C4.26472 9.1958 2.25 11.2105 2.25 13.6958" fill="none"></path><path d="M16.6229 19.7426C16.6488 19.4677 16.4469 19.2238 16.172 19.1979C15.8971 19.172 15.6532 19.3738 15.6273 19.6488L16.6229 19.7426ZM15.3445 22.6487C15.3186 22.9237 15.5204 23.1675 15.7954 23.1935C16.0703 23.2194 16.3142 23.0175 16.3401 22.7426L15.3445 22.6487ZM15.6273 19.6488L15.3445 22.6487L16.3401 22.7426L16.6229 19.7426L15.6273 19.6488Z" fill="#212121"></path><path d="M19.245 19.6256C19.2059 19.3522 18.9526 19.1623 18.6793 19.2013C18.4059 19.2404 18.216 19.4936 18.255 19.767L19.245 19.6256ZM18.63 22.3917C18.6691 22.665 18.9224 22.855 19.1957 22.8159C19.4691 22.7769 19.659 22.5236 19.62 22.2502L18.63 22.3917ZM18.255 19.767L18.63 22.3917L19.62 22.2502L19.245 19.6256L18.255 19.767Z" fill="#212121"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Limpieza final <span>190 € / cuota única</span></p>
                                                <span>Obligatorio</span>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#212121" viewBox="0 0 24 24"><path d="M16.25 10.5V7.89623L13.9561 6.83308V4.5H18.875L18.8752 4.5076C19.2435 4.53228 19.6058 4.61688 19.9478 4.75852C20.3598 4.9292 20.7342 5.17936 21.0496 5.49473C21.365 5.8101 21.6151 6.1845 21.7858 6.59655C21.9565 7.0086 22.0443 7.45023 22.0443 7.89623H19.25V10.5" fill="none" stroke-linejoin="round"></path><path d="M13.9042 12.2291C14.0397 11.2384 14.8859 10.5 15.8858 10.5H19.6142C20.6141 10.5 21.4603 11.2384 21.5958 12.2291L22.6895 20.2291C22.8537 21.4302 21.9202 22.5 20.708 22.5H14.792C13.5798 22.5 12.6463 21.4302 12.8105 20.2291L13.9042 12.2291Z" fill="none"></path><path d="M14 4.5H12.75C12.1977 4.5 11.75 4.94772 11.75 5.5V5.75C11.75 6.30228 12.1977 6.75 12.75 6.75H14" fill="none"></path><line x1="14" y1="13" x2="21.5" y2="13" fill="none"></line><line x1="13.25" y1="19" x2="22.25" y2="19" fill="none"></line><path d="M6.02273 1.5L7.65909 3.10714L6.02273 4.71429M5.75 3.10714C4.09315 3.10714 2.75 4.4263 2.75 6.05357C2.75 7.68084 4.09315 9 5.75 9C7.40685 9 8.75 7.68084 8.75 6.05357" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="4.75" y1="12.5" x2="4.75" y2="16.75" fill="none" stroke-linecap="round"></line><line x1="3.25" y1="14.5" x2="6" y2="14.5" fill="none" stroke-linecap="round"></line><line x1="8.5" y1="17" x2="8.5" y2="20.5" fill="none" stroke-linecap="round"></line><path d="M7.25 18.75H9.5" fill="none" stroke-linecap="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Limpieza habitual <span>39 € / día</span></p>
                                                <span>Opcional</span>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#212121" viewBox="0 0 24 24"><path d="M14 13.5H4.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 19.5H4.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><rect x="2" y="10.5" width="15" height="6" rx="3" fill="none" stroke-linejoin="round"></rect><rect x="2" y="16.5" width="15" height="6" rx="3" fill="none" stroke-linejoin="round"></rect><path d="M20.4259 3.75C21.5752 3.75 22.2976 4.98957 21.7309 5.98952L16.625 15M2.375 12L8.27072 4.84261C8.8406 4.15078 9.68997 3.75 10.5863 3.75H15.125" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 20.25L21.8235 11.2059C22.3564 10.2067 21.6324 9 20.5 9H20.375" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="4" y1="2" x2="4" y2="4.75" fill="none" stroke-linecap="round"></line><line x1="17.5" y1="3.5" x2="17.5" y2="7.75" fill="none" stroke-linecap="round"></line><line x1="2.5" y1="3.25" x2="5.25" y2="3.25" fill="none" stroke-linecap="round"></line><line x1="16" y1="5.5" x2="18.75" y2="5.5" fill="none" stroke-linecap="round"></line><line x1="10.75" y1="6.5" x2="10.75" y2="8.5" fill="none" stroke-linecap="round"></line><path d="M9.5 7.5L11.75 7.5" fill="none" stroke-linecap="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Limpieza de toallas y ropa de cama <span>9 € / día</span></p>
                                                <span>Opcional</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="placeEquipment__allEquipments--body-catContainer">
                                        <h4>No incluido</h4>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#818181" viewBox="0 0 24 24"><path d="M3 13.6958L3 6.5708M6.375 3.9458C10.393 3.9458 9.90772 3.9458 12 3.9458" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.5 16.6958V21.1958H17.25" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.25 17.4458V15.0458C20.25 14.3015 19.6191 13.6958 18.8438 13.6958H16.5M10.125 13.6958H2.90625C2.13094 13.6958 1.5 14.3015 1.5 15.0458V18.1958H10.875H14.625" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.29607 13.6957C6.03175 13.3494 5.93825 12.9006 6.04054 12.4766L6.56762 10.228" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 21.1958V22.3208V23.4458" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M18 11.4458C15.5147 11.4458 13.5 9.43108 13.5 6.9458C13.5 4.46052 15.5147 2.4458 18 2.4458C20.4853 2.4458 22.5 4.46052 22.5 6.9458C22.5 9.43108 20.4853 11.4458 18 11.4458Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18 4.37427V9.51712" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.5714 6.9458H15.4286" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="2.20711" y1="2.60986" x2="22.5" y2="22.9028" fill="none" stroke-linecap="round"></line></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Cama extra</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#818181" viewBox="0 0 24 24"><path d="M22.125 19.3208V3.53289C22.125 3.14124 21.7935 2.8208 21.3885 2.8208H5.25M19.5 23.0708H2.61136C2.20636 23.0708 1.875 22.7504 1.875 22.3587V5.4458" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.25 8.49222C11.4957 8.46158 11.746 8.4458 12 8.4458C15.3137 8.4458 18 11.1321 18 14.4458C18 14.6998 17.9842 14.9501 17.9536 15.1958M15.4985 19.3208C14.5137 20.0288 13.3055 20.4458 12 20.4458C8.68629 20.4458 6 17.7595 6 14.4458C6 13.1943 6.38314 12.0324 7.03851 11.0708C7.10629 10.9714 7.17698 10.8741 7.25046 10.779" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.6886 14.2959H8.4C8.31716 14.2959 8.25 14.3631 8.25 14.4459C8.25 14.702 8.30044 14.9555 8.39844 15.1921C8.49643 15.4287 8.64007 15.6437 8.82114 15.8248C9.00222 16.0058 9.21718 16.1495 9.45377 16.2475C9.69035 16.3455 9.94392 16.3959 10.2 16.3959C10.4561 16.3959 10.7096 16.3455 10.9462 16.2475C11.1828 16.1495 11.3978 16.0058 11.5789 15.8248C11.6819 15.7218 11.7727 15.6078 11.85 15.4851V18.0459C11.85 18.1287 11.9172 18.1959 12 18.1959C12.2561 18.1959 12.5096 18.1455 12.7462 18.0475C12.9828 17.9495 13.1978 17.8058 13.3789 17.6248C13.4841 17.5195 13.5767 17.4028 13.655 17.2771" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="2.20711" y1="2.60986" x2="22.5" y2="22.9028" fill="none" stroke-linecap="round"></line><path d="M14.7891 5.66943H15.7891M17.9938 5.66943H18.9938" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Secadora</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#818181"><path d="M8.49797 4.80847C9.61413 4.47113 10.8816 4.44064 11.9969 4.44064C13.1787 4.44064 14.4147 4.47113 15.4959 4.80552V7.39111C15.4959 8.04415 15.7303 8.56245 16.1187 8.77489C16.8971 9.20971 17.6154 9.76889 18.2513 10.435C18.4901 10.6878 18.8129 10.8333 19.1392 10.8333C19.483 10.8333 19.804 10.6848 20.0437 10.4163L22.1229 8.07857C22.3617 7.8091 22.4938 7.44816 22.4938 7.06164C22.4938 6.67612 22.3626 6.31517 22.1142 6.03586C19.3684 3.11096 15.7758 1.5 11.9969 1.5C9.88084 1.5 7.82318 2.00516 5.93837 2.96487M7.1017 9.25031C6.61601 9.59418 6.15944 9.98873 5.73816 10.4291C5.29642 10.9277 4.42868 10.9445 3.95019 10.4065L1.87094 8.06972C1.63826 7.82188 1.49999 7.45111 1.49999 7.06164C1.49786 6.68057 1.63142 6.31436 1.87094 6.04471C2.25378 5.63697 2.65281 5.25477 3.06627 4.8989" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.9244 11.25H15.4118C15.548 11.2502 15.678 11.2973 15.7706 11.38L21.1056 16.181C21.1366 16.2088 21.1629 16.24 21.1836 16.2738C21.554 16.8877 21.75 17.5742 21.75 18.26M8.22938 11.3808L2.89444 16.1818C2.86314 16.2094 2.83687 16.2407 2.81645 16.2747C2.44491 16.8915 2.25103 17.5714 2.25 18.2608V21.3462C2.25 21.5692 2.46825 21.75 2.73748 21.75H19.2615" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.79166 14.625H9.95832" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.79166 16.9585H9.95832" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.7083 16.9585H12.875" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.79166 19.2915H9.95832" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.7083 19.2915H12.875" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.625 19.2915H15.7917" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="2.20711" y1="1.60986" x2="22.5" y2="21.9028" fill="none" stroke-linecap="round"></line></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Teléfono</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#818181"><path d="M3 12.75H0.97545C0.85125 12.75 0.75 12.2448 0.75 11.625C0.75 11.0052 0.85125 10.5 0.97545 10.5H3" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M21 12.75H23.0246C23.1488 12.75 23.25 12.2448 23.25 11.625C23.25 11.0052 23.1488 10.5 23.0246 10.5H21" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 6.75H0.97545C0.85125 6.75 0.75 6.24476 0.75 5.625C0.75 5.00524 0.85125 4.5 0.97545 4.5L1.54732 4.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M21 6.75H23.0246C23.1488 6.75 23.25 6.24476 23.25 5.625C23.25 5.00524 23.1488 4.5 23.0246 4.5H21" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M21 17.7863C21 17.0771 20.3943 16.5 19.6501 16.5M19.6501 22.5H4.34993C3.60567 22.5 3 21.9229 3 21.2137V17.7863C3 17.0771 3.60567 16.5 4.34993 16.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.54236 10.5C3.68832 10.4744 3 9.75409 3 8.86795V5.30187M21 4.5V8.86795C21 9.75409 20.3117 10.4744 19.4576 10.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.4576 16.5C20.3117 16.4744 21 15.7541 21 14.868V10.5H13.5488M8.69611 10.5H3V14.868C3 15.7541 3.68832 16.4744 4.54236 16.5H14.2118" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.1821 1.5H19C20.1046 1.5 21 2.39543 21 3.5V4.5H7.86288" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.50001 19.5H7.50001M9.70479 19.5H10.7048" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="2.20711" y1="1.60986" x2="22.5" y2="21.9028" fill="none" stroke-linecap="round"></line></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Vaporizador</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#818181"><path d="M10.2498 16.0827L12 14.3325M7.91643 13.7493L9.5 12.1657M13 8.66571L13.7499 7.91577L16.0833 10.2492L15 11.3325" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.20726 16.2061C1.81674 15.8156 1.81674 15.1824 2.20726 14.7919L3.25021 13.749L10.2504 20.7492L9.20747 21.7921C8.81695 22.1827 8.18378 22.1827 7.79326 21.7921L2.20726 16.2061Z" fill="none" stroke-linejoin="round"></path><path d="M13.7497 3.25098L14.7926 2.20803C15.1832 1.81751 15.8163 1.81751 16.2069 2.20803L21.7928 7.79403C22.1834 8.18455 22.1834 8.81772 21.7929 9.20824L20.7499 10.2512L13.7497 3.25098Z" fill="none" stroke-linejoin="round"></path><path d="M3.14348 13.6434C2.55769 13.0576 2.55769 12.1079 3.14348 11.5221L3.35556 11.31C3.94135 10.7242 4.89109 10.7242 5.47688 11.31L12.6892 18.5223C13.275 19.1081 13.275 20.0578 12.6892 20.6436L12.4771 20.8557C11.8913 21.4415 10.9416 21.4415 10.3558 20.8557L3.14348 13.6434Z" fill="none" stroke-linejoin="round"></path><path d="M11.3108 5.47685C10.725 4.89106 10.725 3.94131 11.3108 3.35552L11.5229 3.14344C12.1087 2.55765 13.0584 2.55765 13.6442 3.14344L20.8565 10.3557C21.4423 10.9415 21.4423 11.8913 20.8565 12.4771L20.6444 12.6891C20.0586 13.2749 19.1089 13.2749 18.5231 12.6891L11.3108 5.47685Z" fill="none" stroke-linejoin="round"></path><path d="M17.2509 3.25049L18.1348 2.3666C18.5253 1.97608 19.1585 1.97608 19.549 2.3666L21.6349 4.4525C22.0254 4.84302 22.0254 5.47619 21.6349 5.86671L20.751 6.75059L17.2509 3.25049Z" fill="none" stroke-linejoin="round"></path><path d="M6.74942 20.7495L5.86554 21.6334C5.47501 22.0239 4.84185 22.0239 4.45132 21.6334L2.36543 19.5475C1.97491 19.157 1.97491 18.5238 2.36543 18.1333L3.24932 17.2494L6.74942 20.7495Z" fill="none" stroke-linejoin="round"></path><line x1="2.70711" y1="1.60986" x2="23" y2="21.9028" fill="none" stroke-linecap="round"></line></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Gimnasio</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#818181"><path d="M1.5 3.59232V19.617C1.5 19.9652 1.84363 20.25 2.26362 20.25H17.9429M22.4998 19.2258V2.88297C22.4998 2.53484 22.156 2.25 21.736 2.25H5.15949" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3.75 6.26087V16.2391C3.75 17.3543 4.4375 18 5.46875 18H15.6891M20.25 16.2391V6.26087C20.25 5.26304 19.3562 4.5 18.1875 4.5L7.9094 4.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.1232 14.1537C11.4768 14.6827 10.6505 15.0001 9.75 15.0001C7.67893 15.0001 6 13.3212 6 11.2501C6 10.318 6.34005 9.46536 6.90287 8.80943M13.3616 10.237C12.9663 8.82512 11.7654 7.74977 10.2858 7.53809" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.50571 10.4121C8.34426 10.6514 8.25 10.9397 8.25 11.2501C8.25 12.0785 8.92157 12.7501 9.75 12.7501C9.99487 12.7501 10.226 12.6914 10.4302 12.5873" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7.32955 22.5H3.92045C3.81818 22.5 3.75 22.45 3.75 22.375V20.375C3.75 20.3 3.81818 20.25 3.92045 20.25H7.32955C7.43182 20.25 7.5 20.3 7.5 20.375V22.375C7.5 22.45 7.43182 22.5 7.32955 22.5Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.0795 22.5H16.6705C16.5682 22.5 16.5 22.45 16.5 22.375V20.375" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.5 13.0697V9C16.5 8.58579 16.8358 8.25 17.25 8.25C17.6642 8.25 18 8.58579 18 9C18 9 18 9 18 9C18 9 18 12.5741 18 14.3314" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="2.20711" y1="1.60986" x2="22.5" y2="21.9028" fill="none" stroke-linecap="round"></line></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Caja fuerte</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 25 24" stroke="#818181"><path d="M22.125 19.3208V3.53289C22.125 3.14124 21.7935 2.8208 21.3885 2.8208L5.625 2.8208M19.5 23.0708H2.61136C2.20636 23.0708 1.875 22.7504 1.875 22.3587V5.33584" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.5 14.0104C17.2365 13.1559 17.625 11.9638 17.625 10.6285C17.625 7.97753 16.0939 5.8208 13.3477 5.8208H8.25M6.375 9.9458V20.0708H8.625V15.3663H11.8057" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.625 12.1958V13.3208H10.125M14.8233 12.3478C15.1681 11.8964 15.375 11.3213 15.375 10.6958C15.375 9.24838 14.2672 8.0708 12.9055 8.0708H10.7652" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="2.20711" y1="2.60986" x2="22.5" y2="22.9028" fill="none" stroke-linecap="round"></line></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Aparcamiento</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#818181"><path d="M14.4818 19.4384C15.0889 19.0625 15.6212 18.5398 15.972 17.9071M11.3331 13.8035C11.0253 13.5649 9.5075 11.9808 9.5075 11.9808C9.5075 11.9808 8.11611 15.2926 8.24703 17.0278C8.33422 18.1833 9.05543 18.9901 10.0668 19.5M15.8959 12.5338C15.5035 11.3209 14.4818 9.8013 14.3522 9.62671C14.0944 9.91182 13.7445 10.2127 13.6663 10.3221" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.4085 6.75H19.5V4.5H7.64816" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 19.875V22.125H22.5V19.875H1.5Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1.875 19.5V3.55342M22.125 19.5V2.51737C22.125 2.16407 21.7931 1.875 21.3881 1.875H5.24295" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.89474 7.5V19.5M19.1053 19.5V7.5V19.5Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><line x1="2.20711" y1="1.60986" x2="22.5" y2="21.9028" fill="none" stroke-linecap="round"></line></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Chimenea</p>
                                            </div>
                                        </div>
                                        <div class="placeEquipment__allEquipments--body-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke="#818181"><path d="M7.5 9.67276V21.5455C7.5 22.0726 7.92813 22.5 8.45625 22.5H19.2938C19.6586 22.5 19.9757 22.2961 20.1369 21.9962M7.5 3.94547V2.45455C7.5 1.92736 7.92813 1.5 8.45625 1.5H19.2938C19.8219 1.5 20.25 1.92736 20.25 2.45455V16.8398" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 13.5H11.7343M20.25 13.5H17.0887" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.25 7.75051V21.4999C5.25 22.0522 4.80228 22.4999 4.25 22.4999H4C3.44772 22.4999 3 22.0522 3 21.4999V5.90576" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.2992 6.87868C10.3621 6.77808 10.4292 6.68499 10.5 6.6V5.25H12.75V6.6C12.8208 6.68499 12.8879 6.77808 12.9508 6.87868C13.1249 7.15726 13.263 7.48797 13.3573 7.85195C13.4515 8.21593 13.5 8.60603 13.5 9M13.4805 8.5686H13.5V10.5192M9.75 13.3188V11.4334" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><circle cx="17" cy="12" r="1.5" fill="none"></circle><path d="M15 17.25V22.5M18 22.5C18 22.5 18 21.4378 18 20.1226" fill="none" stroke-linecap="round" stroke-linejoin="round"></path><rect x="9.75" y="19.5" width="3" height="3" fill="none" stroke-linejoin="round"></rect><line x1="2.20711" y1="1.60986" x2="22.5" y2="21.9028" fill="none" stroke-linecap="round"></line><path d="M4.58919 1.5C4.64521 1.5 4.69882 1.5 4.75007 1.5C5.30236 1.5 5.75001 1.94772 5.75001 2.5V2.60503" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>Nevera completa</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Content__siteDetails--placeGuides">
                    <div class="container">
                        <div class="Content__siteDetails--placeGuides-container">
                            <div class="Content__siteDetails--placeGuides-card">
                                <div class="Content__siteDetails--placeGuides-heading"></div>
                                <div class="Content__siteDetails--placeGuides-body">
                                    <div class="Content__siteDetails--placeGuides-profileIcon"></div>
                                    <div class="Content__siteDetails--placeGuides-name"></div>
                                    <div class="Content__siteDetails--placeGuides-phone"></div>
                                </div>
                                <div class="Content__siteDetails--placeGuides-footer"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!$guias->isEmpty() && $status == "Sitios"): ?>
                    <div class="Content__guides">
                        <div class="container">
                            <div class="Content__guides--title">
                                <h2>Nuestros guías turísticos.</h2>
                            </div>
                            <div class="Content__guides--container">
                                <?php $__currentLoopData = $guias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="Content__guides--slide">
                                    <div class="Content__guides--heading"></div>
                                    <div class="Content__guides--details">
                                        <div class="Content__guides--icon">
                                            <?php
                                            $img = $guia->Imagen;
                                            ?>
                                            <img src="<?php echo e(asset('storage/guias/' . $img)); ?>" alt="" srcset="">
                                        </div>
                                        <div class="Content__guides--name">
                                            <h4><?php echo e($guia->Nombre); ?></h4>
                                        </div>
                                        <div class="Content__guides--phone">
                                            <p><?php echo e($guia->Telefono); ?></p>
                                        </div>
                                        <div class="Content__guides--experiences">
                                            <p><?php echo e($guia->Experiencias); ?></p>
                                        </div>
                                    </div>
                                    <div class="Content__guides--languages">
                                        <?php $__currentLoopData = json_decode($guia->Idiomas); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="language"><?php echo e($idioma); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <div class="Content__siteDetails--Location <?php echo e($status === 'Sitios' || $status === 'Negocios' ? 'templateBox' : ''); ?>">
                    <div class="Content__siteDetails--Location-Title">
                        <span><?php echo app('translator')->get('app.ubication'); ?></span>
                    </div>
                    <div class="Content__siteDetails--Location-Subtitle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 17 17" stroke="#212121">
                            <path d="M12.2712 12.0504C11.5895 12.7321 10.0957 14.2259 9.20633 15.1153C8.81581 15.5058 8.18431 15.5059 7.79379 15.1154C6.91934 14.241 5.45653 12.7781 4.72875 12.0504C2.64596 9.96757 2.64596 6.59069 4.72875 4.5079C6.81155 2.4251 10.1884 2.4251 12.2712 4.5079C14.354 6.59069 14.354 9.96757 12.2712 12.0504Z" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M10.5 8.27913C10.5 9.3837 9.60456 10.2791 8.49999 10.2791C7.39542 10.2791 6.49999 9.3837 6.49999 8.27913C6.49999 7.17456 7.39542 6.27913 8.49999 6.27913C9.60456 6.27913 10.5 7.17456 10.5 8.27913Z" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                        <span><?php echo e($status == "Sitios" ? $sitio->Nombre : ''); ?><?php echo e($status == "Alojamientos" ? $alojamiento->Nombre : ''); ?><?php echo e($status == "Negocios" ? $negocio->Nombre : ''); ?></span>
                    </div>
                    <div class="Content__siteDetails--Location-Map">
                        <?php
                            $langcode = App()->getLocale();
                            $mapUrl = "https://maps.google.com/maps?width=600&amp;height=400&hl=".$langcode."&amp";

                            if ($status == "Sitios" && isset($sitio)) {
                                $mapUrl .= "&q=" . $sitio->Latitud . "," . $sitio->Longitud;
                                $mapUrl .= "&t=k&z=16&ie=UTF8&&iwloc=B&output=embed&ll=" . $sitio->Latitud . "," . $sitio->Longitud;
                            }elseif ($status == "Alojamientos" && isset($alojamiento)) {
                                $mapUrl .= "&q=" . $alojamiento->Latitud . "," . $alojamiento->Longitud;
                                $mapUrl .= "&t=k&z=16&ie=UTF8&&iwloc=B&output=embed&ll=" . $alojamiento->Latitud . "," . $alojamiento->Longitud;
                            }elseif ($status == "Negocios" && isset($negocio)) {
                                $mapUrl .= "&q=" . $negocio->Latitud . "," . $negocio->Longitud;
                                $mapUrl .= "&t=k&z=16&ie=UTF8&&iwloc=B&output=embed&ll=" . $negocio->Latitud . "," . $negocio->Longitud;
                            }
                        ?>
                        <div class="mapouter"><div class="gmap_canvas"><iframe src="<?php echo e($mapUrl); ?>" id="gmap_canvas" frameborder="0" scrolling="no"></iframe><style>.mapouter{position:relative;text-align:right;}</style><style>.gmap_canvas{overflow:hidden;background:none!important;}</style><a href="https://www.eireportingonline.com"></a></div></div>
                    </div>
                </div>
                <?php if($status == "Alojamientos"): ?>
                <div class="Content__siteDetails--KnowMore">
                    <div class="Content__siteDetails--KnowMore-Title">
                        <span><?php echo app('translator')->get('app.knowmore'); ?></span>
                    </div>
                    <div class="Content__siteDetails--KnowMore-flex">
                        <div class="siteDetails__KnowMore--flex-Terms">
                            <div class="KnowMore__flex--Terms-Title">
                                <span>Regular</span>
                            </div>
                            <?php $__currentLoopData = $alojamiento->extras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="KnowMore__flex--Terms-NormalItem">
                                <?php echo $extra['Icono']; ?>

                                <span><?php echo e($extra['Nombre']); ?></span>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="siteDetails__KnowMore--flex-TermsTwo">
                            <div class="KnowMore__flex--TermsTwo-Finishing">
                                <div class="flex__TermsTwo--Finishing-Title">
                                    <span><?php echo app('translator')->get('app.endinfo'); ?></span>
                                </div>
                                <div class="flex__TermsTwo--Finishing-Text">
                                    <span><?php echo e($alojamiento->Cancelacion); ?></span>
                                </div>
                                <div class="flex__TermsTwo--Finishing-Button">
                                    <button><?php echo app('translator')->get('app.learnbutton'); ?></button>
                                </div>
                            </div>
                            <div class="KnowMore__flex--TermsTwo-Finishing">
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/site-details.blade.php ENDPATH**/ ?>