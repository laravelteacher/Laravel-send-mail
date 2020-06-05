<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use App\Mail\MyTestMail;
use App\Mail\Salam;


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

// Route::get('email', function(){
//     Mail::to('alirezamosavi346@gmail.com')->send(new Salam());
//     return new Salam();
// });

Route::get('/', 'controlleruser@showuser');
Route::get('/admin/user', 'controlleruser@createuser');
Route::post('/admin/user', 'controlleruser@saveuser')->name('createuser');
Route::get('/admin/users', 'controlleruser@showusers')->name('showusers');
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@signin')->name('signin');
Route::post('/login', 'AuthController@logout')->name('logout');

Route::get('/a', function () {
    return view('layouts/app');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
