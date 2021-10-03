<?php

require_once __DIR__ . '/../DB.php';
require_once __DIR__ . '/ReviewService.php';

class Service
{
    protected $id;
    protected $name;
    protected $price;
    protected $description;
    protected $path;
    protected $duration;
    protected $reviews;
    protected $DB;

    public function __construct($id, $name, $price, $description, $path, $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->duration = $duration;
        $this->path = $path;
        $this->DB = new DB('localhost', 'natural_stone', 'root', 'root');
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
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return mixed
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @return mixed
     */
    public function setReviews()
    {
        $select = 'SELECT * FROM reviews_services WHERE id_service=:id ORDER BY date DESC';
        $reviews = $this->DB->query($select, [':id' => $this->id]);
        if ($reviews != false) {
            foreach ($reviews as $review) {
                $this->reviews[] = new ReviewService($review['id'], $review['id_user'], $review['id_service'], $review['date'], $review['text']);
            }
            return true;
        }
        else {
            return false;
        }
    }

    public function insert()
    {
        $insert = 'INSERT services(name, price, description, path, duration) VALUES ('
            . '\'' . $this->name . '\'' . ',' . $this->price . ',' . '\''
            . $this->description . '\'' . ',' . '\'' . $this->path . '\'' . ',' . '\'' . $this->duration . '\'' . ')';
        return $this->DB->execute($insert);
    }

    public function update($withImg)
    {
        if (true == $withImg) {
            $update = 'UPDATE services SET name = ' . '\'' . $this->name
                . '\'' . ', description = ' . '\'' . $this->description
                . '\'' . ', price = ' . '\'' . $this->price . '\''
                . ', path = ' . '\'' . $this->path . '\'' . ', duration = ' . '\'' . $this->duration . '\'' . 'WHERE id = '
                . $this->id;
            return $this->DB->execute($update);
        } else {
            $update = 'UPDATE services SET name = ' . '\'' . $this->name
                . '\'' . ', description = ' . '\'' . $this->description
                . '\'' . ', price = ' . '\'' . $this->price . '\''
                . ', duration = ' . '\'' . $this->duration . '\'' . 'WHERE id = '
                . $this->id;
            return $this->DB->execute($update);
        }
    }

    public function delete()
    {
        $delete = 'DELETE FROM services WHERE id = ' . $this->id;
        return $this->DB->execute($delete);
    }
}