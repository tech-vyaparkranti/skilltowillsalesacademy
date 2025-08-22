<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // This will return the 'resources/views/home.blade.php' view
});
