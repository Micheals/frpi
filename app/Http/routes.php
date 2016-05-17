
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',function(){
   return view('welcome');
});
Route::group(['prefix'=>'shopping-frpi/backend','middleware'=>'auth'],function(){
    Route::get('/', function () {
        return view('backend.pages.dashboard');
    });
//    attributes group
    Route::group(['prefix'=>'attr-group'],function(){
        Route::get('/',['uses'=>'AttributeGroup@index']);
        Route::get('/create',['uses'=>'AttributeGroup@create']);
        Route::get('/edit/{id}',['uses'=>'AttributeGroup@edit']);
        Route::post('/store',['uses'=>'AttributeGroup@store']);
        Route::put('/update',['uses'=>'AttributeGroup@update']);
    });
//    products
    Route::group(['prefix'=>'products'],function(){
        Route::get('/',['uses'=>'ProductController@index']);
        Route::get('/create',['uses'=>'ProductController@create']);
        Route::get('/next-page',['as'=>'next-page','uses'=>'ProductController@nextPage']);
        Route::get('/edit/{id?}',['uses'=>'ProductController@edit']);
        Route::post('/store',['uses'=>'ProductController@store']);
        Route::post('/update',['uses'=>'ProductController@update']);

    });
//    attributes
    Route::group(['prefix'=>'attributes'],function(){
        Route::get('/',['uses'=>'AttributeController@index']);
        Route::post('/store',['uses'=>'AttributeController@store']);
        Route::post('/delete-attr/{id?}',['as'=>'delete-attribute','uses'=>'AttributeController@destroy']);
    });
//    discounts
    Route::group(['prefix'=>'discounts'], function(){
        Route::post('/store',['uses'=>'DiscountController@store']);
        Route::post('/delete-discount',['uses'=>'DiscountController@destroy']);
    });
//    images
    Route::group(['prefix'=>'images'],function(){
        Route::post('/store',['uses'=>'ImageController@store']);
        Route::post('/delete-image',['uses'=>'ImageController@destroy']);
    });
//    categories
    Route::group(['prefix'=>'category'],function(){
        Route::get('/',['uses'=>'CategoryController@index']);
        Route::get('/create',['uses'=>'CategoryController@create']);
        Route::get('/edit/{id?}',['uses'=>'CategoryController@edit']);
        Route::post('/store',['uses'=>'CategoryController@store']);
        Route::post('/update',['uses'=>'CategoryController@update']);
    });
//    manufactures
    Route::group(['prefix'=>'manufacture'],function(){
        Route::get('/',['uses'=>'ManufactureController@index']);
        Route::get('/create',['uses'=>'ManufactureController@create']);
        Route::get('/edit/{id?}',['uses'=>'ManufactureController@edit']);
        Route::post('/store',['uses'=>'ManufactureController@store']);
        Route::post('/update',['uses'=>'ManufactureController@update']);
    });
//    customer group
    Route::group(['prefix'=>'customers-group'],function(){
        Route::get('/',['uses'=>'CustomerGroupController@index']);
        Route::get('/create',['uses'=>'CustomerGroupController@create']);
        Route::get('/edit/{id?}',['uses'=>'CustomerGroupController@edit']);
        Route::post('/store',['uses'=>'CustomerGroupController@store']);
        Route::post('/update',['uses'=>'CustomerGroupController@update']);
    });
//    tags
    Route::group(['prefix'=>'tags'],function(){
        Route::get('/',['uses'=>'TagController@index']);
        Route::get('/create',['uses'=>'TagController@create']);
        Route::get('/edit/{id?}',['uses'=>'TagController@edit']);
        Route::post('/store',['uses'=>'TagController@store']);
        Route::post('/update',['uses'=>'TagController@update']);
    });
//    reviews
    Route::group(['prefix'=>'reviews'],function(){
        Route::get('/',['uses'=>'ReviewController@index']);
        Route::get('/create',['uses'=>'ReviewController@create']);
        Route::get('/edit/{id?}',['uses'=>'ReviewController@edit']);
        Route::post('/store',['uses'=>'ReviewController@store']);
        Route::post('/update',['uses'=>'ReviewController@update']);
    });
//    collection
    Route::group(['prefix'=>'collections'],function(){
        Route::get('/',['uses'=>'CollectionController@index']);
        Route::get('/create',['uses'=>'CollectionController@create']);
        Route::get('/edit/{id?}',['uses'=>'CollectionController@edit']);
        Route::post('/store',['uses'=>'CollectionController@store']);
        Route::post('/update',['uses'=>'CollectionController@update']);
    });
});
Route::group(['prefix'=>'backend','middleware'=>'auth'],function(){
    Route::group(['prefix'=>'inventory'],function() {
        Route::get('/',['uses'=>'InventoryController@index']);
    });
});
Route::group(['prefix'=>'backend','middleware'=>'auth'],function(){
   Route::group(['prefix'=>'in-stock'],function(){
        Route::get('/',['uses'=>'InItemController@index']);
        Route::get('/create',['uses'=>'InItemController@create']);
        Route::post('/store',['uses'=>'InItemController@store']);
        Route::post('/delete',['uses'=>'InItemController@destroy']);
   });
});
Route::group(['prefix'=>'backend','middleware'=>'auth'],function(){
    Route::group(['prefix'=>'sold-out'],function(){
        Route::get('/',['uses'=>'OutItemController@index']);
    });
});
Route::group(['prefix'=>'shopping'],function(){
    Route::get('/',['as'=>'home','uses'=>'HomeController@home']);
    Route::get('/checkout', 'CheckoutController@checkout');
    Route::get('/cart', 'CartController@cart');
    Route::get('/product/{id?}', 'ProductPageController@show');
    Route::post('/addcart/store','ProductPageController@store');
    Route::post('/product/update','ProductPageController@update');
    Route::post('/product/delete','ProductPageController@destroy');
    Route::get('/category/{id?}','ProductPageController@category');
});
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');