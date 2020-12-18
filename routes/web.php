<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\SliderController;
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
    return view('layouts.index-master');
});
Route::get('/hakkimda' , 'HomeController@showView');
/**
 * Product İşlemleri
 */
Route::get('/create-product' , [ProductController::class,'create'])->name('product.create');
Route::post('/save-product',[ProductController::class,'store'])->name('product.save');
Route::get('/show-product',[ProductController::class,'index'])->name('product.index');
Route::get('/export-products', [ProductController::class,'export'])->name('product.export');
/**
 * Slider İşlemleri
 */
Route::get('/show-sliders',[SliderController::class,'index'])->name('slider.index');
Route::get('/delete-slider/{id}',[SliderController::class,'destroy'])
    ->name('delete.slider')->where(array('id' =>'[0-9]+'));
/**
 * Kategori işlemleri
 */
 Route::get('/create-categories',[CategoryController::class,'create'])->name('category.create');
 Route::post('/save-categories',[CategoryController::class,'store'])->name('category.save');
 Route::get('/show-categories',[CategoryController::class,'index'])->name('category.show');
Route::get('/upload-categories',[CategoryController::class,'upload'])->name('category.upload');
Route::post('/import-categories', [CategoryController::class,'import'])->name('category.import');
/**
 * Ödev Kısmı
 */
Route::get('/category', [HomeController::class, 'showCategory'])->name('product.index');
Route::get('/laters', [HomeController::class, 'latersView'])->name('product.laters');
Route::get('/banner', [HomeController::class, 'bannerView'])->name('product.banner');
Route::get('/blog', [HomeController::class, 'blogView'])->name('product.blog');
Route::get('/categorySlider', [HomeController::class, 'categorySliderView'])->name('product.categorySlider');

/*LOGIN*/
Route::get('/login', [SmsController::class,'indexLogin'])->name('login');
Route::get('/forget', [SmsController::class,'indexForget'])->name('forget');
Route::post('/forget-send', [SmsController::class,'sendPasswordWithMessage'])->name('forget.send');
