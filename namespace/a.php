<?php
namespace test;
use My\Application\test2 as test2;
require 'c.php';
class ABC
{
    public function __construct()
    {
        echo 'Hello class ABC';
    }
}

CONST RED = "Mau do";
$a = new test2\BCD();
$a->demoCall();
//$a = new ABC();

echo __NAMESPACE__;
