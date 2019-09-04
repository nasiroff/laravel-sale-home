<?php

// Posts Routes
Route::get('posts', 'PostsController@index')->name('posts.index');
Route::get('posts/create', 'PostsController@create')->name('posts.create');
Route::post('posts/store', 'PostsController@store');
Route::get('posts/show/{id}', 'PostsController@show');
Route::get('posts/edit/{id}', 'PostsController@edit');
Route::put('posts/update/{id}', 'PostsController@update');
Route::get('posts/delete/{id}', 'PostsController@destroy');



// Users Routes
Route::get('users', 'UsersController@index')->name('users.index');
Route::get('users/create', 'UsersController@create')->name('users.create');
Route::post('users/store', 'UsersController@store');
Route::get('users/show/{id}', 'UsersController@show');
Route::get('users/edit/{id}', 'UsersController@edit');
Route::put('users/update/{id}', 'UsersController@update');
Route::get('users/delete/{id}', 'UsersController@destroy');



// PostImages Routes
Route::get('postimages', 'PostImagesController@index')->name('postimages.index');
Route::get('postimages/create', 'PostImagesController@create')->name('postimages.create');
Route::post('postimages/store', 'PostImagesController@store');
Route::get('postimages/show/{id}', 'PostImagesController@show');
Route::get('postimages/edit/{id}', 'PostImagesController@edit');
Route::put('postimages/update/{id}', 'PostImagesController@update');
Route::get('postimages/delete/{id}', 'PostImagesController@destroy');



// Cities Routes
Route::get('cities', 'CitiesController@index')->name('cities.index');
Route::get('cities/create', 'CitiesController@create')->name('cities.create');
Route::post('cities/store', 'CitiesController@store');
Route::get('cities/show/{id}', 'CitiesController@show');
Route::get('cities/edit/{id}', 'CitiesController@edit');
Route::put('cities/update/{id}', 'CitiesController@update');
Route::get('cities/delete/{id}', 'CitiesController@destroy');



// Actions Routes
Route::get('actions', 'ActionsController@index')->name('actions.index');
Route::get('actions/create', 'ActionsController@create')->name('actions.create');
Route::post('actions/store', 'ActionsController@store');
Route::get('actions/show/{id}', 'ActionsController@show');
Route::get('actions/edit/{id}', 'ActionsController@edit');
Route::put('actions/update/{id}', 'ActionsController@update');
Route::get('actions/delete/{id}', 'ActionsController@destroy');



// Roles Routes
Route::get('roles', 'RolesController@index')->name('roles.index');
Route::get('roles/create', 'RolesController@create')->name('roles.create');
Route::post('roles/store', 'RolesController@store');
Route::get('roles/show/{id}', 'RolesController@show');
Route::get('roles/edit/{id}', 'RolesController@edit');
Route::put('roles/update/{id}', 'RolesController@update');
Route::get('roles/delete/{id}', 'RolesController@destroy');

