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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test/start', 'TestController@start')->name('test.start')->middleware('auth');
Route::get('/run-migrations', function () {
    // Ogohlantirishlarni yashirish
    error_reporting(E_ERROR | E_PARSE);
    
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        return "Natija: <br>" . \Illuminate\Support\Facades\Artisan::output();
    } catch (\Exception $e) {
        return "Xatolik: " . $e->getMessage();
    }
});
