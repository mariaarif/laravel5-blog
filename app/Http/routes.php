<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});



Route::get('/foo', function () {
	return 'bar';
});



Route::get('/about', function () {
	return view('about');
});



Route::group(['prefix'=>'admin'], function () {
	Route::get('/hello/{name}', function ($name) {
		return "Hello $name!";
	});

	Route::get('/welcome/{name?}', function($name= 'Guest') {
		return "Welcome $name to Villa Mata Ano";
	});
});


Route::get('/hello/{name}', function ($name) {
	return "Hello $name!";
});




Route::get('/marhaban/{name?}', [
	'as' => 'welcome.guest',
	function($name = 'Guest') {
		return "Welcome $name to Mata Ano";
	}
	]);


Route::post('login-submit', function(){
	$result = "Login : " . Request::get('username');
	$result .=" | Katalaluan : " . Request::get('password');
	return $result;
});


Route::get('posts', function() {
    return view('posts.index'); 
    });



//Route::get('posts', 'PostsController@index');


//Route::get('posts/{id}', 'PostsController@show');


Route::resource('posts', 'PostsController');
Route::resource('categories', 'CategoriesController');



