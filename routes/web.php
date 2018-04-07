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


route::get(
    '/welcome','SideController@home'
);
route::get(
    '/','SideController@home'
);
route::get(
    'map','SideController@Map'
);

route::get(
    'restaurent_list','RestaurantController@RestaoList'
);
route::get(
    'offer-list','OfferController@offerList'
);
route::get(
    'restaurent_info/{id}/','RestaurantController@RestInfo'
);
route::get(
    'restaurent_info2','RestaurantController@RestInfo2'
);
route::get(
    'admin-login','SideController@adminlogin'
);

route::post(
    '/order-item','OrderController@addOrder'
);
route::get(
    '/show-order','OrderController@showOrder'
);
route::get(
    '/delete-order/{id}','OrderController@deleteOrder'
);
route::get(
    '/post-review','ReviewController@addReview'
);
route::post(
    '/post-new-review','ReviewController@ReviewController'
);


Auth::routes();

Route::get('/admin-home', 'HomeController@index')->name('home');

Route::get('/category/add-category', 'CategoryController@index');
Route::post('/category/new-category', 'CategoryController@saveCategoryInfo');
Route::get('/category/manage-category', 'CategoryController@manageCategoryInfo');
Route::get('/cstegory/unpublidhed-cstegory/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/cstegory/publidhed-cstegory/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/cstegory/delete-cstegory/{id}', 'CategoryController@deleteCategoryInfo');
Route::get('/cstegory/edit-cstegory/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update-category', 'CategoryController@updateCategoryInfo');
//===================================HomePage=============================================
Route::get('/homepage/add-homePageInfo', 'HomeController@addHomePageInfo');
Route::post('/homepage/new-homePageInfo', 'HomeController@saveHomePageInfo');
Route::get('/homepage/manage-homePageInfo', 'HomeController@manageHomePageInfo');
Route::get('/homepage/delete-homePageInfo/{id}', 'HomeController@deleteHomePageInfo');
Route::get('/homepage/edit-homePageInfo/{id}', 'HomeController@editHomePageInfo');
Route::post('/homepage/update-homePageInfo', 'HomeController@updateHomePageInfo');
//==================================Restaurant=============================================

Route::get('/restaurant/add-restaurant', 'RestaurantController@addRestaurant');
Route::post('/restaurant/new-restaurant', 'RestaurantController@saveRestaurant');
Route::get('/restaurant/manage-restaurant', 'RestaurantController@manageRestaurant');
Route::get('/restaurant/delete-restaurant/{id}', 'RestaurantController@deleteRestaurant');
Route::get('/restaurant/unpublished-restaurant/{id}', 'RestaurantController@unpublishedRestaurant');
Route::get('/restaurant/published-restaurant/{id}', 'RestaurantController@publishedRestaurant');
Route::get('/restaurant/info-restaurant', 'RestaurantController@infoRestaurant');
Route::post('/restaurant/addinfo-restaurant', 'RestaurantController@addinfoRestaurant');

//==================================order==================================================
Route::get('/offer/add-offer', 'OfferController@addOffer');
Route::post('/offer/new-offer', 'OfferController@saveOffer');
Route::get('/offer/manage-offer', 'OfferController@manageOffer');
Route::get('/offer/delete-offer/{id}', 'OfferController@deleteOffer');
Route::get('/offer/unpublished-offer/{id}', 'OfferController@unpublishedOffer');
Route::get('/offer/published-offer/{id}', 'OfferController@publishedOffer');
//================================================================================
Route::get('/rewiewpost/manage-reviewpost', 'ReviewController@manageReview');
Route::get('/rewiewpost/delete-reviewpost/{id}', 'ReviewController@deleteReview');














