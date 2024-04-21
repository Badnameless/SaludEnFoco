@extends('template')

@section('content')
<div class="mt-6">
  <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between py-6">

        <h2 class="text-xl leading-6 font-medium text-gray-900">Welcome to Dashboard!</h2>

        {{-- <div class="flex items-center">
            <a href="{{route('woocommerce')}}" class="px-8 py-2 border border-mundoVerdeGreen rounded-md text-mundoVerdeGreen font-medium mr-4 text-sm h-42px flex items-center">
                Actualizar Productos
            </a>
            <a href="{{route('woocommerce.variations')}}" class="px-8 py-2 border border-mundoVerdeGreen rounded-md text-mundoVerdeGreen font-medium mr-4 text-sm h-42px flex items-center">
                Actualizar Variaciones
            </a>
            <a href="{{route('sincronize.products')}}" class="px-8 py-2 border border-mundoVerdeGreen rounded-md text-mundoVerdeGreen font-medium mr-4 text-sm h-42px flex items-center">
                Sincronizar Productos
            </a>

            <div class="w-42px h-42px p-2 flex items-center justify-center bg-mundoVerdeGreen rounded-md">
                <img class="h-23px w-25px" src="{{config('app.url')}}/images/calendar.png" alt="">
            </div>

        </div> --}}

      </div>
    <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
      <!-- Card -->

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
          <div class="flex items-center">
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-lg font-medium text-borderPrimary truncate mb-2">Visit</dt>
                <dd>
                  <div class="text-3xl font-medium text-gray-900 mb-3">2,500</div>
                </dd>
                <dd>
                  <div class="text-sm font-medium text-green-500 flex items-center"><img class="w-14px" src="{{config('app.url')}}/images/up-arrow.png" alt=""> <span>+30% since last month</span></div>
                </dd>
              </dl>
            </div>
            <div class="flex-shrink-0 w-60px h-60px p-2 rounded-full bg-cardIconBG flex justify-center items-center">
                <!-- Heroicon name: outline/scale -->
                <img class="w-32px h-32px" src="{{config('app.url')}}/images/people.png" alt="">
                <!-- <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg> -->
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
          <div class="flex items-center">
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-lg font-medium text-green-500 truncate mb-2">Revenue</dt>
                <dd>
                  <div class="text-3xl font-medium text-gray-900 mb-3">3,250</div>
                </dd>
                <dd>
                  <div class="text-sm font-medium text-red-600 flex items-center"><img class="w-14px" src="{{config('app.url')}}/images/down-arrow.png" alt=""> -30% since last month</div>
                </dd>
              </dl>
            </div>
            <div class="flex-shrink-0 w-60px h-60px p-2 rounded-full bg-cardIconBG flex justify-center items-center">
                <!-- Heroicon name: outline/scale -->
                <img class="w-32px h-32px" src="{{config('app.url')}}/images/save-money.png" alt="">
                <!-- <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg> -->
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
          <div class="flex items-center">
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-lg font-medium text-yellowPrimary truncate mb-2">Order</dt>
                <dd>
                  <div class="text-3xl font-medium text-gray-900 mb-3">4,956</div>
                </dd>
                <dd>
                  <div class="text-sm font-medium text-green-500 flex items-center"><img class="w-14px" src="{{config('app.url')}}/images/up-arrow.png" alt=""> <span>+30% since last month</span></div>
                </dd>
              </dl>
            </div>
            <div class="flex-shrink-0 w-60px h-60px p-2 rounded-full bg-cardIconBG flex justify-center items-center">
                <!-- Heroicon name: outline/scale -->
                <img class="w-32px h-32px" src="{{config('app.url')}}/images/product-promotion.png" alt="">
                <!-- <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg> -->
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
          <div class="flex items-center">
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-lg font-medium text-skyBlue truncate mb-2">Sale</dt>
                <dd>
                  <div class="text-3xl font-medium text-gray-900 mb-3">2,314</div>
                </dd>
                <dd>
                    <div class="text-sm font-medium text-red-600 flex items-center"><img class="w-14px" src="{{config('app.url')}}/images/down-arrow.png" alt=""> <span>+30% since last month</span></div>
                </dd>
              </dl>
            </div>
            <div class="flex-shrink-0 w-60px h-60px p-2 rounded-full bg-cardIconBG flex justify-center items-center">
                <!-- Heroicon name: outline/scale -->
                <img class="w-32px h-32px" src="{{config('app.url')}}/images/shopping-cart.png" alt="">
                <!-- <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg> -->
            </div>
          </div>
        </div>
      </div>

      <!-- More items... -->
    </div>
  </div>



  <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8 mt-8">


  </div>

  <div class="mt-6 p-4 pb-6 max-w-screen-2xl mx-auto sm:px-6 lg:px-8 mt-8">
        
    <div class="flex items-center justify-between">

        <div>
            <p>Página 1 de 113. Mostrando 50 de 5607 elementos.</p>
        </div>

        <div class="flex items-center">

            <div>
                <button type="button" class="inline-flex items-center h-30px box-border mr-3 px-3 py-2 border border-transparent text-xs leading-4 font-medium rounded-sm shadow-sm text-white bg-gray-500 hover:bg-gray-700 duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Automatismos
                </button>
            </div>

            <div>
                <div class="relative flex items-center">
                    <div class="flex mr-1 border-r-0 rounded-l-sm items-center h-30px w-30px justify-center bg-gray-100 border border-gray-200">
                      <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="cursor-pointer focus:ring-indigo-500 h-3 w-3 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm h-30px border w-full border-gray-200 -ml-1 flex items-center rounded-r-sm px-4">
                      <label for="candidates" class="font-normal text-gray-700">Modo Silencioso <i class="fas fa-info-circle" aria-hidden="true"></i></label>
                      <span id="candidates-description" class="text-gray-500">
                    </span></div>
                </div>
            </div>

        </div>

    </div>

    <div>

        <div class="flex flex-col mt-4">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-mundoVerdeGreen border-t border-gray-200">
                      <tr>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                          
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                          
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                          Creado
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                          Pagado
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                          Enviado/listo
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Acciones
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            #Pedido
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Correo eléctronico
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Total
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                            Tipo de pago
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>

                      <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <img class="w-6" src="{{config('app.url')}}/images/france.svg" alt="">
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            <p>27/12/2021</p> 
                            <p>23:01:17</p> 
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2">

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-mundoVerdeGreen hover:bg-emerald-600 duration-200 rounded-full">
                                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                </div>
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-white text-md bg-slate-400 hover:bg-slate-500 duration-200 rounded-full">
                                    <i class="fas fa-truck" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="grid grid-cols-4 gap-2 box-border">
                                
                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-gray-300 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-print" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-blue-400 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-archive" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent hover:bg-red-500 hover:text-white duration-200 rounded-full">
                                    <i class="fas fa-times" aria-hidden="true"></i>
                                </div>

                                <div class="cursor-pointer w-35px h-35px flex items-center justify-center text-gray-500 text-sm bg-transparent duration-200 rounded-full">
                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                </div>

                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-blue-800 text-sm">
                            32180
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p><span>1</span> <i class="fas fa-envelope" aria-hidden="true"></i></p>
                                </div>
                                <div class="text-sm ml-3 cursor-pointer">
                                    maliha.romaissa@live.com
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm mr-2">
                                    $61,75 €	
                                </div>
                                <div class="cursor-pointer w-30px h-30px flex items-center justify-center rounded-full border border-mundoVerdeGreen text-xs text-mundoVerdeGreen hover:bg-indigo-500 hover:text-white duration-200">
                                    <i class="fas fa-undo-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap text-sm">
                            Tarjeta de crédito
                        </td>
                      </tr>
          
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>

    </div>

</div>

  <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">

    

  </div>

@endsection