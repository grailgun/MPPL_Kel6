<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/',function(){return view('index');});
Route::get('/profil/{id}', 'PengusahaController@profil');

//Route::get('/', 'PengusahaController@index');
Route::get('/pengusaha/{id}', 'PengusahaController@show');

//Formulir Step 1 - Profil depan
Route::get('/formulir-1', 'FormController@FormPage1');
Route::post('/formulir/step-1', 'FormController@PostFormStep1');
Route::post('/formulir-1/remove-image', 'FormController@removeImage1');

//Formulir Step 2 - Portofolio dan galeri
Route::get('/formulir-2', 'FormController@FormPage2');
Route::post('/formulir/step-2', 'FormController@PostFormStep2');

//Formulir step 3 - Alamat
Route::get('/formulir-3', 'FormController@FormPage3');
Route::post('/formulir/step-3', 'FormController@PostFormStep3');

//Formulir step 4 - Produk
Route::get('/formulir-4', 'FormController@FormPage4');
Route::post('/formulir/store', 'FormController@PostFormStore');


// Admin Login //
Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');

//Middleware admin
Route::middleware('auth:admin')->group(function(){
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/logout', 'Auth\AdminAuthController@postLogout');
    Route::get('/admin/profil-pengusaha/{id}', 'AdminController@showProfile');
    Route::get('/admin/approve/{id}', 'AdminController@approve');
});