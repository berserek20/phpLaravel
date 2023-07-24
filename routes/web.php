<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;

use App\Models\User;


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
// Route::get('/demo/{name}/{id?}',function($name,$id=null){
//     $data=compact('name','id');
//     return view('demo')->with($data);
// });
Route::get('/register',[RegistrationController::class , 'index']);
Route::post('/register',[RegistrationController::class , 'register']);


Route::get('/login',[LoginController::class , 'index'])->name('login');
Route::post('/login',[LoginController::class , 'login']);
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/homepage',[HomepageController::class,'index'])->middleware('auth');
