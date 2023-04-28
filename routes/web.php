<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::get('/register', [AuthController::class, 'create'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'post_login'])->middleware('guest');

// Comments
Route::post('/blogs/{blog:slug}', [CommentsController::class, 'store']);
Route::post('/blogs/{blog:slug}/subscription', [BlogController::class, 'subscriptionHandler']);


// Admin

// Route::get('/admin/blogs/create', [BlogController::class, 'create'])->middleware('isAdmin');
 Route::get('/admin/blogs/create', [AdminController::class, 'create']);
 Route::get('/admin/blogs', [AdminController::class, 'index']);
// Route::post('/admin/blogs/create', [BlogController::class, 'store'])->middleware('isAdmin');
Route::post('/admin/blogs/create', [AdminController::class, 'store']);
Route::delete('/admin/blogs/{blog:slug}/delete', [AdminController::class, 'destory']);
Route::get('/admin/blogs/{blog:slug}/edit', [AdminController::class, 'edit']);


// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('blogs', [
//         'blogs'=>$category->blogs,
//         'categories'=>Category::all(),
//         'currentCategory'=>$category
//     ]);
// });
// Route::get('/users/{user:username}', function (User $user) {
//     return view('blogs', [
//         'blogs'=>$user->blogs
//     ]);
// });
