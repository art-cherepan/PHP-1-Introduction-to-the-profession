<?php
    include __DIR__.'/functions.php';
    $data = get_img_objects(__DIR__.'/images');
    if (gettype($data) === 'array') {
        foreach ($data as $key => $value) {
            if ($value == '.' || $value == '..') {
                continue;
            }
            ?><img src="<?php echo '/Lesson4/images/'.$value; ?>" width="150" height="150">
        <?php }
    }
    else {
?><p><h2>Данные не найдены!</h2></p>
<?php
    }
?>