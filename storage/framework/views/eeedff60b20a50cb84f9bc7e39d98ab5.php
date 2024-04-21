
<?php $__env->startSection('title', 'Blogs'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/Responsive.css')); ?>">
    <div class="Content">
        <div class="Content__blogs">
            <div class="container">
                <div class="Content__blogs--container">
                    <div class="Content__blogs--container-list">
                        <form action="<?php echo e(route('filterblogs')); ?>" method="get">
                            <div class="blogs__container--list-filters">
                                    <?php echo csrf_field(); ?>
                                <div class="blogs__container--list-filtersHeading">
                                    <h4><?php echo app('translator')->get('app.filtermobile'); ?></h4>
                                </div>
                                <div class="blogs__container--list-FilterButton">
                                    <div class="blogs__container--list-FilterButton-Selects">
                                        <select id="establecimientoSelect" name="SelectEstablecimiento">
                                            <option value="Sitios" <?php echo e($status == "Sitios" ? 'selected' : ''); ?>><?php echo app('translator')->get('app.sitetype_1'); ?></option>
                                            <option value="Alojamientos" <?php echo e($status == "Alojamientos" ? 'selected' : ''); ?>><?php echo app('translator')->get('app.sitetype_2'); ?></option>
                                            <option value="Negocios" <?php echo e($status == "Negocios" ? 'selected' : ''); ?>><?php echo app('translator')->get('app.sitetype_3'); ?></option>
                                        </select>
                                        <select id="provinciaSelect" name="SelectProvincia">
                                            <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($pr->ProvinciaID); ?>" <?php echo e($pr->ProvinciaID == $provincia ? 'selected' : ''); ?>>
                                                <?php echo e($pr->Nombre); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    
                                    <div class="blogs__container--list-filters-Range" id="PriceRange">
                                        <div id="range"></div>
                                        <div class="rangoinfo">
                                            <strong><span id="Minprice">0</span></strong>-<strong><span id="Maxprice">20,000</span></strong>
                                        </div>
                                        <input type="hidden" name="Minprice" id="min-price" value="<?php echo e($minprice); ?>">
                                        <input type="hidden" name="Maxprice" id="max-price" value="<?php echo e($maxprice); ?>">

                                        <div class="blogs__container--list-FilterButton-Selects FilterLodges">
                                            <select id="CategorySiteSelect" name="CategoryLodge">
                                                <?php $__currentLoopData = $tiposalojamiento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoalojamiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($tipoalojamiento->TipoAlojamientoID); ?>" <?php echo e($categorylodge == $tipoalojamiento->TipoAlojamientoID ? 'selected' : ''); ?>><?php echo e($tipoalojamiento->Nombre); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div> 
                                    </div>
                                    
                                    <div class="blogs__container--list-filters-CategorySite" id="CategorySite">
                                        <div class="blogs__container--list-FilterButton-Selects">
                                            <select id="CategorySiteSelect" name="CategorySite">
                                                <?php $__currentLoopData = $tipossitio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipositio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($tipositio->TipoSitioID); ?>" <?php echo e($categorysite == $tipositio->TipoSitioID ? 'selected' : ''); ?>><?php echo e($tipositio->Nombre); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="blogs__container--list-filters-CategorySite" id="CategoryBusiness">
                                        <div class="blogs__container--list-FilterButton-Selects">
                                            <select id="CategorySiteSelect" name="CategoryBusiness">
                                                <?php $__currentLoopData = $tiposnegocio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiponegocio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($tiponegocio->TipoNegocioID); ?>" <?php echo e($categorybusiness == $tiponegocio->TipoNegocioID ? 'selected' : ''); ?>><?php echo e($tiponegocio->Nombre); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="blogs__container--list-FilterButton">
                                    <button type="submit"><span><?php echo app('translator')->get('app.filterbutton'); ?></span></button>
                                </div>
                            </div>
                        </form>
                        <div class="blogs__container--heading">
                            <p class="blogs__container--list-SiteCount"><?php echo e($numquery); ?> <?php echo e($status == "Sitios" ? __('app.sitetype_1') : ''); ?><?php echo e($status == "Alojamientos" ? __('app.sitetype_2') : ''); ?><?php echo e($status == "Negocios" ? __('app.sitetype_3') : ''); ?> <?php echo app('translator')->get('app.countconnector'); ?> <?php echo e($provinciadata->Nombre); ?></p>
                            <div class="blogs__container--mobileFilters">
                                <span><?php echo app('translator')->get('app.filterbutton'); ?>:</span>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V6.17157C22 6.96722 21.6839 7.73028 21.1213 8.29289L15.2929 14.1213C15.1054 14.3089 15 14.5632 15 14.8284V17.1716C15 17.9672 14.6839 18.7303 14.1213 19.2929L11.9193 21.4949C10.842 22.5722 9 21.8092 9 20.2857V14.8284C9 14.5632 8.89464 14.3089 8.70711 14.1213L2.87868 8.29289C2.31607 7.73028 2 6.96722 2 6.17157V5Z" fill="#fff"/>
                                </svg>
                            </div>
                        </div>
                        <?php if($status == "Sitios"): ?>
                        <?php $__currentLoopData = $sitios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form id="SiteForm" action="<?php echo e(route('sitedetails')); ?>" method="get">
                            <input type="hidden" name="status" value="<?php echo e($status); ?>">
                            <input type="hidden" name="DataID" value="<?php echo e($st->LugarID); ?>">
                            <a class="SiteData">
                                <div class="blogs__container--list-SiteCards SiteCard" data-latitud="<?php echo e($st->Latitud); ?>" data-longitud="<?php echo e($st->Longitud); ?>">
                                    <div class="container__list--SiteCards-flex">
                                        <div class="list__SiteCards--flex-SiteInfo">
                                            <?php
                                                $galeria = explode(',', $st->Galeria);
                                                $path = asset('storage/lugares/' . $galeria[0]);
                                            ?>
                                            <div class="SiteCards__flex--SiteInfo-img" style="background-image: url(<?php echo e($path); ?>)">
                                            </div>
                                            <div class="SiteCards__flex--SiteInfo-details">
                                                <div class="flex__SiteInfo--details-title">
                                                    <h3 class="SiteInfo__details--title-tooltip"><?php echo e($st->Nombre); ?></h3>
                                                </div>
                                                <div class="flex__SiteInfo--details-subtitle">
                                                    <h4><?php echo e($st->Nombre); ?></h4>
                                                </div>
                                                <div class="flex__SiteInfo--details-WayToGo">
                                                    <span><?php echo e($st->Tipo); ?></span>
                                                </div>
                                                <div class="flex__SiteInfo--details-Avaible">
                                                    <p><?php echo e($st->Descripcion); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="blogs__container--paginate">
                            <?php echo e($sitios->appends(Request::except('page'))->links()); ?>

                        </div>
                        <?php endif; ?>
                        <?php if($status == "Alojamientos"): ?>
                        <?php $__currentLoopData = $alojamientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form id="AlojaForm" action="<?php echo e(route('sitedetails')); ?>" method="get">
                            <a class="AlojaData">
                                <input type="hidden" name="status" value="<?php echo e($status); ?>">
                                <input type="hidden" name="DataID" value="<?php echo e($al->AlojamientoID); ?>">
                                <div class="blogs__container--list-SiteCards AlojaCard" data-latitud="<?php echo e($al->Latitud); ?>" data-longitud="<?php echo e($al->Longitud); ?>" id="AlojaCard">
                                    <div class="container__list--SiteCards-flex">
                                        <div class="list__SiteCards--flex-SiteInfo">
                                            <?php
                                                $galeria = explode(',', $al->Galeria);
                                                $path = asset('storage/alojamientos/' . $galeria[0]);
                                            ?>
                                            <div class="SiteCards__flex--SiteInfo-img" style="background-image: url(<?php echo e($path); ?>)">
                                            </div>
                                            <div class="SiteCards__flex--SiteInfo-details">
                                                <div class="flex__SiteInfo--details-title">
                                                    <h3 class="SiteInfo__details--title-tooltip"><?php echo e($al->Nombre); ?></h3>
                                                </div>
                                                <div class="flex__SiteInfo--details-subtitle">
                                                    <h4><?php echo e($al->Nombre); ?></h4>
                                                </div>
                                                <div class="flex__SiteInfo--details-data">
                                                    <span><p><?php echo e($al->InfoPropiedad); ?></p></span>
                                                </div>
                                                <div class="flex__SiteInfo--details-WayToGo">
                                                    <span><?php echo e($al->Direccion); ?></span>
                                                </div>
                                                <div class="flex__SiteInfo--details-PriceTag">
                                                    <p class="CurrencyType">US$</p>
                                                    <span><?php echo e($al->PrecioPorNoche); ?></span>
                                                </div>
                                                <div class="flex__SiteInfo--details-Avaible">
                                                    <span><?php echo e($al->Disponibilidad); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="blogs__container--paginate">
                            <?php echo e($alojamientos->appends(Request::except('page'))->links()); ?>

                        </div>
                        <?php endif; ?>
                        <?php if($status == "Negocios"): ?>
                        <?php $__currentLoopData = $negocios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $neg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form id="NegForm" action="<?php echo e(route('sitedetails')); ?>" method="get">
                            <input type="hidden" name="status" value="<?php echo e($status); ?>">
                            <input type="hidden" name="DataID" value="<?php echo e($neg->NegocioID); ?>">
                            <a class="NegData">
                                <div class="blogs__container--list-SiteCards NegoCard" data-latitud="<?php echo e($neg->Latitud); ?>" data-longitud="<?php echo e($neg->Longitud); ?>">
                                    <div class="container__list--SiteCards-flex">
                                        <div class="list__SiteCards--flex-SiteInfo">
                                            <?php
                                                $galeria = explode(',', $neg->Galeria);
                                                $path = asset('storage/negocios/' . $galeria[0]);
                                            ?>
                                            <div class="SiteCards__flex--SiteInfo-img" style="background-image: url(<?php echo e($path); ?>)">
                                            </div>
                                            <div class="SiteCards__flex--SiteInfo-details">
                                                <div class="flex__SiteInfo--details-title">
                                                    <h3 class="SiteInfo__details--title-tooltip"><?php echo e($neg->Nombre); ?></h3>
                                                </div>
                                                <div class="flex__SiteInfo--details-subtitle">
                                                    <h4><?php echo e($neg->Nombre); ?></h4>
                                                </div>
                                                <div class="flex__SiteInfo--details-WayToGo">
                                                    <span><p><?php echo e($neg->Tipo); ?></p></span>
                                                </div>
                                                <div class="flex__SiteInfo--details-Avaible">
                                                    <span><?php echo e($neg->Descripcion); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="blogs__container--paginate">
                            <?php echo e($negocios->appends(Request::except('page'))->links()); ?>

                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="Content__blogs--container-map">
                        <div class="mapouter"><div class="gmap_canvas"><iframe id="mapa" class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=<?php echo e(App::getLocale()); ?>&amp;q=18.4719,-69.8923&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed&ll=18.4719,-69.8923"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;}.gmap_iframe {}</style></div>
                    </div>
                </div>
                <div class="blogs__container--list-TinyNav">
                    <span><a href="#">Homelike</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M5 14l6-6-6-6">
                            </path>
                        </svg>
                        <?php echo e($status == "Sitios" ? __('app.sitetype_1') : ''); ?><?php echo e($status == "Alojamientos" ? __('app.sitetype_2') : ''); ?><?php echo e($status == "Negocios" ? __('app.sitetype_3') : ''); ?> <?php echo app('translator')->get('app.countconnector'); ?> <?php echo e($provinciadata->Nombre); ?></span>
                </div>
                <div class="blogs__container--list-BlogInfo">
                    <div class="container__list--BlogInfo-Title">
                        <h3><?php echo app('translator')->get('app.titleinfo'); ?> <?php echo e($status == "Sitios" ? __('app.sitetype_1') : ''); ?><?php echo e($status == "Alojamientos" ? __('app.sitetype_2') : ''); ?><?php echo e($status == "Negocios" ? __('app.sitetype_3') : ''); ?> <?php echo app('translator')->get('app.countconnector'); ?> <?php echo e($provinciadata->Nombre); ?></h3>
                    </div>
                    <div class="blogs__container--grid">
                        <div class="blogs__container--list-item">
                            <div class="container__list--BlogInfo-Subtitle">
                                <h4><?php echo e($provinciadata->Nombre); ?></h4>
                            </div>
                            <div class="container__list--BlogInfo-Content">
                                <p><?php echo e($provinciadata->Descripcion); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
    <script>
        document.querySelector(".blogs__container--mobileFilters").addEventListener("click", ()=>{
            document.querySelector(".blogs__container--list-filters").classList.add("mobileFiltersActive")
            document.querySelector(".overlay").classList.add("overlayActive")
        })
        document.querySelector(".overlay").addEventListener("click", ()=>{
            document.querySelector(".blogs__container--list-filters").classList.remove("mobileFiltersActive")
            document.querySelector(".overlay").classList.remove("overlayActive")
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/blogs.blade.php ENDPATH**/ ?>