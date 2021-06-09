<?php
    function getFileRecords($pathToFile)
    {
        if (is_readable($pathToFile)) {
            $data = file_get_contents($pathToFile);
            return explode(PHP_EOL, $data);
        }
        else {
            return false;
        }
    }

    function getImgObjects($pathToFile)
    {
        if (is_readable($pathToFile)) {
            return scandir($pathToFile);
        }
        else {
            return false;
        }
    }
?>