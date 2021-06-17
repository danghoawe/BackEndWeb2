<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('/SingleProduct/{id}','ControllerHello@SingleProduct');


//Admin dang nhap

Route::get('admin/login','UserController@getLoginAdmin');
Route::post('admin/login','UserController@postLoginAdmin');
Route::get('admin/logout','UserController@getLogoutAdmin');
//Admin
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    Route::group(['prefix'=>'product'],function(){
        // Đường dẫn admin/product/list
        Route::get('list','ProductController@getList');

        Route::get('edit/{product_id}','ProductController@getEdit');
        Route::post('edit/{product_id}','ProductController@postEdit');

        Route::get('add','ProductController@getAdd');
        Route::post('add','ProductController@postAdd');

        Route::get('delete/{product_id}','ProductController@getDelete');
    });
    Route::group(['prefix'=>'manufacture'],function(){
        // Đường dẫn admin/manufacture/list
        Route::get('list','ManufactureController@getList');

        Route::get('edit/{manu_id}','ManufactureController@getEdit');
        Route::post('edit/{manu_id}','ManufactureController@postEdit');

        Route::get('add','ManufactureController@getAdd');
        Route::post('add','ManufactureController@postAdd');

        Route::get('delete/{manu_id}','ManufactureController@getDelete');
      
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

        Route::get('add','UserController@getAdd');
        Route::post('add','UserController@postAdd');

        Route::get('delete/{id}','UserController@getDelete');
    });
});




Route::get('/', function () {
    return view('home');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/cartshop', function () {
    return view('welcome');
})->middleware('verified');


//Cart
Route::get('/shoppage','ProductController@getItem');
Route::get('/Add-Cart/{id}','CartController@AddCart');
Route::get('/Delete-Item-Cart/{id}','CartController@DeleteCart');
Route::get('/cartshop','CartController@ViewListCart');
Route::get('/Delete-Item-List-Cart/{id}','CartController@DeleteListItemCart');
Route::get('/Save-Item-List-Cart/{id}/{quanty}','CartController@SaveListItemCart');
Route::post('/cartshop','CartController@Checkout');

//Checkout
Route::get('/checkout','CheckoutController@checkout')->middleware('verified');


//Comment
Route::post('comment/{product_id}','ControllerHello@postComment');