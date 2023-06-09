<?php

use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\RentController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Manager\DashboardController as ManagerDashboardController;
use App\Http\Controllers\Manager\LocationController as ManagerLocationController;
use App\Http\Controllers\Manager\TypeController as ManagerTypeController;
use App\Http\Controllers\Manager\DriverController as ManagerDriverController;
use App\Http\Controllers\Manager\CarController as ManagerCarController;
use App\Http\Controllers\Manager\RentController as ManagerRentController;
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


Route::get('/', [LandingController::class, 'index'])->name('dashboard');
Route::get('/detail/{slug}', [DetailController::class, 'index'])->name('detail');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/rent/{slug}', [RentController::class, 'index'])->name('rent');
    Route::post('/rent/{slug}', [RentController::class, 'store'])->name('rent.store');

});
Route::prefix('manager')->name('manager.')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'manager'
])->group(function () {
    Route::get('/dashboard', [ManagerDashboardController::class, 'index'])->name('dashboard');
    Route::resource('locations', ManagerLocationController::class);
    Route::resource('types', ManagerTypeController::class);
    Route::resource('drivers', ManagerDriverController::class);
    Route::resource('cars', ManagerCarController::class);
    Route::resource('rents', ManagerRentController::class);
    Route::get('export', [ManagerRentController::class, 'export'])->name('rents.export');


});


