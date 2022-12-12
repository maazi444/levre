<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;


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
Route::get('/logout', [MainController::class, 'Logout'])->name('user.logout');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('user.dashboard');
    Route::get('/dashboard/orders', [MainController::class, 'UserOrderPage'])->name('user.orders');
    Route::get('/dashboard/address', [MainController::class, 'UserAddressPage'])->name('user.address');
    Route::get('/dashboard/address/add', [MainController::class, 'AddUserAddress'])->name('add.user.address');
    Route::post('/dashboard/address/store', [MainController::class, 'StoreUserAddress'])->name('store.user.address');
    Route::get('/dashboard/address/edit', [MainController::class, 'EditUserAddress'])->name('edit.user.address');
    Route::post('/dashboard/address/update', [MainController::class, 'UpdateUserAddress'])->name('update.user.address');
    Route::post('/addToCart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/cart', [MainController::class, 'CartPage'])->name('user.cart');
    Route::get('update-cart-product/{id}', [ProductController::class, 'updateCartProduct'])->name('update.cart.product');
    Route::get('remove-from-cart/{id}', [ProductController::class, 'removeCartProduct'])->name('remove.from.cart');
    Route::post('/order-checkout', [ProductController::class, 'OrderCheckout'])->name('order.checkout');
    Route::get('/order/success', [MainController::class, 'OrderSuccessPage'])->name('order.success');
});

/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/admin/home', [AdminController::class, 'superAdminHome'])->name('dashboard');

    // Admin Login 
    // Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
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
