<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/Uploader.php';
require_once __DIR__ . '/../classes/Models/Service.php';

if (empty($_POST['id'])) {
    echo 'Не передан идентификатор услуги';
    die;
} elseif (empty($_POST['name'])) {
    echo 'Не передано наименование услуги';
    die;
} elseif (empty($_POST['description'])) {
    echo 'Не передано описание услуги';
    die;
} elseif (empty($_POST['price'])) {
    echo 'Не передана цена услуги';
    die;
} elseif (empty($_POST['duration'])) {
    echo 'Не передана продолжительность услуги';
    die;
}

if (!empty($_FILES)) {
    if ('' != $_FILES['img']['name']) {
        $uploader = new Uploader('img');
        if ($uploader->upload()) {
            $service = new Service($_POST['id'], $_POST['name'], $_POST['price'], $_POST['description'], str_replace('\\', '/',
                $uploader->getPath()), $_POST['duration']);
            if ($service->update(true)) {
                echo 'Услуга успешно изменена!';
            } else {
                echo 'Произошла ошибка при изменении услуги!';
            }
        } else {
            $service = new Service($_POST['id'], $_POST['name'], $_POST['price'], $_POST['description'], str_replace('\\', '/',
                $uploader->getPath()), $_POST['duration']);
            if ($service->update(false)) {
                echo 'Услуга успешно изменена!';
            } else {
                echo 'Произошла ошибка при изменении услуги!';
            }
        }
    }
}
