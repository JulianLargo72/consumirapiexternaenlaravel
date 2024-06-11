<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('posts', PostController::class, ['except' => ['create', 'edit']]);
Route::get('users/{user}/posts', [PostController::class, 'filteringResources']);
Route::get('comments/posts/{post}', [PostController::class, 'Listingnestedresources']);
