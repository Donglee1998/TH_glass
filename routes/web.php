<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;

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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::group(['prefix'=>'/'],function(){
	
	 Route::get('/',[PageController::class, 'getIndex'])->name('index');


	 Route::get('/blog',[PageController::class, 'getBlog'])->name('blog');

	 Route::get('/contact',[PageController::class, 'getContact'])->name('contact');

	 Route::group(['prefixe'=>'/login'],function(){

	 	Route::get('/login',[LoginController::class, 'getLogin'])->name('login');

	 	Route::get('/register',[LoginController::class, 'getRegister'])->name('register');

	 	Route::get('/password',[LoginController::class, 'getPassword'])->name('password');

	 });

	 Route::group(['prefixe'=>'/event'],function(){

	 	Route::get('/event',[EventController::class, 'getEvent'])->name('event');

	 	Route::get('/event/register',[EventController::class, 'getRegister'])->name('register_event');

	 });


});

	Route::get('/admin', function () {
    return view('admin.layouts.master');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
