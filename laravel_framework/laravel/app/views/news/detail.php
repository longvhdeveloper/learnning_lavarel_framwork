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
    Khoa hoc : <?php
    echo $data['title'] . ' - ' . $data['price'];
    ?>
</body>
</html>