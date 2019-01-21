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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'tuluyen'], function () {
    Route::get('/',[
        'as'    =>  'tuluyen',
        'uses'  =>  'TuLuyenController@getTuLuyen'
    ]);
    Route::get('thongtin',[
        'as'    =>  'thongtin',
        'uses'  =>  'TuLuyenController@getThongTin'
    ]);
    Route::get('congphap',[
        'as'    =>  'congphap',
        'uses'  =>  'TuLuyenController@getCongPhap'
    ]);
    Route::get('kynang',[
        'as'    =>  'kynang',
        'uses'  =>  'TuLuyenController@getKyNang'
    ]);
    Route::get('thientai',[
        'as'    =>  'thientai',
        'uses'  =>  'TuLuyenController@getThienTai'
    ]);
    Route::get('tuchat',[
        'as'    =>  'tuchat',
        'uses'  =>  'TuLuyenController@getTuChat'
    ]);
    Route::get('luyendan',[
        'as'    =>  'luyendan',
        'uses'  =>  'TuLuyenController@getLuyenDan'
    ]);
    Route::get('luyenkhi',[
        'as'    =>  'luyendan',
        'uses'  =>  'TuLuyenController@getLuyenKhi'
    ]);
    Route::get('tuido',[
        'as'    =>  'tuido',
        'uses'  =>  'TuLuyenController@getTuiDo'
    ]);
    Route::get('thucuoi',[
        'as'    =>  'thucuoi',
        'uses'  =>  'TuLuyenController@getThuCuoi'
    ]);

});
