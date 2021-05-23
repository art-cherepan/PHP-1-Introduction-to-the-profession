<?php
    $arr_images = [1 => 'dog1.jpg', 2 => 'dog2.jpg', 3 => 'dog3.jpg', 4 => 'dog4.jpg'];
    if (isset($_GET['id'])) {
?>
<img src="/Lesson3/media/<?php echo $arr_images[$_GET['id']]; ?>">
<?php } ?>