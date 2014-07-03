<?php

Route::group(['prefix' => 'api/v1'], function()
{
    Route::get('lessons/{id}/tags', 'TagsController@index');
    Route::resource('lessons', 'LessonsApiController');
    Route::resource('tags', 'TagsController', ['only' => ['index', 'show']]);
});

Route::get('/', 'HomeController@index');
Route::get('lessons/{id}', 'HomeController@show');