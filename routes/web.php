<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StatusOrder;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\ShiperController;
use App\Http\Controllers\BlogController;
use App\Models\User;

// Route::get('/', function () {
//     User::create([
//     'name'=>'caovanson',
//     'email'=>'abc1@gmail.com',
//     'password'=>bcrypt(123),
//     ]);
//     User::create([
//     'name'=>'caovanson',
//     'email'=>'abc2@gmail.com',
//     'password'=>bcrypt(123),
//     ]);
// });


Route::group(['prefix'=>'/admin'],function(){


    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::get('login',[LoginAdminController::class, 'index']);

    Route::post('login',[LoginAdminController::class, 'check']);

    Route::get('logout',[LoginAdminController::class, 'logout']);

    Route::group(['prefix'=>'categories'],function(){
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/',[
                'as'=>'categories',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'categories.add',
                'uses'=>'create',
            ]);
            Route::get('edit/{id}',[
                'as'=>'categories.edit',
                'uses'=>'show',
            ]);
            Route::post('edit/{id}',[
                'as'=>'categories.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'categories.delete',
                'uses'=>'destroy',
            ]);
            Route::post('add',[
                'as'=>'categories.add',
                'uses'=>'store',
            ]);
        });
    });

    Route::group(['prefix'=>'product'],function(){
        Route::controller(ProductController::class)->group(function () {
            Route::get('/',[
                'as'=>'product',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'product.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'product.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'product.edit',
                'uses'=>'show',
            ]);
            Route::get('next',[
                'as'=>'product.next',
                'uses'=>'show1',
            ]);
            Route::post('next',[
                'as'=>'product.next',
                'uses'=>'nextPost',
            ]);
        });
    });

    Route::group(['prefix'=>'banner'],function(){
        Route::controller(BannerController::class)->group(function () {
            Route::get('/',[
                'as'=>'banner',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'banner.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'banner.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'banner.edit',
                'uses'=>'edit',
            ]);
            Route::post('edit/{id}',[
                'as'=>'banner.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'banner.delete',
                'uses'=>'destroy',
            ]);
        });
    });

    Route::group(['prefix'=>'status_order'],function(){
        Route::controller(StatusOrder::class)->group(function () {
            Route::get('/',[
                'as'=>'status_order',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'status_order.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'status_order.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'status_order.edit',
                'uses'=>'edit',
            ]);
            Route::post('edit/{id}',[
                'as'=>'status_order.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'status_order.delete',
                'uses'=>'destroy',
            ]);
        });
    });

    Route::group(['prefix'=>'users'],function(){
        Route::controller(UsersController::class)->group(function () {
            Route::get('/',[
                'as'=>'users',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'users.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'users.add',
                'uses'=>'store',
            ]);
            Route::get('change',[
                'as'=>'users.change',
                'uses'=>'edit',
            ]);
            Route::post('pass/{id}',[
                'as'=>'users.pass',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'status_order.delete',
                'uses'=>'destroy',
            ]);
            Route::get('config',[
                'as'=>'users.config',
                'uses'=>'config',
            ]);
        });
    });

    Route::group(['prefix'=>'store'],function(){
        Route::controller(StoreController::class)->group(function () {
            Route::get('/',[
                'as'=>'store',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'store.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'store.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'store.edit',
                'uses'=>'show',
            ]);
            Route::post('edit/{id}',[
                'as'=>'store.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'store.delete',
                'uses'=>'destroy',
            ]);
        });
    });

    Route::group(['prefix'=>'voucher'],function(){
        Route::controller(VoucherController::class)->group(function () {
            Route::get('/',[
                'as'=>'voucher',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'voucher.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'voucher.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'voucher.edit',
                'uses'=>'show',
            ]);
            Route::post('edit/{id}',[
                'as'=>'voucher.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'voucher.delete',
                'uses'=>'destroy',
            ]);
        });
    });

    Route::group(['prefix'=>'shiper'],function(){
        Route::controller(ShiperController::class)->group(function () {
            Route::get('/',[
                'as'=>'shiper',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'shiper.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'shiper.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'shiper.edit',
                'uses'=>'show',
            ]);
            Route::post('edit/{id}',[
                'as'=>'shiper.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'shiper.delete',
                'uses'=>'destroy',
            ]);
        });
    });

    Route::group(['prefix'=>'blog'],function(){
        Route::controller(BlogController::class)->group(function () {
            Route::get('/',[
                'as'=>'blog',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'blog.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'blog.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'blog.edit',
                'uses'=>'show',
            ]);
            Route::post('edit/{id}',[
                'as'=>'blog.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'blog.delete',
                'uses'=>'destroy',
            ]);
        });
    });

    Route::group(['prefix'=>'notification'],function(){
        Route::controller(NotificationController::class)->group(function () {
            Route::get('/',[
                'as'=>'notification',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'notification.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'notification.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'notification.edit',
                'uses'=>'show',
            ]);
            Route::post('edit/{id}',[
                'as'=>'notification.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'notification.delete',
                'uses'=>'destroy',
            ]);
        });
    });

    Route::group(['prefix'=>'pay'],function(){
        Route::controller(PayController::class)->group(function () {
            Route::get('/',[
                'as'=>'pay',
                'uses'=>'index',
            ]);
            Route::get('add',[
                'as'=>'pay.add',
                'uses'=>'create',
            ]);
            Route::post('add',[
                'as'=>'pay.add',
                'uses'=>'store',
            ]);
            Route::get('edit/{id}',[
                'as'=>'pay.edit',
                'uses'=>'show',
            ]);
            Route::post('edit/{id}',[
                'as'=>'pay.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'pay.delete',
                'uses'=>'destroy',
            ]);
        });
    });

    Route::group(['prefix'=>'order'],function(){
        Route::controller(OrderController::class)->group(function () {
            Route::get('/',[
                'as'=>'order',
                'uses'=>'index',
            ]);
            Route::get('check/{id}',[
                'as'=>'order.check',
                'uses'=>'check',
            ]);
            Route::get('add',[
                'as'=>'order.add',
                'uses'=>'store',
            ]);
            Route::get('ship',[
                'as'=>'order.ship',
                'uses'=>'ship',
            ]);
            Route::get('show/{id}',[
                'as'=>'order.show',
                'uses'=>'show',
            ]);
            Route::post('edit/{id}',[
                'as'=>'order.edit',
                'uses'=>'update',
            ]);
            Route::get('delete/{id}',[
                'as'=>'order.delete',
                'uses'=>'destroy',
            ]);
            Route::get('cancel',[
                'as'=>'order.cancel',
                'uses'=>'cancel',
            ]);
            Route::get('count_data',[
                'as'=>'order.count_data',
                'uses'=>'count_data',
            ]);
        });
    });

});

