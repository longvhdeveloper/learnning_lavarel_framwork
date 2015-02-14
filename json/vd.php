<?php
$data = array(
    "name" =>  "Jackie",
    "email" => "vohoanglong07@gmail.com",
    "job" => "Web developer"
);
echo '<pre>';
print_r($data);
echo '</pre>';
$str = json_encode($data);
echo $str;

$str2 = serialize($data);
echo '<br/>';
echo $str2;


$data2 = json_decode($str, true);

echo '<pre>';
print_r($data2);
echo '</pre>';


$data3 = unserialize($str2);
echo '<pre>';
print_r($data3);
echo '</pre>';
