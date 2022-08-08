<?php

use Illuminate\Support\Facades\Route;

// use Admin\UserController;

use App\Http\Livewire\Calendar;
use App\Models\Event;


use App\Exports\OftraballoExport;
use App\Http\Controllers\Admin\OftraballoController;

// debería ser innecesario
//use App\Http\Controllers\Admin\EventController;

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
    return view('welcome');
});

Route::get('/documentacion', function () {
    return view('documentacion');
});

// Ruta para exportar en excel
Route::get('export', [OftraballoController::class, 'export'])->name('admin.export');

// Ruta para exportar en pdf
Route::get('export', [OftraballoController::class, 'exportpdf'])->name('admin.exportpdf');


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

    Route::resource('tasks', TaskController::class);
});

require __DIR__.'/auth.php';

