<?php


class Article
{
    protected $id;
    protected $heading;
    protected $text;
    protected $author;

    public function __construct($id, $heading, $text, $author)
    {
        $this->id = $id;
        $this->heading = $heading;
        $this->text = $text;
        $this->author = $author;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getHeading()
    {
        return $this->heading;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}