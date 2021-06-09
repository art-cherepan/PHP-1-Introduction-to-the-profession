<?php

$allowedExtensions = ['jpg', 'png'];
if (isset($_FILES['img'])) {
    if (0 == $_FILES['img']['error']) {
        //получаем расширение файла
        $extension = end(explode('.', strtolower($_FILES['img']['name'])));
        //если расширение подходит
        if (in_array($extension, $allowedExtensions)) {
            if (true === move_uploaded_file($_FILES['img']['tmp_name'],
                __DIR__ . '/tmp/' . $_FILES['img']['name'])
            ) {
                ?><p>Файл успешно загружен!</p><?php
            }
        } else {
            ?><p>Файл с данным расширением недопустим!</p><?php
        }
    }
} else {
    ?><p>Файл не выбран!</p><?php
}
?>