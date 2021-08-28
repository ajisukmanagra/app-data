<?php

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
    return view('home');
});

//login
Route::get('/login','Authcontroller@login')->name('login');
Route::post('/postlogin','Authcontroller@postlogin');
Route::get('/logout','Authcontroller@logout');
//dasboard
Route::group(['middleware' => ['auth','checkrole:admin']],function(){
    Route::get('/dasboard', 'dasboardcontroller@index');
    //siswa
    Route::get('/siswa', 'siswacontroller@index');
    Route::post('/siswa/create', 'siswacontroller@create');
    Route::get('/siswa/{id}/edit', 'siswacontroller@edit');
    Route::post('/siswa/{id}/update', 'siswacontroller@update');
    Route::get('/siswa/{id}/delete', 'siswacontroller@delete');
    Route::get('/siswa/{id}/profile','siswacontroller@profile');

    //agenda
    Route::get('/agenda', 'agendacontroller@index');
    Route::post('/agenda/create', 'agendacontroller@create');
    Route::get('/agenda/{id}/edit', 'agendacontroller@edit');
    Route::post('/agenda/{id}/update', 'agendacontroller@update');
    Route::get('/agenda/{id}/delete', 'agendacontroller@delete');

    //sekeltaris
    Route::get('/sekeltaris', 'sekeltariscontroller@index');
    Route::post('/sekeltaris/create', 'sekeltariscontroller@create');
    Route::get('/sekeltaris/{id}/edit', 'sekeltariscontroller@edit');
    Route::post('/sekeltaris/{id}/update', 'sekeltariscontroller@update');
    Route::get('/sekeltaris/{id}/delete', 'sekeltariscontroller@delete');
});

Route::group(['middleware' => ['auth','checkrole:admin,sekeltaris']],function(){
    Route::get('/dasboard', 'dasboardcontroller@index');
        //siswa
        Route::get('/siswa', 'siswacontroller@index');
        Route::post('/siswa/create', 'siswacontroller@create');
        Route::get('/siswa/{id}/edit', 'siswacontroller@edit');
        Route::post('/siswa/{id}/update', 'siswacontroller@update');
        Route::get('/siswa/{id}/delete', 'siswacontroller@delete');
        Route::get('/siswa/{id}/profile','siswacontroller@profile');

        //agenda
        Route::get('/agenda', 'agendacontroller@index');
        Route::post('/agenda/create', 'agendacontroller@create');
        Route::get('/agenda/{id}/edit', 'agendacontroller@edit');
        Route::post('/agenda/{id}/update', 'agendacontroller@update');
        Route::get('/agenda/{id}/delete', 'agendacontroller@delete');
});
