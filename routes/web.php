<?php

use App\Http\Controllers\Web\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'register' => false
]);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){

    Route::get('/', 'DashboardController@index')->name('home');

    //Contact lists
    Route::get('/contacts', 'ContactController@index')->name('contacts.index');
    Route::get('/contacts/{id}', 'ContactController@show')->name('contacts.show');

    //OrderQueries
    // Route::get('/order-queries', 'OrdersController@query')->name('order.query');
    // Route::get('/order-queries/{id}', 'OrdersController@queryShow')->name('order.query.show');

    //Orders
    Route::get('/orders', 'OrdersController@index')->name('orders.index');
    Route::get('/orders/{id}', 'OrdersController@show')->name('orders.show');
    Route::post('/orders/{id}/complete', 'OrdersController@complete')->name('orders.complete');

    //Category
    Route::resource('categories', 'CategoryController');

    //Tags
    Route::resource('tags', 'TagsController');

    //Services
    Route::post('services/slug', 'ServicesController@getSlug')->name('services.getSlug');
    Route::resource('services', 'ServicesController');

    //Blogs
    Route::post('blogs/slug', 'BlogsController@getSlug')->name('blogs.getSlug');
    // Route::post('blogs',    'Admin\BlogsController@index')->name('blogs.show');
    Route::resource('blogs', 'BlogsController');

    //Fare
    Route::resource('fare', 'FareController');

    //Web Setting
    Route::resource('web-setting', 'WebSettingController', ['only' => ['index', 'edit', 'update']]);

    //Change Password
    Route::get('/change-password', 'ProfileController@changePassword')->name('change.password');
    Route::post('/change-password', 'ProfileController@changePasswordUpdate')->name('change.password.update');
});

Route::group(['namespace' => 'Web' ], function() {

    Route::view('/ksa'     ,     'pages.flag-one')->name('kas.flag');
    Route::view('/cv-qatar',     'pages.flag-two')->name('qatar.flag');
    Route::view('/cv-oman',      'pages.flag-three')->name('oman.flag');
    Route::view('/cv-kuwait',     'pages.flag-four')->name('kuwait.flag');
    Route::view('/bahrain',        'pages.flag-five')->name('bahrain.flag');
    Route::view('/guarantees', 'pages.legal.gaurantee')->name('guarantee');
    Route::view('/refund-policy', 'pages.legal.refund')->name('refund');
    Route::view('/cookie-policy' , 'pages.legal.cookie')->name('cookie');
    // PagesController
    Route::get('/',             "PagesController@index")->name('home');
    Route::get('/about',        "PagesController@about")->name('about');
    Route::get('/blog',         "PagesController@blogs")->name('blogs');
    Route::get('/prices',       "PagesController@pricing")->name('price');
    Route::get('/samples',      "PagesController@samples")->name('samples');
    Route::get('/reviews',      "PagesController@reviews")->name('reviews');
    Route::get('/sitemap',      "PagesController@sitemap")->name('sitemap');
    Route::post('/get-fare',    "PagesController@getFare")->name('get.fare');
    Route::post('/order-query', "PagesController@orderQuery")->name('order.query');

    // ContactController
    Route::get('/contact',    "ContactController@create")->name('contact');
    Route::post('/contact',   "ContactController@store")->name('contact.store'); 

    // OrdersController
    Route::get('/order',         "OrdersController@create")->name('order');
    Route::post('/order',        "OrdersController@store")->name('order.store');

    // PoliciesController
    // Route::get('/revision-policy',      "PoliciesController@revisionPolicy")->name('policy.revision');
    // Route::get('/refund-policy',        "PoliciesController@refundPolicy")->name('policy.refund');
    Route::get('/terms-and-conditions', "PoliciesController@termsAndConditions")->name('policy.terms-and-conditions');
    Route::get('/privacy-policy',       "PoliciesController@privacyPolicy")->name('policy.privacy-policy');
    
 
    // ServicesController
    // Route::get('/',           "ServicesController@create")->name('services');
    // Route::get('{slug}',      "ServicesController@show")->name('services.show');
    Route::get('/cover-letter-writing',"ServicesController@pageone")->name('services.one');
    Route::get('/linkedin-profile-writing',"ServicesController@pagetwo")->name('services.two');
    Route::get('/resume-editing',"ServicesController@pagethree")->name('services.three');
    Route::get('/cv-editing',"ServicesController@pagefour")->name('services.four');

    // BlogsController
    Route::get('{slug}',      "BlogController@show")->name('blog.show');

});


