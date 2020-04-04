<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::view('save', 'signup.signup');
Route::post('register', 'UserController@register');
Route::view('intro', 'login.login');
Route::post('login', 'UserController@authenticate');

Route::delete('deleteUser/{id}', 'usuarioController@destroy');
Route::view('editUser', 'signup.edtiSign');
Route::get('editUser/{id}', 'usuarioController@edit');
Route::patch('editarUsuario/{id}', 'usuarioController@update');

Route::view('agent', 'agent.agent');
Route::post('registerAgent', 'agentController@store');
Route::delete('deleteAgent/{id}', 'agentController@destroy');
Route::view('edit', 'agent.editAgent');
Route::get('editAgent/{id}', 'agentController@edit');
Route::patch('editarAgente/{id}', 'agentController@update');

// Route::view('home', 'home');
Route::get('home', 'agentController@index');

Route::group(['middleware' => ['jwt.verify']], function() {
    /*AÑADE AQUI LAS RUTAS QUE QUIERAS PROTEGER CON JWT*/
});








// // Route::middleware('auth:api')->get('/user', function (Request $request) {
// //     return $request->user();
// // });

// Route::get('/login',[ 'as' => 'sp', function ()
// {
//     return view('login.login');
// }]);

// // Route::get('/signup', function ()
// // {
// //     return view('signup.signup');
// // });

// Route::resource('/signup', 'usuarioController');
