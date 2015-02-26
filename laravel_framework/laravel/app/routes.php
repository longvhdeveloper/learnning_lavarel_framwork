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

$action = function($page = '', $id = 0){
    if ($page != '') {
        return 'route active . this is ' . $page . ' id = ' . $id;
    }

};

Route::get('/route/vd2/{page}', function($page){
    return View::make('hellopage')->with('page_id', $page);
});

Route::get('route/vd1/{page}/{id}', $action)
    ->where('page', '[a-zA-Z\-]+')
    ->where('id', '[0-9]+');

Route::get('myshop/test', array('as' => 'myshop', function(){
    return "my shop page test";
}));

Route::get('route/user', array('as' => 'test', 'uses' => 'UsersController@index'));

Route::group(
    array('prefix' => 'myshop'),
    function(){
        Route::get('/vd123', function(){
            return 'vd123';
        });
        Route::get('/vd456', function(){
            return 'vd 456';
        });
    }
);

Route::group(array('domain' => 'myshop.com.vn'), function(){
    Route::get('my/profile', function(){
        return 'my profile jackie';
    });
});

Route::get('filter/test', function(){
    $str = '<form action="'.URL::to('filter/testsubmit').'" method="post">';
    $str .= 'Input: <input type="text" name="num" size = "15" /><br/>';
    $str .= '<input type="submit" name="fsubmit" /></form>';
    return $str;
});

Route::post('filter/testsubmit',array(
    'before' => 'number:'.Input::get('num').'|even',
    'after' => 'even',
    function(){
        return 'It is Ok';
    }
));

Route::when('admin/*', 'checkAdmin');

// Route::get('/user', 'UserController@index');
//
// Route::get('/user/show/{id}', 'UserController@show');
//
// View::share('demo', 'content Demo');
//
// View::composer(array('user.show', 'user.index'), 'DemoComposer');
//
// View::composer(
//     array(
//         'news.index',
//         'news.detail',
//         'news.del',
//         'news.edit'
//     ),
//     'DemoComposer'
// );
//
// Route::get('admin/news', 'Controllers\\Admin\\NewsController@index');
//
// Route::get('/news', 'NewsController@index');
// Route::get('/news/detail/{id}', 'NewsController@detail');
//
// View::composer(
//     array('news.index', 'news.detail'), function($view){
//         $menu = array(
//             "1" => "Lập trình PHP",
//             "2" => "Đồ Họa",
//             "3" => "Phân tích thiết kế hệ thống",
//             "4" => "Làm chủ CMS",
//         );
//         $view->with('menu', $menu);
//     }
// );
