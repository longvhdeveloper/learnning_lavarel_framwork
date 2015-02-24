<?php
class NewsController extends BaseController
{

    private $data = array(
        array(
            "title" => "PHP Cơ Bản",
            "price" => "1.000.000 VNĐ"
        ),
        array(
            "title" => "PHP Nâng Cao",
            "price" => "1.800.000 VNĐ"
        ),
        array(
            "title" => "Codeigniter Framework",
            "price" => "1.600.000 VNĐ"
        ),
        array(
            "title" => "Laravel Framework",
            "price" => "1.600.000 VNĐ"
        ),
    );

    public function index()
    {
        $data = array('data' =>  $this->data);
        return View::make('news.index', $data);
    }

    public function edit()
    {

    }

    public function detail($id)
    {
        $data = array(
            'data' => $this->data[$id],
        );

        return View::make('news.detail', $data);
    }

    public function del()
    {

    }
}