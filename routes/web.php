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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/services', 'HomeController@services');
Route::get('/portfolio', 'HomeController@portfolio');

/***
 * Auth routes
 */

Route::get('login', [
    'as' => 'auth.login',
    'uses' => 'Auth\LoginController@getLogin'
]);
Route::post('auth/login', [
    'as' => 'auth.login.do',
    'uses' => 'Auth\LoginController@login'
]);
Route::get('auth/register', [
    'as' => 'auth.register',
    'uses' => 'Auth\RegisterController@getRegister'
]);
Route::post('auth/register', [
    'as' => 'auth.register.do',
    'uses' => 'Auth\RegisterController@postRegister'
]);
Route::get('auth/logout', [
    'as' => 'auth.logout',
    'uses' => 'Auth\LoginController@logout'
]);
/**
    Admin Routes
 */

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function ($route){
    /**
    Dashboard
     */
    Route::get('dashboard',[
        'as' => 'admin.dashboard.index',// Route
        'uses' => 'Admin\DashboardController@index'
    ]);
    /**
    Post
     */
    Route::get('posts',[
        'as' => 'admin.post.index',// Route
        'uses' => 'Admin\PostController@index'
    ]);
    Route::get('posts/create',[
        'as' => 'admin.post.create',// Route
        'uses' => 'Admin\PostController@create'
    ]);
    Route::post('posts/store', [
        'as' => 'admin.post.store',
        'uses' => 'Admin\PostController@store'
    ]);
    Route::get('posts/{id}/edit', [
        'as' => 'admin.post.edit',
        'uses' => 'Admin\PostController@edit'
    ]);
    Route::post('posts/{id}/update', [
        'as' => 'admin.post.update',
        'uses' => 'Admin\PostController@update'
    ]);
    Route::get('posts/{id}/delete', [
        'as' => 'admin.post.delete',
        'uses' => 'Admin\PostController@delete'
    ]);
    /**
    Category
     */
    Route::get('categories',[
        'as' => 'admin.category.index',// Route
        'uses' => 'Admin\CategoryController@index'
    ]);
    Route::get('categories/create',[
        'as' => 'admin.category.create',// Route
        'uses' => 'Admin\CategoryController@create'
    ]);
    Route::post('categories/store', [
        'as' => 'admin.category.store',
        'uses' => 'Admin\CategoryController@store'
    ]);
    Route::get('categories/{id}/edit', [
        'as' => 'admin.category.edit',
        'uses' => 'Admin\CategoryController@edit'
    ]);
    Route::post('categories/{id}/update', [
        'as' => 'admin.category.update',
        'uses' => 'Admin\CategoryController@update'
    ]);
    Route::get('categories/{id}/delete', [
        'as' => 'admin.category.delete',
        'uses' => 'Admin\CategoryController@delete'
    ]);

    /**
     * Users
     */
    Route::get('users',[
        'as' => 'admin.user.index',// Route
        'uses' => 'Admin\UserController@index'
    ]);
    Route::get('users/create',[
        'as' => 'admin.user.create',// Route
        'uses' => 'Admin\UserController@create'
    ]);
    Route::post('users/store', [
        'as' => 'admin.user.store',
        'uses' => 'Admin\UserController@store'
    ]);
    Route::get('users/{id}/edit', [
        'as' => 'admin.user.edit',
        'uses' => 'Admin\UserController@edit'
    ]);
    Route::post('users/{id}/update', [
        'as' => 'admin.user.update',
        'uses' => 'Admin\UserController@update'
    ]);
    Route::get('users/{id}/delete', [
        'as' => 'admin.user.delete',
        'uses' => 'Admin\UserController@delete'
    ]);

    /**
     * Roles
     */
    Route::get('roles',[
        'as' => 'admin.role.index',// Route
        'uses' => 'Admin\RoleController@index'
    ]);
    Route::get('roles/create',[
        'as' => 'admin.role.create',// Route
        'uses' => 'Admin\RoleController@create'
    ]);
    Route::post('roles/store', [
        'as' => 'admin.role.store',
        'uses' => 'Admin\RoleController@store'
    ]);
    Route::get('roles/{id}/edit', [
        'as' => 'admin.role.edit',
        'uses' => 'Admin\RoleController@edit'
    ]);
    Route::post('roles/{id}/update', [
        'as' => 'admin.role.update',
        'uses' => 'Admin\RoleController@update'
    ]);
    Route::get('roles/{id}/delete', [
        'as' => 'admin.role.delete',
        'uses' => 'Admin\RoleController@delete'
    ]);
});
