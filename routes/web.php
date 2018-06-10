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
header('Access-Control-Allow-Origin: *');

Route::get('/',[
	'uses'=>'timeline_api_controller@get_plotpoints',
	'as'=>'timeline'	
]);

 
/*********************************************************************************************************/
/************************************** Plotpoints  **************************************************/
/*********************************************************************************************************/
Route::get('/get_plotpoints/',[
	'uses'=>'timeline_api_controller@get_plotpoints',
	'as'=>'timeline'	
]);

