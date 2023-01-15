<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;


Route::get('/', [MainController::class, 'HomePage'])->name('main.home');
Route::get('/categories', [MainController::class, 'CategoriesPage'])->name('main.categories');
Route::get('/category/view/{name}', [MainController::class, 'CategoryView'])->name('main.category.view');
Route::get('/shop', [MainController::class, 'ShopPage'])->name('main.shop');
Route::get('/product/{id}', [MainController::class, 'ProductPage'])->name('main.product');
Route::get('/about', [MainController::class, 'AboutPage'])->name('main.about');
Route::get('/contact', [MainController::class, 'ContactPage'])->name('main.contact');
Route::get('/logout', [MainController::class, 'Logout'])->name('user.logout');
Auth::routes();
Auth::routes(['verify' => true]);

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::group(['middleware' => ['auth', 'verified']], function () {

        Route::get('/dashboard', [MainController::class, 'index'])->name('user.dashboard');
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
        Route::get('/order-detail/{orderid}', [MainController::class, 'OrderDetail'])->name('user.order.detail');
        Route::get('/order-confirm/{orderid}', [MainController::class, 'OrderConfirm'])->name('user.order.confirm');
        Route::get('/account-detail', [MainController::class, 'AccountDetail'])->name('user.account.detail');
        Route::post('/update-account/{id}', [MainController::class, 'UpdateAccount'])->name('update.user.account');
    });
});

/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/admin/home', [AdminController::class, 'superAdminHome'])->name('dashboard');

    // Admin Login 
    Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

    // Admin Change Password
    Route::get('/admin/change-password', [AdminController::class, 'ChangePassword'])->name('admin.change.password');

    Route::post('/update-password/{id}', [AdminController::class, 'UpdatePassword'])->name('admin.update.password');


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

    // Admin Customers
    Route::get('/admin/customers', [AdminController::class, 'ViewCustomers'])->name('admin.view.customers');
    Route::get('/admin/role/{email}', [AdminController::class, 'ChangeRole'])->name('admin.change.role');
    Route::post('/admin/role/{id}', [AdminController::class, 'UpdateRole'])->name('admin.update.role');
    Route::get('/admin/block/{email}', [AdminController::class, 'BlockCustomer'])->name('admin.block.customer');

    // Admin Orders
    Route::get('/admin/orders', [AdminController::class, 'ViewOrders'])->name('admin.view.orders');
    Route::get('/admin/orders/{orderid}', [AdminController::class, 'DeleteOrder'])->name('admin.delete.order');
    Route::get('/admin/order-detail/{orderid}', [AdminController::class, 'OrderDetail'])->name('admin.order.detail');
    Route::get('/admin/order-process/{orderid}', [AdminController::class, 'OrderProcess'])->name('admin.order.process');
    Route::get('/admin/order-status/{orderid}', [AdminController::class, 'OrderStatus'])->name('admin.order.status');
    Route::post('/admin/change-status/{orderid}', [AdminController::class, 'ChangeStatus'])->name('admin.order.change.status');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
