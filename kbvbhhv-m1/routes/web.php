<?php

use App\Http\Controllers\product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\Basket;
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

Auth::routes();

Route::get('/where', function () {
    return view('where');
});
// Страница о месте нахождения компании

    //   Каталог, сортировка и выбор  товаров по фильтрам
Route::get('/catalog/product/{id}', [App\Http\Controllers\oneproduct::class, 'onelist']);
Route::get('/catalog', [product::class, 'prodlist']);
Route::get('/catalog/filter/{id}', [product::class, 'filterr']);
Route::get('/catalog/sort/{name}/{sort}', [product::class, 'prodlist']);


Route::get('/about', [App\Http\Controllers\about::class, 'slider']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/admin/product/editing', [admin::class, 'Editingprod']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [App\Http\Controllers\cartcontroller::class, 'index'])->name('cartIndex');
    Route::get('/cart/add/{product}', [App\Http\Controllers\cartcontroller::class, 'add'])->name('cartAdd');
    Route::get('/cart/remove/{id}', [App\Http\Controllers\cartcontroller::class, 'remove'])->name('cartRemove');
    Route::post('cart/update/{id}',[App\Http\Controllers\cartcontroller::class,'update'])->name('cartUpadate');

    });



    Route::get('/admin', [admin::class, 'admin'])->name('admin')->middleware('admin') ; // админка
    Route::get('/admin/cat', function () { return view('createcat');});     
    Route::post('/admin/cat/create',[admin::class,'creatcat'])->name('createcat');
    Route::get('/admin/product', [admin::class, 'createprod']);  //форма создания продуктов
    Route::post('/admin/product/create',[admin::class,'prodcreate'])->name('createprod'); // отправка в базу 
    Route::get('/admin/product/delete/{id}',[admin::class,'proddel']);         // удаление из базы
    Route::get('/admin/cat/delete/{id}',[admin::class,'catdel']);

    Route::get('/admin/product/edit/{id}',[admin::class,'prodedit'])->middleware('admin')->name('productedit');//редактирование продукта занесеного в базу данных
Route::post('/admin/product/edit/update/{id}',[admin::class,'produpdate'])->name('produpdate');
