<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

<?php

use App\Http\Controllers\PreguntaFrecuenteController;
use Illuminate\Support\Facades\Route;

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//      **************     Admin Routes     **********************

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    });
    
    Route::put('/accommodations/{id}/update-translation', [AlojamientoController::class, 'specificUpdate'])->name('accommodations.update_translation');
    Route::resource('/accommodations', AlojamientoController::class)->middleware('verify.lugares');;
    
    Route::put('/places/{id}/update-translation', [LugarController::class, 'specificUpdate'])->name('places.update_translation');
    Route::resource('/places', LugarController::class)->middleware('verify.provincias');;
    
    Route::put('/business/{id}/update-translation', [NegocioController::class, 'specificUpdate'])->name('business.update_translation');
    Route::resource('/business', NegocioController::class)->middleware('verify.provincias');;
    
    Route::put('/events/{id}/update-translation', [EventoController::class, 'specificUpdate'])->name('events.update_translation');
    Route::resource('/events', EventoController::class)->middleware('verify.provincias');;
    
    Route::put('/guides/{id}/update-translation', [GuiaController::class, 'specificUpdate'])->name('guides.update_translation');
    Route::resource('/guides', GuiaController::class)->middleware('verify.lugares');;

    Route::put('/frecuent-questions/{PreguntaFrecuenteID}/update-translation', [PreguntaFrecuenteController::class, 'specificUpdate'])->name('frecuent-questions.update_translation');
    Route::resource('/frecuent-questions', PreguntaFrecuenteController::class);
    
    Route::put('/provinces/{ProvinciaID}/update-translation', [ProvinciaController::class, 'specificUpdate'])->name('provinces.update_translation');
    Route::resource('/provinces', ProvinciaController::class);
});
