
<?php $__env->startSection('title', 'Eventos'); ?>
<?php $__env->startSection('content'); ?>
    <?php if($nearevent): ?>
    <div class="content__port" style="background-image: linear-gradient(to right, rgb(34, 121, 112), rgb(83, 38, 94)), url('<?php echo e(asset('storage/eventos/' . $nearevent->Imagen)); ?>')">
        <div class="container">
            <div class="content__port--container">
                <div class="content__port--container-dateevent">
                    <span id="eventDate"><?php echo e(\Carbon\Carbon::parse($nearevent->FechaHora)->isoFormat('D MMMM, YYYY')); ?></span>
                </div>
                <div class="content__port--container-title">
                    <span><?php echo app('translator')->get('app.eventherotitle'); ?></span>
                </div>
                <div class="content__port--container-countdown">
                    <div class="countdown_container">
                        <span id="days" class="countdown"></span>
                        <span class="timereference"><?php echo app('translator')->get('app.daycount'); ?></span>
                    </div>

                    <div class="countdown_container">
                        <span id="hours" class="countdown"></span>
                        <span class="timereference"><?php echo app('translator')->get('app.hourscount'); ?></span>
                    </div>

                    <div class="countdown_container">
                        <span id="minutes" class="countdown"></span>
                        <span class="timereference"><?php echo app('translator')->get('app.minutecount'); ?></span>
                    </div>

                    <div class="countdown_container">
                        <span id="seconds" class="countdown"></span>
                        <span class="timereference"><?php echo app('translator')->get('app.secondcount'); ?></span>
                    </div>
                </div>
                <div class="content__port--container-buttons">
                    <a href="<?php echo e(route('singleevents', ['id' => $nearevent->EventoID])); ?>"><button class="RegisButton"><?php echo app('translator')->get('app.eventbutton'); ?></button></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function startCountdown(eventDate) {
            // Actualizar el contador cada segundo
            var x = setInterval(function() {
                // Obtener la fecha y hora actual
                var now = new Date().getTime();

                // Calcular la diferencia entre la fecha del evento y la fecha actual
                var distance = eventDate - now;

                // Calcular los días, horas, minutos y segundos restantes
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Mostrar los resultados en el HTML
                document.getElementById('days').innerText = days;
                document.getElementById('hours').innerText = hours;
                document.getElementById('minutes').innerText = minutes;
                document.getElementById('seconds').innerText = seconds;

                // Si la cuenta regresiva ha terminado, obtener la próxima fecha más cercana y reiniciar el contador
                if (distance < 0) {
                    clearInterval(x);
                    console.log("El evento ha finalizado");
                    obtenerProximaFechaYReiniciarContador();
                }
            }, 1000);
        }

        function obtenerProximaFechaYReiniciarContador() {
            // Realizar una solicitud AJAX para obtener la próxima fecha más cercana
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '<?php echo e(route("proxima.fecha")); ?>', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var nextEventDate = new Date(response.fecha);
                    console.log("Próxima fecha más cercana:", nextEventDate);
                    
                    // Reiniciar el contador con la próxima fecha obtenida
                    startCountdown(nextEventDate);
                }
            };
            xhr.send();
        }

        <?php if($nearevent): ?>
            var eventDate = new Date("<?php echo e($nearevent->FechaHora); ?>");
            startCountdown(eventDate);
        <?php endif; ?>
    </script>
    <?php else: ?>
    <div class="content__port" style="background-image: linear-gradient(to right, rgb(34, 121, 112), rgb(83, 38, 94)), url('<?php echo e(asset('storage/eventos/')); ?>')">
        <div class="container">
            <div class="content__port--container" style="display: flex; align-items: center; justify-content: center;">
                <div class="content__port--container-title" style="margin-top:0px;">
                    <span>No hay eventos proximos</span>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if($nearevent): ?>
        <div class="content__eventinfo">
            <div class="container">
                <div class="content__eventinfo--container">
                    <div class="content__eventinfo--lugar">
                        <div class="content__eventinfo--lugar-img">
                            <img src="images/marcador_evento.png" alt="" srcset="">
                        </div>
                        <div class="content__eventinfo--lugar-info">
                            <p class="title"><?php echo e($nearevent->Provincia->Nombre); ?></p>
                            <p class="subtitle"><?php echo e($nearevent->Lugar); ?></p>
                        </div>
                    </div>
                    <div class="content__eventinfo--separator"></div>
                    <div class="content__eventinfo--tipo">
                        <div class="content__eventinfo--tipo-title">
                            <p><?php echo e($nearevent->TipoEvento->Nombre); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
    <?php endif; ?>

    <?php if($nearevent): ?>
        <div class="content__eventdescription">
            <div class="container">
                <div class="content__eventdescription--title">
                    <p class="content__eventdescription--title-separator"></p>
                    <p class="content__eventdescription--title-text"><?php echo app('translator')->get('app.deseventtitle'); ?></p>
                </div>
                <div class="content__eventdescription--description-container">
                    <div class="content__eventdescription--description">
                        <p><?php echo e($nearevent->Descripcion); ?></p>
                    </div>
                    <div class="content__eventdescription--searchbox">
                        <input type="text" name="nombreEvent" class="nombreEvent" id="searchevent" placeholder="<?php echo app('translator')->get('app.searcheventplaceholder'); ?>">
                        <div class="content__eventdescription--searchbox-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#888">
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="content__eventdescription">
            <div class="container">
                <div class="content__eventdescription--title">
                    <p class="content__eventdescription--title-separator"></p>
                    <p class="content__eventdescription--title-text"><?php echo app('translator')->get('app.deseventtitle'); ?></p>
                </div>
                <div class="content__eventdescription--description-container">
                    <div class="content__eventdescription--description">
                        <p>No hay ningun evento proximo.</p>
                    </div>
                    <div class="content__eventdescription--searchbox">
                        <input type="text" name="nombreEvent" class="nombreEvent" id="searchevent" placeholder="<?php echo app('translator')->get('app.searcheventplaceholder'); ?>">
                        <div class="content__eventdescription--searchbox-icon" style="top: 6px; right: 4%;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#888">
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="content__events">
        <div class="container">
            <div class="content__events--grid" id="resultado">
                <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('singleevents', ['id' => $evento->EventoID])); ?>" class="event_card">
                    <div class="content__events--grid-item">
                        <div class="events__grid--item-img">
                            <?php
                                $img = $evento->Imagen;
                            ?>
                            <img src="<?php echo e(asset('storage/eventos/' . $img)); ?>" alt="" srcset="">
                        </div>
                        <div class="grid--item-infobox">
                            <div class="events__grid--item-dateevent">
                            
                                <div class="grid__item--dateevent-date">
                                    <span>
                                        <img src="images/time-and-calendar.png" alt="" srcset="">
                                    </span>
                                    <span><?php echo e($evento->FechaHora); ?></span>
                                </div>
                                <div class="grid__item--dateevent-location">
                                    <span>
                                        <img src="images/ubicacion.png" alt="" srcset="">
                                    </span>
                                    <span><?php echo e($evento->Lugar); ?></span>
                                </div>
                            </div>
                            <div class="events__grid--item-title">
                                <span><?php echo e($evento->Nombre); ?></span>
                            </div>
                            <div class="events__grid--item-description">
                                <span class="texto"><?php echo e($evento->Descripcion); ?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if(empty($eventos)): ?>
                    <p>No hay eventos disponibles.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="events__container--paginate">
        <?php echo e($eventos->links()); ?>

    </div>
    <script>
