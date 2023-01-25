<?php

use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('index');
    // return view('welcome');
});

Route::get('/email', function (Request $request) {
    $email = App\Email::updateOrCreate($request->all());
    return sprintf('¡Gracias por contactar, %s! <a href="/">Inicio</a>', $email->email);
});
