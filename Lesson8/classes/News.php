<?php

require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/DB.php';

class News
{
    protected $articles = [];

    public function __construct()
    {
        $db = new DB('localhost', 'db_new', 'root', 'root');
        $records = $db->query('SELECT * from news order by id', '');
        foreach ($records as $record) {
            $this->articles[] = new Article($record['id'], $record['heading'], $record['text'], $record['author']);
        }
    }

    public function getArticles()
    {
        return $this->articles;
    }
}