<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About',[
        "title" => "About"
    ]);
    
});


Route::get('/store', function () {
    return view('Store',[
        "title" => "Store"
    ]);
    
});

Route::get('/eo', function () {
    return view('EO',[
        "title" => "Event Organizer"
    ]);
    
});

Route::get('/login', function () {
    return view('Login',[
        "title" => "Login"
    ]);
    
});

Route::get('/news', [PostController::class, 'index']);

Route::get('/news/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('news', [
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'news' => $category->post->load('category', 'author'),

    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('news', [
        'title' => "Post by Author : $author->name",
        'news' => $author->post->load('category', 'author'),
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
     return view('dashboard.index',[
            'title' => 'Dashboard'
     ]);
})->middleware('auth');

Route::resource('/dashboard/news', DashboardPostController::class)->middleware('auth');