<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RipalController;
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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/home0187', [HomeController::class,'home']);
Route::get('/artikel0187', [HomeController::class,'artikel']);
Route::get('/contactus0187', [HomeController::class,'contactus']);
