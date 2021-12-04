<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('we');
});

// Route::get('/', function () {
//     return view('layouts.master');
// });

// Route::get('/table', function () {
//     return view('layouts.table');
// });

// Route::get('/data-tables', function () {
//     return view('layouts.data-tables');
// });


// Route::get('/',[HomeController::class,'home']);
// Route::get('/register', [AuthController::class,'register']);
// Route::get('/welcome', [AuthController::class,'welcome']);
