<?php


namespace App\Models;

class Review
{
    protected $id;
    protected $text;
    protected $date;
    protected $userId;

    public function __construct($id, $date, $text, $userId)
    {
        $this->id = $id;
        $this->text = $text;
        $this->date = $date;
        $this->userId = $userId;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}