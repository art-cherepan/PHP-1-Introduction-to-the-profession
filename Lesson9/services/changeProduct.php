<?php

session_start();

require_once __DIR__ . '/../classes/Uploader.php';
require_once __DIR__ . '/../classes/DB.php';

$fields = [];

if (!empty($_POST['id'])) {
    $fields['id'] = $_POST['id'];
} else {
    echo 'Не передан идентификатор товара';
    die;
}
if (!empty($_POST['name'])) {
    $fields['name'] = $_POST['name'];
} else {
    echo 'Не передано название товара';
    die;
}
if (!empty($_POST['description'])) {
    $fields['description'] = $_POST['description'];
} else {
    echo 'Не передано описание товара';
    die;
}
if (!empty($_POST['price'])) {
    $fields['price'] = $_POST['price'];
} else {
    echo 'Не передана цена товара';
    die;
}

if (!empty($_FILES)) {
    if ('' != $_FILES['img']['name']) {
        $uploader = new Uploader('img');
        if ($uploader->upload()) {
            $update = 'UPDATE products SET name = ' . '\'' . $fields['name']
                . '\'' . ', description = ' . '\'' . $fields['description']
                . '\'' . ', price = ' . '\'' . $fields['price'] . '\''
                . ', path = ' . '\'' . str_replace('\\', '/',
                    $uploader->getPath()) . '\'' . 'WHERE id = '
                . $fields['id'];
            $DB = new DB('localhost', 'natural_stone', 'root', 'root');
            if (true == $DB->execute($update)) {
                echo 'Товар успешно изменен';
            } else {
                echo 'Произошла ошибка';
            };
        } else {
            echo 'Ошибка при загрузке файла';
        }
    } else {
        $update = 'UPDATE products SET name = ' . '\'' . $fields['name'] . '\''
            . ', description = ' . '\'' . $fields['description'] . '\''
            . ', price = ' . '\'' . $fields['price'] . '\'' . 'WHERE id = '
            . $fields['id'];
        $DB = new DB('localhost', 'natural_stone', 'root', 'root');
        if (true == $DB->execute($update)) {
            echo 'Товар успешно изменен';
        } else {
            echo 'Произошла ошибка';
        };
    }
}
