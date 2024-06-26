<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class, 'home']);
route::get('view_category', [AdminController::class, 'view_category'])->middleware(['auth', 'admin']);
route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin']);
route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->middleware(['auth', 'admin']);
route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->middleware(['auth', 'admin']);
route::post('update_category/{id}', [AdminController::class, 'update_category'])->middleware(['auth', 'admin']);
route::get('view_product', [AdminController::class, 'view_product']);
route::post('add_product', [AdminController::class, 'add_product']);
route::get('show_product', [AdminController::class, 'show_product']);
route::get('delete_product/{id}', [AdminController::class, 'delete_product']);
route::get('update_product/{id}', [AdminController::class, 'update_product']);
route::post('update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);
route::get('product_search', [AdminController::class, 'product_search']);
route::get('product_details/{id}', [HomeController::class, 'product_details']);
route::post('add_cart/{id}', [HomeController::class, 'add_cart'])->middleware(['auth', 'verified']);
route::get('mycart', [HomeController::class, 'mycart'])->middleware(['auth', 'verified']);
route::get('delete_cart/{id}', [HomeController::class, 'delete_cart'])->middleware(['auth', 'verified']);
route::get('shop', [HomeController::class, 'shop']);
route::get('faq', [HomeController::class, 'faq']);
route::get('contact', [HomeController::class, 'contact']);

route::get('search', [HomeController::class, 'searchdata']);
route::post('confirm_order', [HomeController::class, 'confirm_order'])->middleware(['auth', 'verified']);
route::get('view_orders', [AdminController::class, 'view_order'])->middleware(['auth', 'admin']);
route::get('revenue', [AdminController::class, 'revenue'])->middleware(['auth', 'admin']);
route::get('on_the_way/{id}', [AdminController::class, 'on_the_way'])->middleware(['auth', 'admin']);
route::get('delivered/{id}', [AdminController::class, 'delivered'])->middleware(['auth', 'admin']);
route::get('print_pdf/{id}', [AdminController::class, 'print_pdf'])->middleware(['auth', 'admin']);


route::get('/dashboard', [HomeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');
route::get('/myorders', [HomeController::class, 'myorders'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
