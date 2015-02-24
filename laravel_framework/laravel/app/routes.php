<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
    return View::make('hello');
});

Route::get('/hello', function() {
    return View::make('hellopage');
});

Route::get('/user', 'UserController@index');

Route::get('/user/show/{id}', 'UserController@show');

View::share('demo', 'content Demo');

View::composer(array('user.show', 'user.index'), 'DemoComposer');

View::composer(
    array(
        'news.index',
        'news.detail',
        'news.del',
        'news.edit'
    ),
    'DemoComposer'
);

Route::get('admin/news', 'Controllers\\Admin\\NewsController@index');

Route::get('/news', 'NewsController@index');
Route::get('/news/detail/{id}', 'NewsController@detail');

View::composer(
    array('news.index', 'news.detail'), function($view){
        $menu = array(
            "1" => "Lập trình PHP",
            "2" => "Đồ Họa",
            "3" => "Phân tích thiết kế hệ thống",
            "4" => "Làm chủ CMS",
        );
        $view->with('menu', $menu);
    }
);
