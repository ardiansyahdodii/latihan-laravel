<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dodi Ardiansyah",
        "email" => "ardiansyahdodii@gmail.com",
        "image" => "dodi.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/blog?category={category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Post by Author : $category->name",
        'posts' => $category->posts->load(['category', 'user']),
    ]);
});


Route::get('/blog?author={user:username}', function (User $user) {
    return view('blog', [
        "title" => "Post by Author : $user->name",
        "posts" => $user->posts->load(['category', 'user']),
    ]);
});
