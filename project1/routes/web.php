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


Route::resource('/admin','Admin\IndexController');
Route::resource('/type','Admin\TypeController');
Route::resource('/public','Admin\PublicController');
Route::get('/ajaxjin','Admin\TypeController@ajaxjin');
Route::get('/lbjy','Admin\PublicController@lbjy');
//Route::resource('/index','IndexController');
//前台首页
Route::get('/','Home\IndexController@index');
Route::get('/bb','Home\IndexController@bb');