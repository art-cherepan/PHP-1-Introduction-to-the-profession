<?php
    //var_dump($_FILES);
    $allowed_extensions = ['jpg', 'png'];
    if (isset($_FILES['img'])) {
        if (0 == $_FILES['img']['error']) {
            $array = explode('.', strtolower($_FILES['img']['name']));
            $ext = end($array);
            if (in_array($ext, $allowed_extensions)) {
                $res = move_uploaded_file($_FILES['img']['tmp_name'], __DIR__ . '/tmp/' . $_FILES['img']['name']);
            }
        }
    }
?>