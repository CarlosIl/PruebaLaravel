<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return 'Home';
});

// Route::get('/usuarios', function () {
//     return 'Usuarios';
// });

// Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios', [UserController::class, 'index']);


// Route::get('/usuarios/{id}', function ($id) {
//     return 'Mostrando detalles del usuario: '.$id;
// })->where('id','[0-9]+');

Route::get('/usuarios/{id}', [UserController::class, 'show'])
    ->where('id','[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});

Route::get('/saludo/{name}/{nickname?}', function ($name,$nickname = null) {

    $name = ucfirst($name);

    if($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }
    else{
        return "Bienvenido {$name}, no tienes apodo";
    }

});