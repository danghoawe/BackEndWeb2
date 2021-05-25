<?php

use Illuminate\Support\Facades\Auth;
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
/*
Route::get('/', function () {
    return view("Login");
} );*/

Route::get('/{id?}','ControllerHello@show' );
Route::get('/SingleProduct/{id?}','ControllerHello@SingleProduct');

// Route::get('admin',function(){
//     return view('admin.product.list');
// });

// Route::get('cart',function(){
//     return view('a');
// });

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'product'],function(){
        // Đường dẫn admin/product/list
        Route::get('list','ProductController@getList');
        Route::get('edit','ProductController@getEdit');
        Route::get('add','ProductController@getAdd');
        Route::post('add','ProductController@postAdd');
    });
    Route::group(['prefix'=>'manufacture'],function(){
        // Đường dẫn admin/manufacture/list
        Route::get('list','ManufactureController@getList');
        Route::get('edit','ManufactureController@getEdit');
        Route::get('add','ManufactureController@getAdd');
    });
    Route::group(['prefix'=>'protype'],function(){
        // Đường dẫn admin/protype/list
        Route::get('list','ProtypeController@getList');

        Route::get('edit/{protype_id}','ProtypeController@getEdit');
        Route::post('edit/{protype_id}','ProtypeController@postEdit');

        Route::get('add','ProtypeController@getAdd');
        Route::post('add','ProtypeController@postAdd');

        Route::get('delete/{protype_id}','ProtypeController@getDelete');
    });
    Route::group(['prefix'=>'user'],function(){
        // Đường dẫn admin/user/list
        Route::get('list','UserController@getList');

        Route::get('edit/{id}','UserController@getEdit');
        Route::post('edit/{id}','UserController@postEdit');

        Route::get('delete/{id}','UserController@getDelete');
    });
});

Auth::routes();



