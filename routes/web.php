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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    Route::resource('permissions','PermissionsController');
    Route::resource('roles','RolesController');
    Route::resource('users','UsersController');

    Route::post('settings/delete','SettingsController@delete')->name('settings.delete');
    Route::post('settings/update','SettingsController@updateAll')->name('settings.update.all');
    Route::resource('settings','SettingsController');

});
