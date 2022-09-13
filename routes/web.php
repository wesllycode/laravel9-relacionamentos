<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudOperatorsController;

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

Route::get('/', [CrudOperatorsController::class,'index'])->name('site.index'); 

Route::prefix('create')->group(function () {
    Route::get('/user',[CrudOperatorsController::class,'createUser'])->name('site.createuser');
});