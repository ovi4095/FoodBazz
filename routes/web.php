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
    '/','SideController@index'
);
route::get(
    'map','SideController@Map'
);
route::get(
    'home','SideController@index'
);
route::get(
    'বিডিনেব','SideController@Bindex'
);
route::get(
    'restaurent_list','SideController@RestaoList'
);
route::get(
    'restaurent_info','SideController@RestInfo'
);
route::get(
    'restaurent_info2','SideController@RestInfo2'
);
route::get(
    'image_gallery','SideController@imagegallery'
);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
