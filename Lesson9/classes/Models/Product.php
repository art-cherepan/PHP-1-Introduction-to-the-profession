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

    public function __construct($id, $name, $price, $description, $path)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->path = $path;
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
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
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
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getReviews()
    {
        return $this->reviews;
    }
    
    /**
     * @param mixed
     */
    public function setReviews()
    {
        $DB = new DB('localhost', 'natural_stone', 'root', 'root');
        $select = 'SELECT * FROM reviews WHERE id_product=:id ORDER BY date DESC';
        $reviews = $DB->query($select, [':id' => $this->id]);
        if ($reviews != false) {
            foreach ($reviews as $review) {
                $this->reviews[] = new Review($review['id'], $review['id_user'], $review['id_product'], $review['date'], $review['text']);
            }
            return true;
        }
        else {
            return false;
        }
    }
}