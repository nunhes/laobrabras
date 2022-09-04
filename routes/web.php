<?php

use Illuminate\Support\Facades\Route;

// use Admin\UserController;

use App\Http\Livewire\Calendar;
use App\Models\Event;


use App\Exports\OftraballoExport;
use App\Http\Controllers\Admin\OftraballoController;

// debería ser innecesario
use App\Http\Controllers\Admin\EventController;

//use App\Http\Controllers\FullCalenderController;

//use App\Http\Controllers\PaiseController;

use App\Http\Controllers\AsuntosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('benvida');
});  /** paxina de entrada  */

    /**    Route::get('/inicio', function () {
        return view('inicio');
    });  paxina exemplo contido estático  */

Route::get('/programa', function () {
    return view('obradoiro');
});  /** paxina sobre o taller formaweb iv  */

Route::get('/manual', function () {
        return view('manual');
    });   /** paxina con datos de interese + guia da aplicación  */

   Route::get('/fullcalender', [FullCalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);

    Route::get('events',[\App\Http\Controllers\EventController::class,'index'])->name('events.index');
    Route::post('events/store',[\App\Http\Controllers\EventController::class,'store'])->name('events.store');
    Route::get('events/edit',[\App\Http\Controllers\EventController::class,'edit'])->name('events.edit');
    Route::get('events/update',[\App\Http\Controllers\EventController::class,'update'])->name('events.update');
    Route::get('events/destroy',[\App\Http\Controllers\EventController::class,'destroy'])->name('events.destroy');

    Route::get('form', [PaiseController::class, 'index']);


// Ruta para exportar en excel para Oftraballo
Route::get('export', [\App\Http\Controllers\Admin\OftraballoController::class, 'export'])->name('admin.export');

// Ruta para exportar en pdf para Oftraballo
Route::get('export/pdf', [\App\Http\Controllers\Admin\OftraballoController::class, 'exportpdf'])->name('admin.exportpdf');

// Ruta para exportar en excel para Cidadans
Route::get('export/cidadan', [\App\Http\Controllers\Admin\CidadanController::class, 'exportcidadan'])->name('admin.exportcidadan');

// Ruta para exportar en pdf para Cidadans
Route::get('export/cidadanpdf', [\App\Http\Controllers\Admin\CidadanController::class, 'exportpdfcidadan'])->name('admin.exportpdfcidadan');

// Ruta para exportar en excel para Empresas
Route::get('export/empresa', [\App\Http\Controllers\Admin\EmpresaController::class, 'exportempresa'])->name('admin.exportempresa');

// Ruta para exportar en pdf para Empresas
Route::get('export/empresaspdf', [\App\Http\Controllers\Admin\EmpresaController::class, 'exportpdfempresa'])->name('admin.exportpdfempresa');

// Ruta para exportar en excel para Offormación
Route::get('export/formacion', [\App\Http\Controllers\Admin\OfformacionController::class, 'exportofformacion'])->name('admin.exportofformacion');

// Ruta para exportar en pdf para Offormación
Route::get('export/formacionpdf', [\App\Http\Controllers\Admin\OfformacionController::class, 'exportpdfofformacion'])->name('admin.exportpdfofformacion');


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

/**
 * queremos que as rutas se sometan a autentificación do usuario
 * para o empregamos middleware(['auth'])
 * para non crear codigo spaguetti agruparemos todas as rutas
 * afectadas por ese mesmo middleware
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /*Route::get('/fullcalender', [FullCalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);*/

Route::resource('asuntos', AsuntosController::class);
    /**
     * calendario
     */
  Livewire::component('calendar', Calendar::class);

    /**
     * para ver os datos do usuario imos botar man dun controlador dependente de Auth
     * que nos propocionara todos os datos do perfil do usuario a traves dun helper
     *
     */
    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

   // Route::resource('tasks', TaskController::class);
});

require __DIR__ . '/auth.php';
