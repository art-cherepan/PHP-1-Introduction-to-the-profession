<?php

require_once __DIR__ . '/../classes/Uploader.php';
require_once __DIR__ . '/../classes/DB.php';

if (!isset($_POST['name'])) {
    echo 'Укажите наименование товара';
} elseif (!isset($_POST['description'])) {
    echo 'Укажите описание товара';
} elseif (!isset($_POST['price'])) {
    echo 'Укажите цену товара';
} else {
    $uploader = new Uploader('img');
    if ($uploader->upload()) {
        $insert = 'INSERT products(name, price, description, path) VALUES ('
            . '\'' . $_POST['name'] . '\'' . ',' . $_POST['price'] . ',' . '\''
            . $_POST['description'] . '\'' . ',' . '\'' . str_replace('\\', '/',
                $uploader->getPath()) . '\'' . ')';
        $DB = new DB('localhost', 'natural_stone', 'root', 'root');
        if (true == $DB->execute($insert)) {
            echo 'Товар добавлен успешно';
        } else {
            echo 'Произошла ошибка';
        };
    } else {
        echo 'Ошибка при згрузке файла';
    }
}