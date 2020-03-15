<?php

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

//Route::   get 请求方式  ('访问的路径',function(){ 处理 })
// 路由  控制器  中间  视图  
// 
Route::get('/', function () {
	echo "welcome";
});

Route::group([],function(){
	
	Route::get("/typedel","Admin\TypeController@typedel");
	Route::get("/sindel","Admin\SingerController@sindel");
	Route::get("/ablundel","Admin\AlbunController@ablundel");
	Route::resource("/admin","Admin\AdminController");
	Route::resource("/type","Admin\TypeController");
	Route::resource("/gedan","Admin\GedanController");
	Route::resource("/singer","Admin\SingerController");
	Route::resource("/albun","Admin\AlbunController");
	Route::resource("/music","Admin\MusicController");
});




Route::resource("/gedanye","Home\GedanyeController");
Route::resource("/geshou","Home\GeshouController");


Route::resource('/file',"Admin\FileController");