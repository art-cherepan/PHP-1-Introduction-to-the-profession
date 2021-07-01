<?php


class Article
{
    protected $shortText = '';
    protected $longText = '';
    protected $heading;
    protected $id;

    public function __construct($shortText, $longText, $heading, $id)
    {
        $this->heading = $heading;
        $this->longText = $longText;
        $this->shortText = $shortText;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getShortText()
    {
        return $this->shortText;
    }

    /**
     * @return string
     */
    public function getLongText()
    {
        return $this->longText;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}