<?php

use App\Models\Galery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
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
    return view('index.home', [
        'title' => 'home',
        'name' => 'Fajar',
        'umur' => 17

    ]);
});
Route::get('/about', function () {
    return view('index.about', [
        'title' => 'about'
    ]);
});

Route::get('/galeries', [CategoryController::class, 'index']);

Route::get('/galeries/{category}', [GaleryController::class, 'show']);



Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');