<?php

 use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route; 


 //Route::group(function () {


    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::post('/', [UserController::class, 'store'])->name('user.store');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/{user:id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/{user:id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/{user:id}', [UserController::class, 'destroy'])->name('user.destroy');
    });

    Route::prefix('banners')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('banner.index');
        Route::post('/', [BannerController::class, 'store'])->name('banner.store');
        Route::get('/create', [BannerController::class, 'create'])->name('banner.create');
        Route::get('/{banner:id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
        Route::put('/{banner:id}', [BannerController::class, 'update'])->name('banner.update');
        Route::delete('/{banner:id}', [BannerController::class, 'destroy'])->name('banner.destroy');
    });

    Route::prefix('brands')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('brand.index');
        Route::post('/', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
        Route::get('/{brand:id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
        Route::put('/{brand:id}', [BrandController::class, 'update'])->name('brand.update');
        Route::delete('/{brand:id}', [BrandController::class, 'destroy'])->name('brand.destroy');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::post('/', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('/{category:id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/{category:id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/{category:id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::post('/', [ProductController::class, 'store'])->name('product.store');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::get('/{product:id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/{product:id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/{product:id}', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::get('/childs', [ProductController::class, 'childs'])->name('childs');
    });

    Route::prefix('shippings')->group(function () {
        Route::get('/', [ShippingController::class, 'index'])->name('shipping.index');
        Route::post('/', [ShippingController::class, 'store'])->name('shipping.store');
        Route::get('/create', [ShippingController::class, 'create'])->name('shipping.create');
        Route::get('/{shipping:id}/edit', [ShippingController::class, 'edit'])->name('shipping.edit');
        Route::put('/{shipping:id}', [ShippingController::class, 'update'])->name('shipping.update');
        Route::delete('/{shipping:id}', [ShippingController::class, 'destroy'])->name('shipping.destroy');
    });

    Route::prefix('coupons')->group(function () {
        Route::get('/', [CouponController::class, 'index'])->name('coupon.index');
        Route::post('/', [CouponController::class, 'store'])->name('coupon.store');
        Route::get('/create', [CouponController::class, 'create'])->name('coupon.create');
        Route::get('/{coupon:id}/edit', [CouponController::class, 'edit'])->name('coupon.edit');
        Route::put('/{coupon:id}', [CouponController::class, 'update'])->name('coupon.update');
        Route::delete('/{coupon:id}', [CouponController::class, 'destroy'])->name('coupon.destroy');
    });
// });
