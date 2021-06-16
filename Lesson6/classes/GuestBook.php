<?php

require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    public function append($text)
    {
        array_push($this->records, $text);
        return $this;
    }
}