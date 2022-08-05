<?php

//use App\Http\Controllers\Admin\EventController;
use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Calendar;
use App\Models\Event;
use App\Http\Controllers\FullCalendarController;



Route::group([
    'namespace'  => 'App\Http\Controllers\Admin',
    'prefix'     => 'admin',
    'middleware' => ['auth'],
], function () {
    Route::resource('offormacion', 'OfformacionController');
    Route::resource('oftraballo', 'OftraballoController');
    Route::resource('empresa', 'EmpresaController');
    Route::resource('cidadan', 'CidadanController');

    /* enlaces de servizo de oficina: usuarios, permisos e contrasinais */
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');

    //Route::get('pdfview',array('as'=>'pdfview','uses'=>'CidadanController@pdfview'));
    //Route::get('pdfview',array('as'=>'pdfview','uses'=>'EmpresaController@pdfview'));
    /* descargar pdf */

Route::get('user-list-pdf',      'UserController@exportPdf')->name('users.pdf');
Route::get('user-list-excel',    'UserController@exportExcel')->name('users.excel');
Route::post('import-list-excel', 'UserController@importExcel')->name('users.import.excel');


    // Route::get('/cidadan/pdf', [\App\Http\Controllers\Admin\CidadanController::class, 'createPDF'])->name('cidadan.pdf');




    Route::resource('calendar', 'EventController');



    Route::get('/booking',[FullCalendarController::class, 'index']);

   // Route::get('/calendar', 'EventController');
    /* Route::post('/calendar/create-event', 'EventController@create');
    Route::post('/calendar/create-event', 'EventController@edit');
    Route::post('/calendar/create-event', 'EventController@destroy');*/
//Route::get('calendar', [\EventController::class, 'index'])->name('calendar.index');
//Route::post('calendar/create-event', [\EventController::class, 'create'])->name('calendar.create');
//Route::patch('calendar/edit-event', [\EventController::class, 'edit'])->name('calendar.edit');
//Route::delete('calendar/remove-event', [\EventController::class, 'destroy'])->name('calendar.destroy');


    Route::get('edit-account-info', 'UserController@accountInfo')->name('admin.account.info');
    Route::post('edit-account-info', 'UserController@accountInfoStore')->name('admin.account.info.store');
    Route::post('change-password', 'UserController@changePasswordStore')->name('admin.account.password.store');
});