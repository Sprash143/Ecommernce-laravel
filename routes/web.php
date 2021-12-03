<?php

use App\Http\Controllers\user;

use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Session;


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

Route::get('/login', function () {
    return view('login');
});

// Route::get('/logout',function()
// {

//     Session::pull('user');
//     return redirect('login');
// });

Route::match(['get','post'],'logout',[user::class,"logout"]);

Route::view('/login', 'login');

Route::post('/login',[user::class,'login']);
//Route::view('/welcome', 'welcome');
Route::middleware(['user'])->group(function () {
    route::get('/welcome',[user::class,'welcome']);
});


Route::get('/working',[user::class,'checking']);
