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
        })->name('home');

        Route::post('/signup', [
            'uses' => 'UserController@postSignUp',
            'as' => 'signup'
        ]);
        Route::get('/dashboard', [
            'uses' => 'PostController@getDashboard',
            'as' => 'dashboard',
            'middleware' => 'auth'
        ]);
        Route::post('/signin', [
            'uses' => 'UserController@postSignIn',
            'as' => 'signin'
        ]);
        Route::get('/account',[
            'uses'=>'UserController@getAccount',
            'as'=>'account'
        ]);
        Route::post('/updateaccount',[
            'uses'=>'UserController@postSaveAccount',
            'as'=>'account.save'

        ]);
        Route::get('/userimage/{filename}',[
            'uses'=>'UserController@getUserImage' ,
            'as'=>'account.image'
        ]);

        Route::post('/createpost', [
            'uses' => 'PostController@postCreatePost',
            'as' => 'post.create',
            'middleware' => 'auth'
        ]);
        Route::get('/post-delete/{post_id}', [
            'uses' => 'PostController@getDeletePost',
            'as' => 'post.delete',
            'middleware' => 'auth'
        ]);

        Route::get('/logout',[
           'uses' => 'UserController@getLogout',
            'as' =>'logout'
        ]);

        Route::post('/edit',[
            'uses'=>'PostController@postEditPost',
            'as'=> 'edit'

        ]);