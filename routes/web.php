<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return view('home'); // This will return the 'resources/views/home.blade.php' view
});

Route::get('/register', [RegistrationController::class,'showForm'])->name('register.form');
Route::post('/register', [RegistrationController::class,'store'])->name('register.store');
Route::match(['get', 'post'], '/razorpay/verify', [RegistrationController::class,'verifyPayment'])->name('razorpay.verify');
