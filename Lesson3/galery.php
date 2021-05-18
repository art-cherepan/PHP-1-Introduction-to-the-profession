<?php
    $arr_images = [1 => 'dog1.jpg', 2 => 'dog2.jpg', 3 => 'dog3.jpg', 4 => 'dog4.jpg'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($arr_images as $key => $value) { ?>
        <a href="http://localhost/Lesson3/image.php?id=<?php echo $key; ?>"><img src="media/<?php echo $value; ?>" width="150" height="150"></a>
    <?php } ?>
</body>
</html>