<?php

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/News.php';

if (isset($_GET['id'])) {
    $news = new News();
    $articles = $news->getArticles();
    foreach ($articles as $article) {
        if ($article->getId() == $_GET['id']) {
            $view = new View();
            $view->assign('article', $article);
            $view->display(__DIR__ . '/templates/article.php');
        }
    }
}