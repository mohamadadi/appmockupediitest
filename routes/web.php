<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BiodataController;

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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('/dashboarad');
    Route::post('/store-pendidikan', 'BiodataController@store_pendidikan')->name('store_pendidikan');
    Route::post('/store-pelatihan', 'BiodataController@store_pelatihan')->name('store_pelatihan');
    Route::post('/store-rk', 'BiodataController@store_rk')->name('store_rk');

    Route::group(['prefix'=>'biodata','as'=>'biodata.'], function(){
        Route::get('/', 'BiodataController@index');
        Route::get('/form', ['as' => 'form', 'uses' => 'BiodataController@form']);
      Route::get('/form-edit/{id?}', ['as' => 'form_edit', 'uses' => 'BiodataController@form_edit']);
      Route::post('/store-biodata', ['as' => 'store_biodata', 'uses' =>'BiodataController@store_biodata'])->name('store-biodata');
      Route::post('/update-biodata', ['as' => 'update_biodata', 'uses' => 'BiodataController@update_biodata'])->name('update-biodata');
      Route::get('/datatable', ['as' => 'datatable', 'uses' => 'BiodataController@datatable']);
      Route::get('/detail/{id?}', ['as' => 'detail', 'uses' => 'BiodataController@detail']);
    });

    


    
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
