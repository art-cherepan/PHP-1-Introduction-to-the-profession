<?php

require_once __DIR__ . '/Article.php';

class News
{
    protected $articles = [];

    //Каждая новость - отдельный файл в папке news. Id новости соответсвует названию файла
    public function __construct()
    {
        $fileList = scandir(__DIR__ . '/../news');
        foreach ($fileList as $file) {
            if ($file != '.' && $file != '..') {
                $fileContent = file_get_contents(__DIR__ . '/../news/' . $file);
                $fileExplode = explode("&&&", $fileContent);
                $this->articles[] = new Article($fileExplode[0], $fileExplode[1], $fileExplode[2], $file);
            }
        }
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function append(Article $article)
    {
        $this->articles[] = $article;
    }

    public function save()
    {
        foreach ($this->articles as $article) {
            $data = $article->getShortText() . '&&&' . $article->getLongText() . '&&&' . $article->getHeading();
            if (file_put_contents(__DIR__ . '/../news/' . $article->getId(), $data) === FALSE) {
                return false;
            }
        }
        return true;
    }

    public function getLastIndex()
    {
        $fileList = scandir(__DIR__ . '/../news');
        return count ($fileList) + 1;
    }

}