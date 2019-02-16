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
  
        return view('pages.index')->with('title', 'Home');
});

Route::get('route', function(){
    //send session data with neil.
    return redirect('/')->with('name', 'neil');
});


Route::get('file', function(){
    return response()->download('D:/大林分隊.txt', '08不是asÉcii.txt');
});

Route::get('json', function(){
    return response()->json([
        'name' => 'neilñóóiã',
        'state' => 'poor'
    ]);
});

Route::get('control', 'PhotoController@index');

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // 符合 「/admin/users」 URL
        abort(404);
    });
});

Route::domain('{account}.localhost')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //http://heeloo.localhost:8000/user/1
        return $account . $id ;
    });
});

//Route::get('inspire', 'inspire');

Route::view('welcome', 'welcome');

Route::redirect('/here', '/there', 301);


// learning laravel from scratch
Route::get('about', 'PagesController@about');
Route::get('index', 'PagesController@index');
Route::get('services', 'PagesController@services');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
