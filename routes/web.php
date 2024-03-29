<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
//Route::get('/',[ HomeController::class, 'checkUserType']);

// Route::get('/admin/dashboard', function (){
//     return view('admin_dashboard');
// })->name('admin.dashboard');

// Route::get('/user/dashboard', function (){
//     return view('user_dashboard');
// })->name('user.dashboard');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
