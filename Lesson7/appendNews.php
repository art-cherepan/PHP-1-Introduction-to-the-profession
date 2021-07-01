<?php

require_once __DIR__ . '/classes/Article.php';
require_once  __DIR__ . '/classes/News.php';

if (!isset($_POST['ShortText'])) {
    echo 'Не заполнен короткий текст';
    die;
}

if(!isset($_POST['LongText'])) {
    echo 'Не заполнен основной текст';
    die;
}

if (!isset($_POST['Heading'])) {
    echo 'Не заполнен заголовок';
    die;
}

$news = new News();
//id нвоостей начинаются с 3 , т.к. в папке есть скрытые файлы . и ..
$id = $news->getLastIndex();
$article = new Article($_POST['ShortText'], $_POST['LongText'], $_POST['Heading'], $id);
$news->append($article);
if ($news->save() == true) {
    header('Location:/Lesson7');
}
else {
    echo 'Ошибка при добавлении нововсти';
    die;
}
