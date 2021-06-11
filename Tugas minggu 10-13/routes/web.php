<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Anjarcontroller;
// use App\Http\Controllers\Homecontroller;
//use Illuminate\Support\Facades\Auth;
//  use App\Http\Controllers\Backend\DashboardController;
// use App\Http\Controllers\Backend\PendidikanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

Route::get('/', function () {
  return view('welcome');
});
/*Route::get('/hello', function () {
   return 'Hello World';
}); 
Route::get('/belajar', function () {
  echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';   
});
Route::get('page/{nomor}',function($nomor){ 
  return 'ini Halaman ke-'.$nomor;   
});
Route::get('/gambar', function () {
  return view('gambar');
});*/

/*Route::get('user',[Anjarcontroller::class, '@index']);

Route::resource('user', Anjarcontroller::class);

Route::get("/watermelon", function(){
  return view("watermelon");
});

Route::group(['namespace'=> 'Frontend'], function(){
	Route::resource('home', 'HomeController');
});

Route::group(['namespace'=>'backend'], function()
  Route::resource('admin','DashboardController');
});*/

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['web','auth']], function () {
    Route::group(['namespace' => 'Backend'], function()
    {
        Route::resource('dashboard', DashboardController::class);
    });
});*/

Route::resource('home', HomeController::class);

// Route::resource('dashboard', DashboardController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['web','auth']], function () {
	Route::group(['namespace' => 'Backend'], function()
	{
		Route::resource('dashboard', DashboardController::class);
		Route::resource('pendidikan', PendidikanController::class);
	});
});



