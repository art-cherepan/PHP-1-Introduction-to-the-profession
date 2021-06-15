<?php

include __DIR__ . '/functions.php';

$records = getImgObjects(__DIR__ . '/images');
if (false !== $records) {
    if ('array' === gettype($records)) {
        foreach ($records as $key => $value) {
            if ('.' == $value || '..' == $value) {
                continue;
            }
            ?><img src="<?php
            echo '/Lesson5/images/' . $value; ?>" width="150" height="150">
            <?php
        }
    } else {
        ?><p><h2>Данные не найдены!</h2></p>
        <?php
    }
} else {
    ?><p>Ошибка при получении списка файлов!</p><?php
}