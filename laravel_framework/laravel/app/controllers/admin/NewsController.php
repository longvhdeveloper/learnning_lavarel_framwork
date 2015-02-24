<?php
namespace Controllers\Admin;
//use BaseController, View;
class NewsController extends \BaseController
{
    public function index()
    {
        return \View::make('admin.news.index');
    }
}