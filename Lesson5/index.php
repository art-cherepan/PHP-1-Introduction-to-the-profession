<?php

//запускаем сессию
session_start();
include __DIR__ . '/functions.php';

//Если файла с данными пользователей нет, либо он не доступен для чтения, создаем его, записываем пару строк
if (!is_readable(__DIR__ .'/usersData.txt')) {
    $handle = fopen(__DIR__ . '/usersData.txt', 'w+');
    fwrite($handle, 'Петя|' . password_hash('123', PASSWORD_DEFAULT) . PHP_EOL);
    fwrite($handle, 'Вася|' . password_hash('456', PASSWORD_DEFAULT));
    fclose($handle);
}

?>
<p><a href="/Lesson5/login.php">Авторизация</a></p>
<p><a href="/Lesson5/showPhotos.php">Показать фотки</a></p>
<p><a href="/Lesson5/addPhotosToGallery.php">Добавить фотки</a></p>