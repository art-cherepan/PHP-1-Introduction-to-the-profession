<?php

//запускаем сессию
session_start();

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
                    //пишем лог
                    $handle = fopen(__DIR__ . '/log.txt', 'a+');
                    fwrite($handle, 'Пользователь ' . $_SESSION['username'] . ' Загрузил файл ' . $_FILES['img']['name'] . ' ' . date('m-d-Y h:i:s a', time()));
                    fclose($handle);
            }
        } else {
            ?><p>Файл с данным расширением недопустим!</p><?php
        }
    }
} else {
    ?><p>Файл не выбран!</p><?php
}