// Route::get('tra-cuu-don-hang-online','BillController@index')->name('tra-cuu-don-hang-online');
Route::controller(BillController::class)->group(function(){
    Route::get('tra-cuu-don-hang-online','index')->name('tra-cuu-don-hang-online');
    Route::get('bill','bill')->name('bill');
    Route::get('map','map')->name('map');
});

Route::controller(ShopController::class)->group(function () {
    Route::get('test','actionApriori')->name('test');
    Route::get('test1','indexTest')->name('test1');
    Route::get('login','login')->name('login');
    //Route::get('test1','indexTest')->name('test1');

    Route::post('search','search')->name('search');
    Route::get('get_item/{key}','get_item');
    Route::post('addToCart','store');
    Route::get('cart','show')->name('cart');
    Route::post('star','star')->name('star');
    Route::get('delete/{id}','destroy')->name('delete');
    Route::get('/cookies/{cookies}/product/{idproduct}/order/{id}','order');
    Route::get('/','index')->name('home');
    Route::get('/a','index1');
    Route::get('/b','index2');
    Route::get('/c','index3');
    Route::get('/{file}/{name}','product')->name('pro');
    Route::get('/{file}/{name}','product')->name('pro');
    Route::get('/{id}','create')->name('/p');
    //Route::get('/{name}',[ShopController::class, 'product'])->name('pro');
});



Route::controller(ApiController::class)->group(function(){
    Route::post('/shop_order','order_product')->name('shop_order');
});


Route::controller(BillController::class)->group(function(){
    Route::get('tra-cuu-don-hang-online','index')->name('tra-cuu-don-hang-online');
});


















