<?php
use Illuminate\Support\Facades\Route;







//Route::get('/', function () {
//    return view('Backend.Dashboard.index');
//});
Route::group(['prefix'  =>  'admin'], function () {
    Route::get('login', '\App\Http\Controllers\Backend\LoginController@showLoginForm')->name('admin.login');
    Route::post('login-submit', '\App\Http\Controllers\Backend\LoginController@login')->name('admin.login.post');
    Route::get('logout', '\App\Http\Controllers\Backend\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('Backend.Dashboard.index');
        })->name('admin.dashboard');

        Route::get('/settings', '\App\Http\Controllers\SettingController@index')->name('admin.settings');
        Route::post('/settings', '\App\Http\Controllers\SettingController@update')->name('admin.settings.update');

    });

});
