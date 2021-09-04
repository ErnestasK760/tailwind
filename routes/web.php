<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AccountController;

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
Route::group(['prefix' => 'clients'], function(){
    Route::get('', [ClientController::class, 'index'])->name('client.index');
    Route::get('create', [ClientController::class, 'create'])->name('client.create');
    Route::post('store', [ClientController::class, 'store'])->name('client.store');
    Route::get('edit/{client}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('update/{client}', [ClientController::class, 'update'])->name('client.update');
    Route::post('delete/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
    Route::get('show/{client}', [ClientController::class, 'show'])->name('client.show');
});
Route::group(['prefix' => 'accounts'], function(){
    Route::get('', [AccountController::class, 'index'])->name('account.index');
    Route::get('create', [AccountController::class, 'create'])->name('account.create');
    Route::post('store', [AccountController::class, 'store'])->name('account.store');
    Route::get('edit/{account}', [AccountController::class, 'edit'])->name('account.edit');
    Route::post('update/{account}', [AccountController::class, 'update'])->name('account.update');
    Route::post('delete/{account}', [AccountController::class, 'destroy'])->name('account.destroy');
    Route::get('show/{account}', [AccountController::class, 'show'])->name('account.show');
});
 

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
