@extends('template')
@section('content')

<div class="importsContainer bg-gray-100">

    <div class="py-6 px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8">

        <div class="bg-white rounded-lg">
    
            <div class="px-6 py-2 border-b border-gray-200">
                <h1 class="text-lg">Subir Fichero</h1>
            </div>
    
            <form method="POST" enctype="multipart/form-data" action="import-brand/file">
                @csrf
            <div class="max-w-screen-2xl mx-auto pt-8 px-6">
    
                {{-- <div class="fileContainer items-center justify-between mb-4">
    
                    <div>
                        <h4 class="text-md">Fichero</h4>
                    </div>
                    <div class="inputFileContainer items-center justify-end">
                        <div class="py-1 px-3 rounded-l-sm border" >
                            <p class="text-md">Seleccionar Archivo</p>
                        </div>
                        <div class="flex py-1 px-3 border border-l-0">
                            <label for="fileImport" class="text-md text-gray-600 cursor-pointer">05 2022_importacion Precios_act.xlsx</label>
                            <label for="fileImport" class="displayFileName text-md text-gray-600 cursor-pointer">Ningun archivo seleccionado</label>
                            <input type="file" name="fileImport" id="fileImport" class="opacity-0 invisible appearance-none h-0 w-0 box-border" onchange="showPreviewGallery(event);">
                        </div>
                        <div>
                            <div style="height: 34px;" class="removeFile text-md cursor-pointer p-1 flex items-center justify-center border border-red-700 box-border bg-red-600 text-white">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="flex items-center justify-center max-w-lg mx-auto w-full sm:items-start sm:pt-5 pb-8">
                        <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">  </label>
                        <div class="mt-1 sm:col-span-2 sm:mt-0 w-full">
                        <div class="previewContainer relative flex max-w-lg mx-auto justify-center rounded-md border-2 border-dashed border-gray-300 p-3">
                            <div class="space-y-1 text-center">
                            <svg class="topIcon mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600 !mt-0">
                                <div class="form-input relative" style="display: none;">
                
                                    <div class="previewTopContainer rounded-md">
                
                                        <div>
                                            <span style="font-size: 16px;" class="previewFileName font-medium text-white"></span>
                                        </div>
                
                
                                    </div>
                                    
                                </div>
                                <label for="fileImport" class="fileImport relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Upload a file</span>
                                <input id="fileImport" name="fileImport" type="file" class="sr-only" accept=".csv" onchange="showPreview(event);">
                                </label>
                                <p class="drag-and-drop-message pl-1">or drag and drop</p>
                            </div>
                            <p class="metaInfo text-sm text-gray-500">csv, .xls o .xlsx</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div style="display: none;" class="invalidFormatMessage text-sm text-red-500 text-center font-medium pb-8">
                        <span>El formato de archivo es invalido, por favor seleccione un archivo .csv</span>
                    </div>

                </div>

                <div style="display: none;" class="fileDataContainer pb-4 bg-white rounded-b-md">

                    <div class="flex items-center justify-between max-w-lg mx-auto bg-gray-100 p-6 rounded-md">

                        <div class="flex items-center gap-4">
    
                            <div>
                                <img style="max-width: 28px;" src="{{config('app.url')}}/images/account.png" alt="">
                            </div>
                            
                            <div>
                                <p class="displayFileName leading-none text-md text-gray-600 font-medium"></p>
                                <span class="displayFileSize leading-none text-sm text-gray-600"></span>
                            </div>
    
                        </div>
    
                        
    
                        <div class="removeFile w-8 h-8 rounded-md text-md cursor-pointer p-1 flex items-center justify-center border border-red-600 box-border bg-red-600 text-white">
                            <i class="fas fa-trash-alt"></i>
                        </div>
    
                    </div>

                </div>

                <script>

                    function showPreview(event){
                            if(event.target.files.length > 0){
                                let sizeKB = event.target.files[0].size / 1024;
                                document.querySelector(".fileDataContainer").style.display = 'block';
                                document.querySelector(".displayFileName").innerHTML = event.target.files[0].name;
                                document.querySelector(".displayFileSize").innerHTML = sizeKB.toFixed(1) + 'KB';
                                console.log(event.target.files[0].type)
                            } 
                        }

                        document.querySelector(".removeFile").addEventListener("click", ()=>{
                            document.querySelector(".fileDataContainer").style.display = 'none';
                            document.querySelector("#fileImport").value = '';
                        })

                        function readfiles(files) {
                            for (var i = 0; i < files.length; i++) {
                                if(files[i].type !== 'text/csv') {
                                    document.querySelector(".invalidFormatMessage").style.display = 'block';
                                } else {
                                    document.querySelector(".invalidFormatMessage").style.display = 'none';
                                    let sizeFileKB = files[i].size / 1024;
                                    document.querySelector('.displayFileName').innerHTML = files[i].name;
                                    document.querySelector('.displayFileSize').innerHTML = sizeFileKB.toFixed(1) + 'KB';
                                    document.querySelector(".fileDataContainer").style.display = 'block';
                                    reader = new FileReader();
                                    reader.onload = function(event) {
                                        // document.querySelector('.displayFileName').value = event.target.result;
                                    }
                                    reader.readAsDataURL(files[i]);
                                }
                            }
                        }
                            var holder = document.querySelector('.previewContainer');
                            holder.ondragover = function () { this.classList.add = 'hover'; return false; };
                            holder.ondragend = function () { this.classList.add = ''; return false; };
                            holder.ondrop = function (e) {
                            e.preventDefault();
                            readfiles(e.dataTransfer.files);
                        }


                </script>
    
                <div>
    
                    <div class="py-6">
                        <p class="text-md">Puedes utilizar ficheros en formato .csv o excel (.xls o .xlsx), siguiendo la estructura especificada en la 'Hoja de cálculo de ejemplo'.</p>
                    </div>
    
                    <div class="mb-6">
    
                        <a href="{{route('export-brand')}}" class="px-4 py-3 text-md rounded-md bg-mundoVerdeGreen hover:bg-mundoVerdeDarkGreen duration-300 text-white">
                            <i class="fa-solid fa-file-export"></i>
                            <span class="ml-2">Descargar Template Simple</span>
                        </a>
    
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

<style>
    .fileContainer {
        display: flex;
        justify-content: space-between;
    }
    .inputFileContainer {
        display: grid;
        align-items: center;
        grid-template-columns: 1fr 2fr 40px;
    }
</style>

@endsection