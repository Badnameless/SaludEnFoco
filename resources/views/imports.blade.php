@extends('template')
@section('content')

<div class="importsContainer bg-gray-100">

    <div class="py-6 px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8">

        <div class="bg-white rounded-lg mb-12">
    
            <div class="px-6 py-2 border-b border-gray-200">
                <h1 class="text-lg">Subir Fichero</h1>
            </div>
    
            <form method="POST" enctype="multipart/form-data" action="{{route('inventories.import')}}">
                @csrf
            <div class="max-w-screen-2xl mx-auto py-8 px-6">
    
                <div class="grid grid-cols-5 items-center justify-between mb-4">
    
                    <div class="col-span-2">
                        <h4 class="text-md">Fichero</h4>
                    </div>
                        <div class="grid grid-cols-3 items-center col-span-3 justify-end">
                            <div class="py-1 px-3 rounded-l-sm border col-span-1">
                                <p class="text-md">Seleccionar Archivo</p>
                            </div>
                            <div class="flex py-1 px-3 border border-l-0 col-span-2">
                                <label for="fileImport" class="text-md text-gray-600 cursor-pointer">05 2022_importacion Precios_act.xlsx</label>
                                <input type="file" name="fileImport" id="fileImport" class="opacity-0 invisible appearance-none h-0 w-0 box-border">
                            </div>
                        </div>
                </div>
    
                <div>
    
                    <div class="py-6">
                        <p class="text-md">Puedes utilizar ficheros en formato .csv o excel (.xls o .xlsx), siguiendo la estructura especificada en la 'Hoja de cálculo de ejemplo'.</p>
                    </div>
    
                    <div class="mb-6">
    
                        <button class="flex items-center text-indigo-600 text-sm cursor-pointer max-w-fit">
                            <i class="far fa-plus-square"></i>
                            <span class="ml-2">Más opciones</span>
                        </button>
    
                    </div>
    
                </div>
    
                <div class="flex items-center justify-end">
    
                    <button type="submit" class="px-4 py-1 text-md rounded-md bg-mundoVerdeGreen hover:bg-mundoVerdeDarkGreen duration-300 text-white">
                        <i class="fas fa-cloud-upload-alt text-sm"></i> 
                        <span class="ml-1">Subir</span>
                    </button>
    
                </div>
    
            </div>
        </form>
    
            <div class="p-6">
    
                <table class="importationTable w-full">
                    <thead class="bg-mundoVerdeGreen">
                        <tr>
                            <th class="rounded-tl-xl px-4 py-2 text-left text-white text-md font-normal">Order</th>
                            <th class="px-4 py-2 text-left text-white text-md font-normal">Client</th>
                            <th class="px-4 py-2 text-left text-white text-md font-normal">State</th>
                            <th class="px-4 py-2 text-left text-white text-md font-normal">Quant</th>
                            <th class="px-4 py-2 text-left text-white text-md font-normal">Total price</th>
                            <th class="px-4 py-2 text-left text-white text-md font-normal text-center">Warrantly ext.</th>
                            <th class="rounded-tr-xl px-4 py-2 text-left text-white text-md font-normal">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">365623</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Lesslie Alexandra</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">
                                <div>
                                    <span class="px-6 py-1 rounded-xl bg-mundoVerdeGreen text-sm text-white">To be processed</span>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">1</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">$394.65</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal text-center text-red-500 cursor-pointer"><i class="fas fa-times"></i></td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Feb. 14,2020 8:36:15</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">365623</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Lesslie Alexandra</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">
                                <div>
                                    <span class="px-6 py-1 rounded-xl bg-mundoVerdeGreen text-sm text-white">To be processed</span>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">1</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">$394.65</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal text-center text-red-500 cursor-pointer"><i class="fas fa-times"></i></td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Feb. 14,2020 8:36:15</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">365623</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Lesslie Alexandra</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">
                                <div>
                                    <span class="px-6 py-1 rounded-xl bg-mundoVerdeGreen text-sm text-white">To be processed</span>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">1</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">$394.65</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal text-center text-red-500 cursor-pointer"><i class="fas fa-times"></i></td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Feb. 14,2020 8:36:15</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">365623</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Lesslie Alexandra</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">
                                <div>
                                    <span class="px-6 py-1 rounded-xl bg-mundoVerdeGreen text-sm text-white">To be processed</span>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">1</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">$394.65</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal text-center text-red-500 cursor-pointer"><i class="fas fa-times"></i></td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Feb. 14,2020 8:36:15</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">365623</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Lesslie Alexandra</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">
                                <div>
                                    <span class="px-6 py-1 rounded-xl bg-mundoVerdeGreen text-sm text-white">To be processed</span>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">1</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">$394.65</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal text-center text-red-500 cursor-pointer"><i class="fas fa-times"></i></td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Feb. 14,2020 8:36:15</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">365623</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Lesslie Alexandra</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">
                                <div>
                                    <span class="px-6 py-1 rounded-xl bg-mundoVerdeGreen text-sm text-white">To be processed</span>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">1</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">$394.65</td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal text-center text-red-500 cursor-pointer"><i class="fas fa-times"></i></td>
                            <td class="px-4 py-3 text-left text-black text-md font-normal">Feb. 14,2020 8:36:15</td>
                        </tr>
                    </tbody>
                </table>
    
            </div>
    
        </div>
    
    </div>
    
</div>

@endsection