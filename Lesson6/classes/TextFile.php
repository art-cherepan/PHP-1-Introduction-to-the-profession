<?php

class TextFile
{
    protected $pathToFile;
    protected $records;
    
    public function __construct($pathToFile)
    {
        $this->pathToFile = $pathToFile;
        $this->records = [];
        if (is_readable($this->pathToFile)) {
            $data = file_get_contents($this->pathToFile);
            if ('' != $data) {
                $this->records = explode(PHP_EOL, $data);
                //удаляем последний эл-нт, т.к. это пустая строка
                array_pop($this->records);
            }
        }
    }
    
    public function getData()
    {
        return $this->records;
    }
    
    public function save()
    {
        $handle = fopen($this->pathToFile, 'w+');
        foreach ($this->records as $record) {
            fwrite($handle, $record . PHP_EOL);
        }
        fclose($handle);
    }
}