$('#searchevent').keyup(function(){
    var term = $(this).val();
    var lang = document.getElementById('language').value; // Obtener el idioma seleccionado
    $.ajax({
        url: '/buscarevento',
        method: 'GET',
        data: { term: term, lang: lang },
        success: function(response){
            $('#resultado').empty(); // Limpiar resultados anteriores
            var eventos = response.eventos; // Obtener la lista de eventos del objeto de respuesta
            if (eventos.length > 0) {
                eventos.forEach(function(evento) {
                    var eventoHtml = `
                        <a href="/single-events/${evento.EventoID}" class="event_card">
                            <div class="content__events--grid-item">
                                <div class="events__grid--item-img">
                                    <img src="storage/eventos/${evento.Imagen ? evento.Imagen.Contenido : ''}" srcset="">
                                </div>
                                <div class="grid--item-infobox">
                                    <div class="events__grid--item-dateevent">
                                        <div class="grid__item--dateevent-date">
                                            <span><img src="images/time-and-calendar.png" alt="" srcset=""></span>
                                            <span>${evento.FechaHora ? evento.FechaHora.Contenido : ''}</span>
                                        </div>
                                        <div class="grid__item--dateevent-location">
                                            <span><img src="images/ubicacion.png" alt="" srcset=""></span>
                                            <span>${evento.Lugar ? evento.Lugar.Contenido : ''}</span>
                                        </div>
                                    </div>
                                    <div class="events__grid--item-title">
                                        <span>${evento.Nombre ? evento.Nombre.Contenido : ''}</span>
                                    </div>
                                    <div class="events__grid--item-description">
                                        <span class="texto">${evento.Descripcion ? evento.Descripcion.Contenido : ''}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    `;
                    $('#resultado').append(eventoHtml);
                });
            } else {
                $('#resultado').html('No se encontraron resultados');
            }
        }
    });
});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Turismo\resources\views/events.blade.php ENDPATH**/ ?>