<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

Route::get('/', HomeController::class );

Route:: get('/posts', [postController::class, 'index']);

Route:: get('/posts/create', [postController::class, 'create']);

Route:: get('/posts-/{post}', [postController::class,'show']);



