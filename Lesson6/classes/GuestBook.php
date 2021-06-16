<?php

require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    public function append($text)
    {
        $this->records[] = $text;
        return $this;
    }
}
