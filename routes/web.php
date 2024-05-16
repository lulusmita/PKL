<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\assuranceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fulfillmentController;
use App\Http\Controllers\sesiController;
use App\Http\Controllers\usersController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

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


Route::middleware(['guest'])->group(function () {
    Route::get('/', [sesiController::class, 'index'])->name('login');
    Route::post('/', [sesiController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [assuranceController::class, 'dashboard'])->name('dashboard');

    Route::get('/fulfillment', [fulfillmentController::class, 'dashboard'])->name('fulfillment');

    Route::get('/newLink', [fulfillmentController::class, 'newLinks'])->name('newLink')->middleware('userAkses:Admin,MSO');

    Route::post('/insertNewLink', [fulfillmentController::class, 'insertNewLink'])->middleware('userAkses:Admin,MSO');
    Route::post('/updateNewLink/{id}', [fulfillmentController::class, 'updateNewLink'])->name('updateNewLink')->middleware('userAkses:Admin,MSO');
    Route::get('/deleteNewlink/{id}', [fulfillmentController::class, 'deleteNewlink'])->name('deleteNewlink')->middleware('userAkses:Admin,MSO');
    Route::post('/configurationlink/{id}', [fulfillmentController::class, 'configurationlink'])->name('configurationlink')->middleware('userAkses:Admin,MSO');
    Route::get('/exportExcelNewlink', [fulfillmentController::class, 'exportExcelNewlink'])->name('exportExcelNewlink')->middleware('userAkses:Admin,MSO');
    Route::post('/importExcelNewlink', [fulfillmentController::class, 'importExcelNewlink'])->name('importExcelNewlink')->middleware('userAkses:Admin,MSO');

    Route::get('/rebalancing', [fulfillmentController::class, 'rebalancing'])->name('rebalancing')->middleware('userAkses:Admin,MSO');
    Route::post('/insertRebalancing/{id}', [fulfillmentController::class, 'insertRebalancing'])->name('insertRebalancing')->middleware('userAkses:Admin,MSO');
    Route::post('/updateRebalancing/{id}', [fulfillmentController::class, 'updateRebalancing'])->name('updateRebalancing')->middleware('userAkses:Admin,MSO');
    Route::get('/deleteRebalancing/{id}', [fulfillmentController::class, 'deleterebalance'])->name('deleteRebalancing')->middleware('userAkses:Admin,MSO');
    Route::get('/exportExcelRebalancing', [fulfillmentController::class, 'exportExcelRebalancing'])->name('exportExcelRebalancing')->middleware('userAkses:Admin,MSO');
    Route::post('/importExcelRebalancing', [fulfillmentController::class, 'importExcelRebalancing'])->name('importExcelRebalancing')->middleware('userAkses:Admin,MSO');


    Route::get('/profil', [usersController::class, 'profil'])->name('profil');
    Route::post('/updateProfil/{id}', [usersController::class, 'updateProfil']);

    Route::get('/users', [usersController::class, 'users'])->name('users')->middleware('userAkses:Admin');
    Route::post('/insertUsers', [usersController::class, 'insertUsers'])->middleware('userAkses:Admin');
    Route::post('/updateUsers/{id}', [usersController::class, 'updateUsers'])->name('updateUsers')->middleware('userAkses:Admin');
    Route::get('/deleteUsers/{id}', [usersController::class, 'deleteUsers'])->name('deleteUsers')->middleware('userAkses:Admin');

    Route::get('/logout', [sesiController::class, 'logout']);
});



Route::get('/home', function () {
    return redirect('/dashboard');
});
