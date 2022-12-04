<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'HomePage'])->name('main.home');
Route::get('/categories', [MainController::class, 'CategoriesPage'])->name('main.categories');
Route::get('/shop', [MainController::class, 'ShopPage'])->name('main.shop');
Route::get('/product/{id}', [MainController::class, 'ProductPage'])->name('main.product');
Route::get('/about', [MainController::class, 'AboutPage'])->name('main.about');
Route::get('/contact', [MainController::class, 'ContactPage'])->name('main.contact');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('user.dashboard');
});

/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/admin/home', [AdminController::class, 'superAdminHome'])->name('dashboard');

    // Admin Login 
    Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

    // Admin Categories
    Route::get('/admin/categories', [AdminController::class, 'ViewCategory'])->name('admin.categories');
    Route::get('/admin/categories/add', [AdminController::class, 'CreateCategory'])->name('admin.create.category');
    Route::post('/admin/categories/store', [AdminController::class, 'StoreCategory'])->name('admin.category.store');
    Route::get('/admin/categories/edit/{id}', [AdminController::class, 'EditCategory'])->name('admin.edit.category');
    Route::post('/admin/categories/update/{id}', [AdminController::class, 'UpdateCategory'])->name('admin.update.category');
    Route::get('/admin/categories/delete/{id}', [AdminController::class, 'DeleteCategory'])->name('admin.delete.category');

    // Admin Products
    Route::get('/admin/products', [AdminController::class, 'ViewProducts'])->name('admin.products');
    Route::get('/admin/products/add', [AdminController::class, 'CreateProduct'])->name('admin.create.product');
    Route::post('/admin/products/store', [AdminController::class, 'StoreProduct'])->name('admin.store.product');
    Route::get('/admin/products/edit/{id}', [AdminController::class, 'EditProduct'])->name('admin.edit.product');
    Route::post('/admin/products/update/{id}', [AdminController::class, 'UpdateProduct'])->name('admin.update.product');
    Route::get('/admin/products/delete/{id}', [AdminController::class, 'DeleteProduct'])->name('admin.delete.product');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
