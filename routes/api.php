<?php
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header('Access-Control-Allow-Origin: *');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ApiController;
use App\Models\User;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'api'], function(){
    Route::controller(ApiController::class)->group(function () {
    Route::get('/sondz1','index')->name('sondz1');
    Route::get('/','sondz1');
    Route::get('/cate','show');
    Route::get('/data','create');
    Route::get('/sondz','sondz')->name('sondz');
});
 });


//'ApiController@sondz1'
    // Route::get('/','ApiController@index');
    // Route::get('cate','ApiController@show');
    // Route::get('data','ApiController@create');
    // Route::get('sondz','ApiController@sondz');
    // Route::get('sondz1',[
    //     'as'=>'sondz1',
    //     'uses'=>'ApiController@sondz1',
    // ]);
