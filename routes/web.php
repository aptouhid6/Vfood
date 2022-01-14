<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\User\UserController;



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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [FrontController::class, 'home'])->name('front.home');
Route::get('/', [FrontController::class, 'home'])->name('frontend.home');
Route::get('product/{id}', [FrontController::class, 'product_details'])->name('frontend.product_details');

Route::get('admin/dashboard', function (){
    return view('admin.dashboard');
})->name('admin.dashbord');
Route::get('admin/blog', function (){
    return view('admin/blog');
})->name('admin.blog');


Route::resource('admin/category', CategoryController::class);
Route::resource('admin/product', ProductController::class);

Route::get('user/register', [UserController::class,'create'])->name('user.create');
Route::post('user/register', [UserController::class,'store'])->name('user.store');
Route::get('user/login', [UserController::class,'loginpage'])->name('user.loginpage');
Route::post('user/login', [UserController::class,'login'])->name('user.login');
Route::get('user/logout', [UserController::class,'logout'])->name('user.logout');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');