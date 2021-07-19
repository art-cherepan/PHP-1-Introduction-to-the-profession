<?php

require_once __DIR__ . '/classes/News.php';
require_once  __DIR__ . '/classes/View.php';

$news = new News();
$view = new View();

$view->assign('articles', $news->getArticles());
$view->display(__DIR__ . '/templates/articles.php');