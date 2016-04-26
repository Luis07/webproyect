<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});
Route::get('login', function () {
	return view('login');
});
Route::get('correo', function () {
	return view('correo');
});
Route::get('correo', function () {	
	return view('correo',['$emails' => '','metodo'=>'']);
});
Route::get('registro', function () {
	return view('registro');
});
Route::any('safesalida/{a}/{b}/{c}/{d}','MailController@safesalida');
Route::any('sendsalida/{a}/{b}/{c}/{d}','MailController@sendsalida');
Route::any('eliminar/{a}','MailController@eliminar');
Route::get('confirmregistro', function () {
	return view('confirm_register', ['email' =>'']);
});
Route::Post('conf_registro','UserController@validarregistro');
Route::Post('login','UserController@login');
Route::get('registro', function () {
	return view('registro', ['name' => '','lastname' =>'','error' =>'']);});
Route::get('correo', function () {
return view('correo')->with(['emails' =>'']);});
Route::post('registro','UserController@save');
Route::get('mail/{para}/{asunto}/{contenido}','MailController@Send_mail_confirm_registro',function (){
	return view('login');	
});
Route::get('borrador','MailController@Correosborrador');
Route::get('enviados','MailController@CorreosEnviados');
Route::get('salida','MailController@CorreosSalida');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
