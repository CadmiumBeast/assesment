<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::put('/medicine/{medicine}', [MedicineController::class,'update'])->name('medicine.update');
Route::put('/customer/{customer}', [CustomerController::class,'update'])->name('customer.update');

Route::middleware(['auth', 'user-access:cashier'])->group(function () {
    Route::get('/home', [HomeController::class,'index'])->name('cashier.home');
    Route::get('cashier/medicines/{medicine}/edit', [MedicineController::class,'edit'])->name('cashier.medicine.edit');
    Route::delete('cashier/medicine/{medicine}', [MedicineController::class,'cashierDestroy'])->name('cashier.medicine.destroy');
});
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager', [HomeController::class,'manager'])->name('manager.home');
    Route::get('manager/customer/{customer}/edit', [MedicineController::class,'edit'])->name('manager.customer.edit');
});
Route::middleware(['auth', 'user-access:owner'])->group(function () {
    Route::get('/owner', [HomeController::class,'owner'])->name('owner.home');
    Route::get('/medicine', [MedicineController::class,'create'])->name('medicine.create');
    Route::post('/medicine/store', [MedicineController::class,'store'])->name('medicine.store');
    Route::get('/medicine/view', [MedicineController::class,'index'])->name('medicine.index');
    Route::get('/medicine/{medicine}/edit', [MedicineController::class,'edit'])->name('medicine.edit');
    Route::delete('/medicine/{medicine}', [MedicineController::class,'destroy'])->name('medicine.destroy');
    Route::get('/customer', [CustomerController::class,'create'])->name('customer.create');
    Route::post('/customer/store', [CustomerController::class,'store'])->name('customer.store');
    Route::get('/customer/view', [CustomerController::class,'index'])->name('customer.index');
    Route::get('/customer/{customer}/edit', [CustomerController::class,'edit'])->name('customer.edit');
    Route::delete('/customer/{customer}', [CustomerController::class,'destroy'])->name('customer.destroy');


});


