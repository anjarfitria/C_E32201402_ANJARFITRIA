<?php

use Illuminate\Support\Facades\Route;
use app\http\controllers\Anjarcontroller;

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

Route::get('user',[Anjarcontroller::class, '@index']);

Route::resource('user', Anjarcontroller::class);

Route::get("/watermelon", function(){
  return view("watermelon");
});
Route::group(['namespace'=> 'Frontend'], function(){
	Route::resource('home', 'HomeController');
});
Route::group(['namespace'=>'backend'], function()
{
  Route::resource('admin','DashboardController');
});


