<?php
class UserController extends BaseController
{
    public function index()
    {
        return View::make('user.index')->nest('child', 'user.other');
    }

    public function show($id)
    {
        //$data['news'] = $id;
        return View::make("user.show")->with("news", $id);
    }
}