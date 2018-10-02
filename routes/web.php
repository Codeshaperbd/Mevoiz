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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/search/{searchKay}', 'Controller@search')->name('country.search');

Route::get('/', 'Controller@index')->name('packeg.index');
Route::get('/allPackeg', 'Controller@allPackeg')->name('allPackeg');
Route::get('/contact', 'Controller@contact')->name('contact');
Route::post('/send', 'Controller@send')->name('contact.send');

/*
* => packeg by country
*/
Route::get('/countryPackeg/{id}', 'Controller@getCountryPackeg')->name('packeg.country');
/*
* => Packeg add to cart
*/
Route::get('/add-to-cart/{id}', 'Controller@getAddToCart')->name('packeg.addToCart');
/*
* => Packeg add to cart
*/
Route::get('/shopping-cart', 'Controller@getCart')->name('packeg.shoppingCart');
/*
* => reduce by one
*/
Route::get('/reduce/{id}', 'Controller@getReduceByOne')->name('packeg.getReduceByOne');
/*
* => reduce by all
*/
Route::get('/remove/{id}', 'Controller@getRemoveItem')->name('packeg.remove');
/*
* => Profile settings
*/
Route::resource('/profile', 'Auth\UserController');
// Route::get('/passowrdChange', 'Auth\UserController@passowrdChange');
Route::post('/passowrdChange', 'Auth\UserController@passowrdChange')->name('passowrdChange');
/*
* => Packeg checkout
*/
Route::get('/checkout', 'Controller@getCheckout')->name('checkout')->middleware('auth');
Route::post('/checkout', 'Controller@postCheckout')->name('checkout')->middleware('auth');



Route::get('/pay', 'PaypalPaymentController@getpaywithPaypal')->name('pay');
Route::post('/pay', 'PaypalPaymentController@getpaywithPaypal')->name('pay');
// route for check status of the payment
Route::get('status', 'PaypalPaymentController@getPaymentStatus');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

/*
* =>checck my packeg
*/
Route::get('/myPackeg', 'Auth\UserController@getMyPackeg')->name('packeg.myPackeg');
/*
* =>subscribe
*/

Route::get('/subscribe', 'SubscribeController@create')->name('subscribe.create');
Route::post('/subscribe', 'SubscribeController@create')->name('subscribe.create');
Route::get('/admin/subscriber', 'SubscribeController@index')->middleware('auth:admin')->name('admin.subscriber');
Route::delete('/admin/subscriber/destroy/{id}', 'SubscribeController@destroy')->middleware('auth:admin')->name('admin.subscriber.destroy');
//verify account email
Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

//support route
Route::get('/support', 'SupportController@index')->name('a.support');


//how it's work
Route::get('/howWorks', function () {
    return view('howWorks');
})->name('a.howWorks');



/*
|--------------------------------------------------------------------------
| Admin Route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function(){

	Route::get('/login', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');

	Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');

	Route::get('/register', 'Admin\AdminLoginController@register')->name('admin.register');

	Route::get('/', 'AdminHomeController@index')->name('admin.dashboard');

	Route::get('/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

	Route::post('/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');
	
	//change password foradmin
	Route::resource('/adminUser','Admin\AdminUsersController');
	
	Route::get('/changePassword','Admin\AdminUsersController@showChangePasswordForm');
	
	Route::post('/changePassword','Admin\AdminUsersController@changePassword')->name('changePassword');

	Route::get('/profileUpdate','Admin\AdminUsersController@profileUpdate');


	//Country Controloler
	Route::resource('/country', 'Admin\AdminCountryController',['names'=>[

		'index' => 'country.index',
		'single' => 'country.show',
		'create' => 'country.create',
		'store' => 'country.store',
		'edit' => 'country.edit',
		'destroy' => 'country.destroy',
		
	]]);

	Route::resource('/countryBanner', 'CountryBannerController',['names'=>[

		'index' => 'countryBanner.index',
		'create' => 'countryBanner.create',
		'store' => 'countryBanner.store',
		'destroy' => 'countryBanner.destroy',
		
	]]);

	//Country Controloler
	Route::resource('/managePackeg', 'Admin\PackegController',['names'=>[

		'index' => 'managePackeg.index',
		'single' => 'managePackeg.show',
		'create' => 'managePackeg.create',
		'store' => 'managePackeg.store',
		'edit' => 'managePackeg.edit',
		'destroy' => 'managePackeg.destroy',
		
	]]);

	// Admin packeg status Routes
	Route::get('/managePackeg/{id}/status','Admin\PackegController@status')->name('managePackeg.status');
	// Admin packeg status RoutesmanagePackeg.feature
	Route::get('/managePackeg/{id}/feature','Admin\PackegController@feature')->name('managePackeg.feature');
	// Admin packeg status RoutesmanagePackeg.feature
	Route::get('/fearurePackegs','Admin\PackegController@fearurePackegs')->name('managePackeg.fearurePackegs');

	//change password foradmin
	Route::resource('/userInfo','Admin\UserDetailsController');

	//change password foradmin
	Route::resource('/localPayment','Admin\LocalPaymentController');
	//change password foradmin
	Route::resource('/orderDetails','Admin\OrderController');
	Route::get('/recentOrder','Admin\OrderController@recentOrder')->name('recent.order');
	//Change FAQ
	Route::resource('/faq','Admin\SupportsFAQController');



	// form route 28-04-2018
	Route::get('/form1','TestController@form1');
    Route::get('/form1/index','TestController@index');
    Route::get('/form2','TestController@form2');

});