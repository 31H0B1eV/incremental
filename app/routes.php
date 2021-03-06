<?php

Route::group(['prefix' => 'api/v1'], function()
{
    Route::get('lessons/{id}/tags', 'TagsController@index');
    Route::resource('lessons', 'LessonsApiController');
    Route::resource('tags', 'TagsController', ['only' => ['index', 'show']]);
});

Route::get('/', function()
{
    return View::make('main');
});

Route::get('lessons', array( 'as' => 'home', 'uses' => 'HomeController@index' ));
//Route::get('lessons/{id}', 'HomeController@show');
Route::get('/auth_redirect_url', 'HomeController@getToken');

Route::get('folder', 'FolderController@index');