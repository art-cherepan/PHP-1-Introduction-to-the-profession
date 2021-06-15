<?php

class GuestBook
{
    protected $pathToFile;
    protected $guestBookRecords;
    
    public function __construct($pathToFile)
    {
        $this->pathToFile = $pathToFile;
        $this->guestBookRecords = [];
        if (is_readable($this->pathToFile)) {
            $data = file_get_contents($this->pathToFile);
            if ('' != $data) {
                $this->guestBookRecords = explode(PHP_EOL, $data);
                //удаляем последний эл-нт, т.к. это пустая строка
                array_pop($this->guestBookRecords);
            }
        }
    }
    
    public function getData()
    {
        return $this->guestBookRecords;
    }
    
    public function append($text)
    {
        array_push($this->guestBookRecords, $text);
    }
    
    public function save()
    {
        $handle = fopen($this->pathToFile, 'w+');
        foreach ($this->guestBookRecords as $record) {
            fwrite($handle, $record . PHP_EOL);
        }
        fclose($handle);
    }
}