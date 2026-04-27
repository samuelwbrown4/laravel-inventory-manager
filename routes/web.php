<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Services\HomeService;

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

Route::get('/' , function (HomeService $homeService) {
    $categoryCount = $homeService->getCategoryCount();
    $productCount = $homeService->getProductCount();
    return view('home', ['categoryCount' => $categoryCount , 'products' => $productCount]);
});
