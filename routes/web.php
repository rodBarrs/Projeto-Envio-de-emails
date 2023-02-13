<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;
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
    return view('welcome');
});

Route::get('/mensagem-teste', function(){
    return new MensagemTesteMail();
    //Mail::to('rodrigosbarros53@gmail.com')->send(new MensagemTesteMail());
   // return 'E-mail enviado com sucesso!';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
