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

Auth::routes();

Route::group(['prefix' => '/', 'as' => 'root',], function(){
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('team', 'HomeController@team')->name('team');
    Route::get('invitation', 'HomeController@invitation')->name('invite');
    Route::group(['prefix' => 'notification'], function(){
        Route::get('/', 'HomeController@notification')->name('notification');
        Route::post('create', 'HomeController@createNotification');
        Route::post('delete', 'HomeController@deleteNotification');
    });

    Route::group(['prefix' => 'projects', 'as' => 'projects',], function(){
        Route::get('/', 'HomeController@projectMenu')->name('projectMenu');
        Route::post('/', 'HomeController@createProject')->name('createProject');
        Route::group(['prefix' => '{project_id}',], function(){
            Route::get('/', 'HomeController@projectView')->name('projectView');
            Route::post('user-project', 'HomeController@addUserProject');
        });
    });

    Route::group(['prefix' => 'lists', 'as' => 'lists',], function(){
        Route::post('/', 'HomeController@createList')->name('createList');
    });

    Route::group(['prefix' => 'cards', 'as' => 'cards',], function(){
        Route::post('/', 'HomeController@createCard')->name('createCard');
    });

    // Route::group(['prefix' => 'cards', 'as' => 'cards',], function(){
    //     Route::post('/', 'HomeController@createCard')->name('createCard');
    // });

    Route::group(['prefix' => 'chats', 'as' => 'chats',], function(){
        Route::get('/', 'HomeController@chatMenu')->name('chatMenu');
        Route::group(['prefix' => '{project_id}',], function(){
            Route::get('/', 'HomeController@chatProject')->name('chatProject');
            Route::post('send', 'HomeController@createChat');
        });
    });


    Route::get('settings', 'HomeController@settingMenu')->name('settingMenu');
    Route::get('reset', 'HomeController@resetPassword')->name('resetPassword');
    Route::get('workspace', 'HomeController@workspaceSettings')->name('workspaceSettings');
    Route::get('helps', 'HomeController@helps')->name('helps');
    Route::get('feedback', 'HomeController@feedback')->name('feedback');
});
