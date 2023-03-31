<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', 'WordController@homepage')->name('index');
Route::get('/search', 'WordController@search')->name('admin.search');
Route::post('/result', 'WordController@result')->name('admin.result');

Route::get('/register17092019', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register17092019', [RegisterController::class, 'register'])->name('register');
Auth::routes(
  ['register' => false],
);
//Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('admin.home');
    Route::resource('words', 'WordController');
    Route::get('/import-form','WordController@import_form')->name('admin.word.importForm');
    Route::post('/import', 'WordController@import')->name('admin.word.import');
    Route::get('/words-data', 'WordController@data')->name('admin.words.data');
    Route::get('/profile', 'ProfileController@index')->name('admin.profile');
    Route::put('/profile', 'ProfileController@update')->name('admin.profile.update');
    Route::get('/about', function () {
        return view('admin/about');
    })->name('admin.about');
});
