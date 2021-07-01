<?php

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/News.php';

?>
<h2>Гостевая книга</h2>
<?php
$view = new View();
$guestBook = new GuestBook();
$view->assign('guestBookRecords', $guestBook->getRecords());
$view->display(__DIR__ . '/templates/guestBookRecords.php');
?>

<form action="/Lesson7/append.php" method="post">
    <textarea name="message"></textarea>
    <button type="submit">Отправить</button>
</form>

<h2>Новости</h2>
<?php
$news = new News();
$view->assign('articles', $news->getArticles());
$view->display(__DIR__ . '/templates/articles.php');
?>
<form action="/Lesson7/appendNews.php" method="post">
    <textarea name="ShortText"></textarea>
    <textarea name="LongText"></textarea>
    <textarea name="Heading"></textarea>
    <button type="submit">Отправить</button>
</form>
