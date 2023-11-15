<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DamageController;
use App\Models\City;

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

// Route::get('/', function () {
//     echo "Hello World";
// });

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/user', [HomeController::class, 'index'])->name('index');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/store', [HomeController::class, 'store'])->name('user.store');

Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

Route::get('/provinsi', [ProvinceController::class,'provinsi'])->name('provinsi');

Route::get('/createprov', [ProvinceController::class, 'createprov'])->name('provinsi.create');
Route::post('/storeprov', [ProvinceController::class, 'storeprov'])->name('provinsi.store');
Route::get('/editprov/{id}', [ProvinceController::class, 'editprov'])->name('provinsi.edit');
Route::put('/updateprov/{id}', [ProvinceController::class, 'updateprov'])->name('provinsi.update');
Route::delete('/deleteprov/{id}', [ProvinceController::class, 'deleteprov'])->name('provinsi.delete');

Route::get('/kota', [CityController::class,'kota'])->name('kota');

Route::get('/createkota', [CityController::class, 'createkota'])->name('kota.create');
Route::post('/storekota', [CityController::class, 'storekota'])->name('kota.store');
Route::get('/editkota/{id}', [CityController::class, 'editkota'])->name('kota.edit');
Route::put('/updatekota/{id}', [CityController::class, 'updatekota'])->name('kota.update');
Route::delete('/deletekota/{id}', [CityController::class, 'deletekota'])->name('kota.delete');

Route::get('/kerusakan', [DamageController::class, 'kerusakan'])->name('kerusakan');

Route::get('/createkerusakan', [DamageController::class, 'createkerusakan'])->name('kerusakan.create');
Route::post('/storekerusakan', [DamageController::class, 'storekerusakan'])->name('kerusakan.store');

