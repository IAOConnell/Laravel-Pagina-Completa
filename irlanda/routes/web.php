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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',"IrlandaController@indexWeb")->name("web.index");
Route::get('/galeria',"IrlandaController@galeria")->name("web.galeria");

Route::group(["prefix" => "admin"],function(){

    Route::group(["prefix" => "condados"],function(){

        Route::get("/", "IrlandaController@index")->name("condados.index");

        Route::get("/create", "IrlandaController@create")->name("condados.create");

        Route::post("/store", "IrlandaController@store")->name("condados.store");

        Route::delete("{id}/delete", "IrlandaController@delete")->name("condados.delete");
        
        Route::get("{id}/edit", "IrlandaController@edit")->name("condados.edit");
        
        Route::put("{id}/update", "IrlandaController@update")->name("condados.update");


    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
    ?>