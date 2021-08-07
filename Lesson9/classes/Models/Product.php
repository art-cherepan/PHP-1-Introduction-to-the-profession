<?php

require_once __DIR__ . '/../DB.php';
require_once __DIR__ . '/Review.php';

class Product
{
    protected $id;
    protected $name;
    protected $price;
    protected $description;
    protected $path;
    protected $reviews;

    public function __construct($description, $name, $path, $price)
    {
        $this->path = $path;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getReviews()
    {
        $DB = new DB('localhost', 'natural_stone', 'root', 'root');
        $select = 'SELECT * FROM reviews WHERE id=:id ORDER BY date DESC';
        $reviews = $DB->query($select, [':id' => $this->id]);
        //var_dump($reviews);
        //die;
        if ($reviews != false) {
            foreach ($reviews as $review) {
                //var_dump($review);
                $this->reviews[] = new Review($review['date'], $review['text'], $review['id_user']);
            }
        }
        else {
            die;
        }
    }
}