<?php
use My\Application as Myapp;
$a = new Myapp\ABC();
$a->test();


function __autoload($class){
    $class = strtolower($class);
    $name = str_replace("\\", "/", $class);

    require $name . '.php';
}

