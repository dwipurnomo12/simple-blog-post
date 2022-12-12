<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardPageController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPageMenuController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/pages', DashboardPageController::class)->middleware('auth');

Route::resource('/dashboard/category', DashboardCategoryController::class)->middleware('auth');

Route::get('/dashboard/user/password', [DashboardUserController::class, 'password'])->middleware('auth');
Route::put('/dashboard/user/password', [DashboardUserController::class, 'changePassword'])->middleware('auth');
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('auth');

Route::resource('/dashboard/menu/header', DashboardMenuController::class)->middleware('auth');
Route::resource('/dashboard/menu/footer', DashboardPageMenuController::class)->middleware('auth');


Route::get('/', [PostController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'index']);

Route::get('/author/{author:username}', [AuthorController::class, 'index']);

Route::get('/page/{page:slug}', [PageController::class, 'show']);













