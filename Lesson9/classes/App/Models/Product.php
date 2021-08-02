<?php

namespace App\Models;

class Product
{
    protected $id;
    protected $name;
    protected $price;
    protected $description;
    protected $path;
    protected $reviews;

    public function __construct($id, $description, $name, $path, $price)
    {
        $this->id = $id;
        $this->path = $path;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $DB = new DB('localhost', 'natural_stone', 'root', 'root');
        $select = 'SELECT * FROM reviews WHERE id=:' . $id . 'ORDER BY date DESC';
        $reviews = $DB->query($select, [':id' => $id]);
        if ($reviews != false) {
            foreach ($reviews as $review) {
                $this->reviews[] = new Review($review->id, $review->date, $review->text, $review->id_user);
            }
        }
        else {
            die;
        }
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
}