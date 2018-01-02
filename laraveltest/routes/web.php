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
Route::resource('register','registercontroller');
Route::get('/home', 'mycontroller@baseadress');

Route::get('/sign', 'registercontroller@create');


Route::get('/loginn', function () {

	return view('login');
});




Route::get('/tag', function () {
    return view('index');

});
Route::get('/index', function () {
    return view('tagss');
    });
    Route::get('/tag/java', function () {

    	return view('java');
    });
    Route::get('/tag/java/nullpointer', function () {

      return view('nullpointer');
    });
    Route::get('/question', function () {

      return view('compiler');
    });
    Route::get('/Article', function () {

      return view('articles');
    });
    Route::get('/allquestions', function () {

        return view('QUES');
      });
