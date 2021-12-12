<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AboutUsController;

use App\Http\Controllers\LogInController;

use App\Http\Controllers\RegisterController;

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
/*
Route::get('/', function () {
    return view('FrontEnd/master');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[HomeController::class,'index']);

Route::get('/onama.html',[AboutUsController::class,'index']);

Route::get('/prijavise.html',[LogInController::class,'index']);

Route::get('/index.html',[HomeController::class,'index']);

Route::get('/registrirajse.html',[RegisterController::class,'index']);