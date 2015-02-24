<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<ul>
<?php
foreach ($menu as $item) {
    echo '<li>'.$item.'</li>';
}
?>
</ul>
<hr/>
<?php
foreach ($data as $key => $item) {
    echo '<a href="news/detail/'.$key.'">'.$item['title'].'</a><br/>';
}
?>
</ul>
</body>
</html>