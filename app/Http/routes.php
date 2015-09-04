<?php

/*
|--------------------------------------------------------------------------
| AUTH ROTES
|--------------------------------------------------------------------------
|
| Rotas para autenticar o usuario
|
*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
/*
|--------------------------------------------------------------------------
| GLOBAL ROTES
|--------------------------------------------------------------------------
|
| Rotas acessar o blog, e inserir comentarios.
|
*/
Route::get('/', 'PostController@index');
Route::get('post/{id}/{title}', ['as'=> 'post.single', 'uses' => 'PostController@show']);
Route::post('post/{id}/comment', ['as' => 'post.comment', 'uses' => 'CommentController@store']);
/*
|--------------------------------------------------------------------------
| ADMIN ROTES
|--------------------------------------------------------------------------
|
| Rotas para gerenciar o blog
|
*/
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::group(['prefix'=>'posts'], function(){
        Route::get('', ['as'=> 'admin.posts.index', 'uses' => 'PostAdminController@index']);
        Route::get('create', ['as'=> 'admin.posts.create', 'uses' => 'PostAdminController@create']);
        Route::post('store', ['as'=> 'admin.posts.store', 'uses' => 'PostAdminController@store']);
        Route::get('edit/{id}', ['as'=> 'admin.posts.edit', 'uses' => 'PostAdminController@edit']);
        Route::put('update/{id}', ['as'=> 'admin.posts.update', 'uses' => 'PostAdminController@update']);
        Route::get('destroy/{id}', ['as'=> 'admin.posts.destroy', 'uses' => 'PostAdminController@destroy']);
    });

    Route::group(['prefix'=>'tags'], function(){
        Route::get('', ['as'=> 'admin.tags.index', 'uses' => 'TagController@index']);
        Route::get('create', ['as'=> 'admin.tags.create', 'uses' => 'TagController@create']);
        Route::post('store', ['as'=> 'admin.tags.store', 'uses' => 'TagController@store']);
        Route::get('edit/{id}', ['as'=> 'admin.tags.edit', 'uses' => 'TagController@edit']);
        Route::put('update/{id}', ['as'=> 'admin.tags.update', 'uses' => 'TagController@update']);
        Route::get('destroy/{id}', ['as'=> 'admin.tags.destroy', 'uses' => 'TagController@destroy']);
    });

});
