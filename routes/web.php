<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home', [postController::class, 'store', 'index']);
