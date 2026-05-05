<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('pages.index');
});

Route::post('/contact/send', [ContactController::class, 'send']);