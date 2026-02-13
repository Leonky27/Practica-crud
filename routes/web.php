<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Traits\RouteTrait;

Route::get('/', [HomeController::class, 'home']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::put('/posts/{post}', [PostController::class, 'update']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::delete('/posts/{post}', [PostController::class, 'destroy']);