<?php

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'EcommerceController@index');
Route::get('/product', 'EcommerceController@product')->name('product.index');
Route::get('singleproduct/{slug}', ['as' => 'ecommerce.single-product', 'uses' => 'EcommerceController@getSingleProduct'])->where('slug', '[\w\d\-\_]+')->name('cart.show');

//THIS works with the product search
Route::get('/search', 'EcommerceController@search')->name('search');
//the controller cart below was builed using a -resource so take notes when it come to linking
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSave/{product}', 'CartController@saveForLater')->name('cart.save');

//Here we are making a save for later controller
Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToSave/{product}', 'SaveForLaterController@switchToCard')->name('saveForLater.save');

//Checkout From Here
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/guessCheckout', 'CheckoutController@index')->name('');

//Working with the contact page now
Route::get('/contact', 'EcommerceController@contact')->name('contact');
Route::post('contact', 'EcommerceController@postContact')->name('contact');

//Other Similar Pages Here
Route::get('/blog', 'EcommerceController@blog')->name('blog');
Route::get('/about', 'EcommerceController@about')->name('about');

//Here we create a route for testing to destroy the routes
Route::get('/empty', function() {
	Cart::instance('saveForLater')->destroy();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
