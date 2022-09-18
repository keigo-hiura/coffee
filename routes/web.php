<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//ダッシュボードに飛ぶ
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//一覧表示
Route::get('/list', function () {
    return view('coffee.list');
})->middleware(['auth'])->name('list');


//記事一覧

// Route::group(['prefix' => 'post'], function() {
//     //crud機能

//     Route::get('/index', [PostController::class,'index'])->name('index');
//     Route::get('/create', [PostController::class,'create'])->name('create');
//     Route::post('/store',[PostController::class,'store'])->name('store');
//     Route::get('/show/{id}', [PostController::class,'show'])->name('show');
//     Route::get('/edit/{id}', [PostController::class,'edit'])->name('edit');
//     Route::post('/update', [PostController::class,'update'])->name('update');
//     Route::get('/destroy', [PostController::class,'destroy'])->name('destroy');

// });

Route::resource('post', PostController::class);


Route::get('/serch', function () {
    return view('coffee.serch');
})->middleware(['auth'])->name('serch');



Route::group(['prefix' => 'detail'], function() {
    //コーヒーの各詳細

    Route::get('/mocha', function () {return view('coffee_product.mocha');})->name('mocha');
    Route::get('/brazil', function () {return view('coffee_product.brazil');})->name('brazil');
    Route::get('/blue_mountain', function () {return view('coffee_product.blue_mountain');})->name('mountain');
    Route::get('/jawa', function () {return view('coffee_product.jawa_coffee');})->name('jawa');
    Route::get('/guatemala', function () {return view('coffee_product.guatemala');})->name('guatemala');
    Route::get('/kona', function () {return view('coffee_product.kona');})->name('kona');
    Route::get('/kilimanjaro', function () {return view('coffee_product.kilimanjaro');})->name('kilimanjaro');
    Route::get('/toraja', function () {return view('coffee_product.toraja');})->name('toraja');


});


require __DIR__.'/auth.php';
