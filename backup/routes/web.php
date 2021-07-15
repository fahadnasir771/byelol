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

Route::get('/register', 'HomeController@welcome')->name('register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/register', 'HomeController@register')->name('user.register');
Route::get('/user/data', 'HomeController@data')->name('user.data');

Route::get('/emoji/store', 'EmojiController@store')->name('emoji.store');
Route::get('/emoji/get', 'EmojiController@get_emoji')->name('emoji.get');

Route::get('/user/logout', 'EmojiController@user_logout')->name('user.logout');

Route::get('/clearconfig', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
});
Route::get('admin/resources', [App\Http\Controllers\AdminController::class,'resources'])->name("Admin.resources");

Auth::routes();
Route::get('logout', 'LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
