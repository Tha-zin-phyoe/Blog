<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class,'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class,'show']);

Route::get('/register', [AuthController::class,'create']);
Route::post('/register', [AuthController::class,'store']);
Route::post('/logout', [AuthController::class,'logout']);

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
