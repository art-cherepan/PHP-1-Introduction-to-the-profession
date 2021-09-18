<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/Uploader.php';
require_once __DIR__ . '/../classes/DB.php';

if (empty($_POST['name'])) {
    echo 'Укажите наименование товара';
} elseif (empty($_POST['description'])) {
    echo 'Укажите описание товара';
} elseif (empty($_POST['price'])) {
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