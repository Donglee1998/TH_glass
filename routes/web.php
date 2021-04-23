<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginAdminController;

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

	 Route::group(['prefix'=>'/signin'],function(){

	 	Route::get('/',[LoginController::class, 'getLogin'])->name('signin');

	 	Route::get('/register',[LoginController::class, 'getRegister'])->name('registers');

	 	Route::get('/password',[LoginController::class, 'getPassword'])->name('password');

	 });

	 Route::group(['prefix'=>'/event'],function(){

	 	Route::get('/event',[EventController::class, 'getEvent'])->name('event');

	 	Route::get('/event/register',[EventController::class, 'getRegister'])->name('register_event');

	 });


});
		

	Route::group(['prefix'=>'/admin'],function(){

		Route::get('/adminlist',[AdminController::class, 'getIndex'])->name('admin_index');

		Route::get('/adminadd',[AdminController::class, 'getAddAdmin'])->name('admin_addadmin');

		Route::post('/adminadd',[AdminController::class, 'postAddAdmin'])->name('admin_addadmin');

		Route::get('/logout',[LoginAdminController::class, 'getLogout'])->name('admin_logout');

		//Route::post('/adminaddroleadmin',[RoleAdminController::class, 'postAddRoleAdmin'])->name('admin_addroleadmin');

		Route::get('/permission',[AdminController::class, 'getViewPermission'])->name('admin_viewpermission');

		Route::get('/login',[LoginAdminController::class, 'getLogin'])->name('admin_login');

		Route::post('/login',[LoginAdminController::class, 'postLogin'])->name('admin_login');
	});


