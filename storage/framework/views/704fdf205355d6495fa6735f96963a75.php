
<?php $__env->startSection('title', 'Home Principal'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="Content">
        <div class="Content__port">
            <div class="container">
                <div class="Content__port--container">
                    <div class="Content__port--title">
                        <h1><?php echo app('translator')->get('app.herotitle'); ?></h1>
                    </div>
                    <div class="Content__port--subtitle">
                        <h2><?php echo app('translator')->get('app.herosubtitle'); ?></h2>
                    </div>
                    <div class="Content__port--filters">
                        <div class="Content__port--filters-filter">
                            <label for="destiny"><?php echo app('translator')->get('app.searchdestination'); ?></label>
                            <input type="text" name="destiny" id="destiny" placeholder="<?php echo app('translator')->get('app.searchplaceholder'); ?>">
                            <div class="Content__port--filters-dropdown">
                                <div class="Content__port--dropdown-title">
                                    <h4><?php echo app('translator')->get('app.searchcardtitle'); ?></h4>
                                </div>
                                <div class="Content__port--dropdown-locationsList">
                                    <div class="port__dropdown--locationsList-location">
                                        <div class="port__dropdown--location-image">
                                            <img src="/images/barahona.jpg" alt="">
                                        </div>
                                        <div class="port__dropdown--location-details">
                                            <h2>Barahona</h2>
                                            <p><?php echo app('translator')->get('app.searchcardvisited'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Content__port--filters-button">
                            <button type="button"><?php echo app('translator')->get('app.searchbutton'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Content__currencyExchange">
            <div class="container">
                <div class="Content__currencyExchange--container">
                    <div class="Content__currencyExchange--heading">
                        <div class="Content__currencyExchange--title activeNavCalculator" id="currencyExchangeNav" navFor="currencyExchangeBody">
                            <i class="fa-solid fa-cash-register"></i>
                            <h2><?php echo app('translator')->get('app.convertitle'); ?></h2>
                        </div>
                        <div class="Content__currencyExchange--title" id="budgetCalculatorNav" navFor="budgetCalculator">
                            <i class="fa-solid fa-calculator"></i>
                            <h2><?php echo app('translator')->get('app.calctitle'); ?></h2>
                        </div>
                    </div>
                    <div class="Content__currencyExchange--body bodyCalculatorActive" id="currencyExchangeBody">
                        <div class="moneda inputsColsContainer">
                            <div class="inputcontainer">
                                <label for="importe"><i class="fa-solid fa-money-check-dollar"></i> <?php echo app('translator')->get('app.import'); ?></label>
                                <input 
                                    type="number" 
                                    id="cantidad-uno" 
                                    placeholder="0"  
                                    value="1"
                                >
                            </div>
                            <div class="inputcontainer">
                                <label for=""><?php echo app('translator')->get('app.from'); ?></label>
                                <select id="moneda-uno">
                                    <option value="AED"><?php echo app('translator')->get('app.AED'); ?></option>
                                    <option value="ARS"><?php echo app('translator')->get('app.ARS'); ?></option>
                                    <option value="AUD"><?php echo app('translator')->get('app.AUD'); ?></option>
                                    <option value="BGN"><?php echo app('translator')->get('app.BGN'); ?></option>
                                    <option value="BRL"><?php echo app('translator')->get('app.BRL'); ?></option>
                                    <option value="BSD"><?php echo app('translator')->get('app.BSD'); ?></option>
                                    <option value="CAD"><?php echo app('translator')->get('app.CAD'); ?></option>
                                    <option value="CHF"><?php echo app('translator')->get('app.CHF'); ?></option>
                                    <option value="CLP"><?php echo app('translator')->get('app.CLP'); ?></option>
                                    <option value="CNY"><?php echo app('translator')->get('app.CNY'); ?></option>
                                    <option value="COP"><?php echo app('translator')->get('app.COP'); ?></option>
                                    <option value="CZK"><?php echo app('translator')->get('app.CZK'); ?></option>
                                    <option value="DKK"><?php echo app('translator')->get('app.DKK'); ?></option>
                                    <option value="DOP"><?php echo app('translator')->get('app.DOP'); ?></option>
                                    <option value="EGP"><?php echo app('translator')->get('app.EGP'); ?></option>
                                    <option value="EUR"><?php echo app('translator')->get('app.EUR'); ?></option>
                                    <option value="FJD"><?php echo app('translator')->get('app.FJD'); ?></option>
                                    <option value="GBP"><?php echo app('translator')->get('app.GBP'); ?></option>
                                    <option value="GTQ"><?php echo app('translator')->get('app.GTQ'); ?></option>
                                    <option value="HKD"><?php echo app('translator')->get('app.HKD'); ?></option>
                                    <option value="HRK"><?php echo app('translator')->get('app.HRK'); ?></option>
                                    <option value="HUF"><?php echo app('translator')->get('app.HUF'); ?></option>
                                    <option value="IDR"><?php echo app('translator')->get('app.IDR'); ?></option>
                                    <option value="ILS"><?php echo app('translator')->get('app.ILS'); ?></option>
                                    <option value="INR"><?php echo app('translator')->get('app.INR'); ?></option>
                                    <option value="ISK"><?php echo app('translator')->get('app.ISK'); ?></option>
                                    <option value="JPY"><?php echo app('translator')->get('app.JPY'); ?></option>
                                    <option value="KRW"><?php echo app('translator')->get('app.KRW'); ?></option>
                                    <option value="KZT"><?php echo app('translator')->get('app.KZT'); ?></option>
                                    <option value="MXN"><?php echo app('translator')->get('app.MXN'); ?></option>
                                    <option value="MYR"><?php echo app('translator')->get('app.MYR'); ?></option>
                                    <option value="NOK"><?php echo app('translator')->get('app.NOK'); ?></option>
                                    <option value="NZD"><?php echo app('translator')->get('app.NZD'); ?></option>
                                    <option value="PAB"><?php echo app('translator')->get('app.PAB'); ?></option>
                                    <option value="PEN"><?php echo app('translator')->get('app.PEN'); ?></option>
                                    <option value="PHP"><?php echo app('translator')->get('app.PHP'); ?></option>
                                    <option value="PKR"><?php echo app('translator')->get('app.PKR'); ?></option>
                                    <option value="PLN"><?php echo app('translator')->get('app.PLN'); ?></option>
                                    <option value="PYG"><?php echo app('translator')->get('app.PYG'); ?></option>
                                    <option value="RON"><?php echo app('translator')->get('app.RON'); ?></option>
                                    <option value="RUB"><?php echo app('translator')->get('app.RUB'); ?></option>
                                    <option value="SAR"><?php echo app('translator')->get('app.SAR'); ?></option>
                                    <option value="SEK"><?php echo app('translator')->get('app.SEK'); ?></option>
                                    <option value="SGD"><?php echo app('translator')->get('app.SGD'); ?></option>
                                    <option value="THB"><?php echo app('translator')->get('app.THB'); ?></option>
                                    <option value="TRY"><?php echo app('translator')->get('app.TRY'); ?></option>
                                    <option value="TWD"><?php echo app('translator')->get('app.TWD'); ?></option>
                                    <option value="UAH"><?php echo app('translator')->get('app.UAH'); ?></option>
                                    <option value="USD" selected><?php echo app('translator')->get('app.USD'); ?></option>
                                    <option value="UYU"><?php echo app('translator')->get('app.UYU'); ?></option>
                                    <option value="VND"><?php echo app('translator')->get('app.VND'); ?></option>
                                    <option value="ZAR"><?php echo app('translator')->get('app.ZAR'); ?></option>
                                </select>
                            </div>
                            <div class="inputcontainer">
                                <label for=""><?php echo app('translator')->get('app.to'); ?></label>
                                <select id="moneda-dos">
                                    <option value="AED"><?php echo app('translator')->get('app.AED'); ?></option>
                                    <option value="ARS"><?php echo app('translator')->get('app.ARS'); ?></option>
                                    <option value="AUD"><?php echo app('translator')->get('app.AUD'); ?></option>
                                    <option value="BGN"><?php echo app('translator')->get('app.BGN'); ?></option>
                                    <option value="BRL"><?php echo app('translator')->get('app.BRL'); ?></option>
                                    <option value="BSD"><?php echo app('translator')->get('app.BSD'); ?></option>
                                    <option value="CAD"><?php echo app('translator')->get('app.CAD'); ?></option>
                                    <option value="CHF"><?php echo app('translator')->get('app.CHF'); ?></option>
                                    <option value="CLP"><?php echo app('translator')->get('app.CLP'); ?></option>
                                    <option value="CNY"><?php echo app('translator')->get('app.CNY'); ?></option>
                                    <option value="COP"><?php echo app('translator')->get('app.COP'); ?></option>
                                    <option value="CZK"><?php echo app('translator')->get('app.CZK'); ?></option>
                                    <option value="DKK"><?php echo app('translator')->get('app.DKK'); ?></option>
                                    <option value="DOP" selected><?php echo app('translator')->get('app.DOP'); ?></option>
                                    <option value="EGP"><?php echo app('translator')->get('app.EGP'); ?></option>
                                    <option value="EUR"><?php echo app('translator')->get('app.EUR'); ?></option>
                                    <option value="FJD"><?php echo app('translator')->get('app.FJD'); ?></option>
                                    <option value="GBP"><?php echo app('translator')->get('app.GBP'); ?></option>
                                    <option value="GTQ"><?php echo app('translator')->get('app.GTQ'); ?></option>
                                    <option value="HKD"><?php echo app('translator')->get('app.HKD'); ?></option>
                                    <option value="HRK"><?php echo app('translator')->get('app.HRK'); ?></option>
                                    <option value="HUF"><?php echo app('translator')->get('app.HUF'); ?></option>
                                    <option value="IDR"><?php echo app('translator')->get('app.IDR'); ?></option>
                                    <option value="ILS"><?php echo app('translator')->get('app.ILS'); ?></option>
                                    <option value="INR"><?php echo app('translator')->get('app.INR'); ?></option>
                                    <option value="ISK"><?php echo app('translator')->get('app.ISK'); ?></option>
                                    <option value="JPY"><?php echo app('translator')->get('app.JPY'); ?></option>
                                    <option value="KRW"><?php echo app('translator')->get('app.KRW'); ?></option>
                                    <option value="KZT"><?php echo app('translator')->get('app.KZT'); ?></option>
                                    <option value="MXN"><?php echo app('translator')->get('app.MXN'); ?></option>
                                    <option value="MYR"><?php echo app('translator')->get('app.MYR'); ?></option>
                                    <option value="NOK"><?php echo app('translator')->get('app.NOK'); ?></option>
                                    <option value="NZD"><?php echo app('translator')->get('app.NZD'); ?></option>
                                    <option value="PAB"><?php echo app('translator')->get('app.PAB'); ?></option>
                                    <option value="PEN"><?php echo app('translator')->get('app.PEN'); ?></option>
                                    <option value="PHP"><?php echo app('translator')->get('app.PHP'); ?></option>
                                    <option value="PKR"><?php echo app('translator')->get('app.PKR'); ?></option>
                                    <option value="PLN"><?php echo app('translator')->get('app.PLN'); ?></option>
                                    <option value="PYG"><?php echo app('translator')->get('app.PYG'); ?></option>
                                    <option value="RON"><?php echo app('translator')->get('app.RON'); ?></option>
                                    <option value="RUB"><?php echo app('translator')->get('app.RUB'); ?></option>
                                    <option value="SAR"><?php echo app('translator')->get('app.SAR'); ?></option>
                                    <option value="SEK"><?php echo app('translator')->get('app.SEK'); ?></option>
                                    <option value="SGD"><?php echo app('translator')->get('app.SGD'); ?></option>
                                    <option value="THB"><?php echo app('translator')->get('app.THB'); ?></option>
                                    <option value="TRY"><?php echo app('translator')->get('app.TRY'); ?></option>
                                    <option value="TWD"><?php echo app('translator')->get('app.TWD'); ?></option>
                                    <option value="UAH"><?php echo app('translator')->get('app.UAH'); ?></option>
                                    <option value="USD"><?php echo app('translator')->get('app.USD'); ?></option>
                                    <option value="UYU"><?php echo app('translator')->get('app.UYU'); ?></option>
                                    <option value="VND"><?php echo app('translator')->get('app.VND'); ?></option>
                                    <option value="ZAR"><?php echo app('translator')->get('app.ZAR'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="currencyResult">
                            <p><span class="cantidadIngresada">12 dolares canadiences</span> =</p>
                            <h4 id="cantidad-dos">
                               <span>0</span> dolares canadiences
                            </h4>
                        </div>
                        <div class="taza-cambio-container">
                
                            <div class="cambio" id="cambio"></div>
                
                        </div>
                    </div>
                    <div class="Content__currencyExchange--body" id="budgetCalculator">
                        <div class="calculator">

                            <div class="inputTwoCols">
                                <div class="inputcontainer">
                                    <label for="fecha-entrada"><?php echo app('translator')->get('app.entrydate'); ?>:</label>
                                    <input type="date" id="fecha-entrada">
                                </div>
    
                                <div class="inputcontainer">
                                    <label for="fecha-salida"><?php echo app('translator')->get('app.outdate'); ?>:</label>
                                    <input type="date" id="fecha-salida">
                                </div>
                            </div>

                            <div class="inputTwoCols">
                                <div class="inputcontainer">
                                    <label for="provincia"><?php echo app('translator')->get('app.provincetext'); ?>:</label>
                                    <select id="provincia">
                                        <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($provincia->GastosEstimados); ?>"><?php echo e($provincia->Nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="inputcontainer">
                                    <label for="tipo-alojamiento"><?php echo app('translator')->get('app.lodgetype'); ?>:</label>
                                    <select id="tipo-alojamiento">
                                        <option value="3529"><?php echo app('translator')->get('app.lodgetype_1'); ?></option>
                                        <option value="8823"><?php echo app('translator')->get('app.lodgetype_2'); ?></option>
                                        <option value="12000"><?php echo app('translator')->get('app.lodgetype_3'); ?></option>
                                    </select>
                                </div>

                            </div>

                            <div class="inputcontainer" style="margin-bottom: 20px;">
                                <label for="personAmount"><?php echo app('translator')->get('app.personnum'); ?>:</label>
                                <input type="number" name="personAmount" id="personAmount">
                            </div>

                            <div class="inputTwoCols">

                                <div class="inputcontainer">
                                    <label for="alimentacion"><?php echo app('translator')->get('app.feedingtext'); ?>:</label>
                                    <select id="alimentacion">
                                        <option value="400"><?php echo app('translator')->get('app.feedtype_1'); ?></option>
                                        <option value="1200"><?php echo app('translator')->get('app.feedtype_2'); ?></option>
                                        <option value="2950"><?php echo app('translator')->get('app.feedtype_3'); ?></option>
                                        <option value="200"><?php echo app('translator')->get('app.feedtype_4'); ?></option>
                                    </select>
                                </div>

                                <div class="inputcontainer">
                                    <label for="transporte"><?php echo app('translator')->get('app.transportmethod'); ?>:</label>
                                    <select id="transporte">
                                        <option value="200"><?php echo app('translator')->get('app.transtype_1'); ?></option>
                                        <option value="1350"><?php echo app('translator')->get('app.transtype_2'); ?></option>
                                        <option value="950"><?php echo app('translator')->get('app.transtype_3'); ?></option>
                                        <option value="2500"><?php echo app('translator')->get('app.transtype_4'); ?></option>
                                        <option value="250"><?php echo app('translator')->get('app.transtype_5'); ?></option>
                                    </select>
                                </div>

                            </div>

                            

                            <button onclick="calcularGastos()"><?php echo app('translator')->get('app.calcbutton'); ?></button>
                    
                            <div id="resultado"></div>
                        </div>
                    </div>
                    <div class="Content__currencyExchange--disclaimer">
                        <div class="warningIcon"><i class="fa-solid fa-exclamation"></i></div>
                        <p><strong><?php echo app('translator')->get('app.disclaimertitle'); ?>:</strong> <?php echo app('translator')->get('app.disclaimertext'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="Content__hotPlaces">
            <div class="container">
                <div class="Content__hotPlaces--title">
                    <h2><?php echo app('translator')->get('app.trendyplaces'); ?></h2>
                    <div class="Content__hotPlaces--slideArrows">
                        <div class="Content__hotPlaces--slideArrows-arrow" id="hotPlacesPrevArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M11 2L5 8l6 6"></path>
                            </svg>
                        </div>
                        <div class="Content__hotPlaces--slideArrows-arrow" id="hotPlacesNextArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M5 14l6-6-6-6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="Content__hotPlaces--container">
                    <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $img = $pr->Imagen;
                            ?>
                            <a href="<?php echo e(route('blogsindex', ['id' => $pr->ProvinciaID])); ?>" class="Content__hotPlaces--slideContainer" style="background-image: url('<?php echo e(asset('storage/provincias/' . $img)); ?>')">
                                <div class="Content__hotPlaces--slide">
                                    <div class="Content__hotPlaces--slide-name">
                                        <h3><?php echo e($pr->Nombre); ?></h3>
                                    </div>
                                </div>
                            </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if(empty($provincias)): ?>
                        <p>No hay provincias disponibles.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="Content__categories">
            <div class="container">
                <div class="Content__hotPlaces--title">
                    <h2><?php echo app('translator')->get('app.neededsearch'); ?></h2>
                    <div class="Content__hotPlaces--slideArrows">
                        <div class="Content__hotPlaces--slideArrows-arrow" id="categoriesPrevArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M11 2L5 8l6 6"></path>
                            </svg>
                        </div>
                        <div class="Content__hotPlaces--slideArrows-arrow" id="categoriesNextArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M5 14l6-6-6-6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="Content__categories--container">
                    <a href="/FilterBlogs?_token=nAV6hgqL7ZADiur90aXiONubrlcMpRBhSffS5Asp&SelectEstablecimiento=Sitios&SelectProvincia=1&Minprice=0&Maxprice=10000&CategoryLodge=1&CategorySite=3&CategoryBusiness=1" class="Content__categories--slide">
                        <div class="Content__categories--slide-image">
                            <img src="images/museo.webp" alt="">
                        </div>
                        <div class="Content__categories--slide-name">
                            <h4><?php echo app('translator')->get('app.neededsearch_1'); ?></h4>
                        </div>
                    </a>
                    <a href="/FilterBlogs?_token=nAV6hgqL7ZADiur90aXiONubrlcMpRBhSffS5Asp&SelectEstablecimiento=Sitios&SelectProvincia=1&Minprice=0&Maxprice=10000&CategoryLodge=1&CategorySite=2&CategoryBusiness=1" class="Content__categories--slide">
                        <div class="Content__categories--slide-image">
                            <img src="images/parqueNacional.jpg" alt="">
                        </div>
                        <div class="Content__categories--slide-name">
                            <h4><?php echo app('translator')->get('app.neededsearch_2'); ?></h4>
                        </div>
                    </a>
                    <a href="/blogs" class="Content__categories--slide">
                        <div class="Content__categories--slide-image">
                            <img src="images/hotel.jpg" alt="">
                        </div>
                        <div class="Content__categories--slide-name">
                            <h4><?php echo app('translator')->get('app.neededsearch_3'); ?></h4>
                        </div>
                    </a>
                    <a href="/FilterBlogs?_token=nAV6hgqL7ZADiur90aXiONubrlcMpRBhSffS5Asp&SelectEstablecimiento=Sitios&SelectProvincia=1&Minprice=0&Maxprice=10000&CategoryLodge=1&CategorySite=6&CategoryBusiness=1" class="Content__categories--slide">
                        <div class="Content__categories--slide-image">
                            <img src="images/acuario.jpg" alt="">
                        </div>
                        <div class="Content__categories--slide-name">
                            <h4><?php echo app('translator')->get('app.neededsearch_4'); ?></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="Content__faqs">
            <div class="container">
                <div class="Content__hotPlaces--title">
                    <h2><?php echo app('translator')->get('app.questions'); ?></h2>
                </div>
                <div class="Content__faqs--container">
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
        <div class="Content__homeEvents">
            <div class="container">
                <div class="Content__hotPlaces--title">
                    <h2><?php echo app('translator')->get('app.popularevents'); ?></h2>
                    <div class="Content__hotPlaces--slideArrows">
                        <div class="Content__hotPlaces--slideArrows-arrow" id="eventsPrevArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M11 2L5 8l6 6"></path>
                            </svg>
                        </div>
                        <div class="Content__hotPlaces--slideArrows-arrow" id="eventsNextArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M5 14l6-6-6-6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="Content__homeEvents--container">
                    <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="Content__homeEvents--slide">
                            <div class="Content__homeEvents--image">
                                <?php
                                    $img = $evento->Imagen;
                                ?>
                                <img src="<?php echo e(asset('storage/eventos/' . $img)); ?>" alt="" srcset="">
                            </div>
                            <div class="Content__homeEvents--details">
                                <div class="Content__homeEvents--details-date">
                                    <p class="detail-event-flex"><i class="fa-regular fa-clock"></i><?php echo e($evento->FechaHora); ?></p>
                                    <p class="detail-event-flex"><i class="fa-solid fa-location-dot"></i><?php echo e($evento->Lugar); ?></p>
                                </div>
                                <div class="Content__homeEvents--details-title">
                                    <h2><?php echo e($evento->Nombre); ?></h2>
                                </div>
                                <div class="Content__homeEvents--details-description">
                                    <p><?php echo e($evento->Descripcion); ?></p>
                                </div>
                                <div class="Content__homeEvents--details-button">
                                    <a href="<?php echo e(route('singleevents', ['id' => $evento->EventoID])); ?>"><button><?php echo app('translator')->get('app.learnmore'); ?></button></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        
    </div>

    <script>

        let navs = document.querySelectorAll(".Content__currencyExchange--title");
        navs.forEach((nav)=>{
            nav.addEventListener("click", ()=>{
                if(nav.getAttribute("navFor") == "currencyExchangeBody") {
                    document.querySelector("#currencyExchangeBody").classList.add("bodyCalculatorActive")
                    document.querySelector("#budgetCalculator").classList.remove("bodyCalculatorActive")

                    document.querySelector("#currencyExchangeNav").classList.add("activeNavCalculator")
                    document.querySelector("#budgetCalculatorNav").classList.remove("activeNavCalculator")
                } else {
                    document.querySelector("#currencyExchangeBody").classList.remove("bodyCalculatorActive")
                    document.querySelector("#budgetCalculator").classList.add("bodyCalculatorActive")

                    document.querySelector("#currencyExchangeNav").classList.remove("activeNavCalculator")
                    document.querySelector("#budgetCalculatorNav").classList.add("activeNavCalculator")
                }
            })
        })

        // Obtener referencias a los inputs de fecha
        var fechaEntradaInput = document.getElementById('fecha-entrada');
        var fechaSalidaInput = document.getElementById('fecha-salida');

        // Obtener la fecha actual para establecerla como mínimo en el input de entrada
        var fechaActual = new Date();
        var dia = fechaActual.getDate();
        var mes = fechaActual.getMonth() + 1; // Los meses van de 0 a 11 en JavaScript
        var anio = fechaActual.getFullYear();

        // Formatear la fecha actual en el formato YYYY-MM-DD requerido por el input tipo date
        if (dia < 10) {
        dia = '0' + dia;
        }
        if (mes < 10) {
        mes = '0' + mes;
        }
        var fechaActualFormateada = anio + '-' + mes + '-' + dia;

        // Establecer la fecha mínima en el input de entrada
        fechaEntradaInput.min = fechaActualFormateada;

        // Función para actualizar la fecha mínima en el input de salida cuando se selecciona una fecha de entrada
        fechaEntradaInput.addEventListener('change', function() {
        fechaSalidaInput.min = fechaEntradaInput.value;
        });

        function calcularGastos() {
            var fechaEntrada = new Date(document.getElementById("fecha-entrada").value);
            var fechaSalida = new Date(document.getElementById("fecha-salida").value);
            var tipoAlojamiento = parseFloat(document.getElementById("tipo-alojamiento").value);
            var cantidadPersonas = parseInt(document.getElementById("personAmount").value);
            var provincia = parseFloat(document.getElementById("provincia").value);
            var alimentacion = parseFloat(document.getElementById("alimentacion").value);
            var transporte = parseFloat(document.getElementById("transporte").value);

            var dias = (fechaSalida - fechaEntrada) / (1000 * 60 * 60 * 24);

            if (dias < 1) {
                dias = 1;
            }

            var costoTotalAlojamiento;
            if (tipoAlojamiento === 3529) {
                costoTotalAlojamiento = tipoAlojamiento * dias; // Costo sin multiplicar por cantidad de personas
            } else {
                costoTotalAlojamiento = tipoAlojamiento * dias * cantidadPersonas; // Costo multiplicado por cantidad de personas
            }

            var costoTotalAlimentacion = alimentacion * cantidadPersonas;
            var costoTotalTransporte = transporte * cantidadPersonas;

            var presupuestoTotalSinProvincia = costoTotalAlojamiento + costoTotalAlimentacion + costoTotalTransporte;
            var presupuestoTotal = presupuestoTotalSinProvincia * provincia;

            var resultadoElement = document.getElementById("resultado");
            if (isNaN(presupuestoTotal)) {
                resultadoElement.innerHTML = "No se pudo realizar la estimación, asegúrese de que todos los campos estén completados.";
            } else {
                resultadoElement.innerHTML = "El presupuesto total estimado para su viaje en base a sus elecciones es de RD$ " + presupuestoTotal.toFixed(2) + " DOP.";
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/index.blade.php ENDPATH**/ ?>