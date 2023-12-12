<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrgController;

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

Route::get('/', [OrgController::class, 'login'])->name('login');

Route::group(['prefix' => 'organizer', 'middleware' => 'auth'], function(){
    Route::get('/index', [OrgController::class, 'index'])->name('index');
});
